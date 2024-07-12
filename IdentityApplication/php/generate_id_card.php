<?php
// generate_id_card.php
require 'db.php';
require 'vendor/autoload.php'; // Make sure to include the required libraries for PDF generation
use Dompdf\Dompdf;
use Dompdf\Options;

if (isset($_GET['id'])) {
    $application_id = $_GET['id'];

    $sql = "SELECT a.*, i.unique_id FROM applications a 
            JOIN id_cards i ON a.id = i.application_id 
            WHERE a.id = '$application_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $application = $result->fetch_assoc();
        $full_name = $application['full_name'];
        $address = $application['address'];
        $birthday = $application['birthday'];
        $national_id = $application['national_id'];
        $email = $application['email'];
        $job_role = $application['job_role'];
        $unique_id = $application['unique_id'];
        $profile_picture = '../uploads/' . $application['profile_picture'];

        // Generate ID card as PDF
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);
        $html = "
            <html>
            <head>
                <style>
                    .id-card { width: 3in; height: 4in; border: 1px solid #000; padding: 10px; }
                    .id-card img { width: 100px; height: 100px; }
                    .id-card h1 { font-size: 20px; margin: 0; }
                    .id-card p { font-size: 12px; margin: 5px 0; }
                </style>
            </head>
            <body>
                <div class='id-card'>
                    <img src='$profile_picture' alt='Profile Picture'>
                    <h1>$full_name</h1>
                    <p>National ID: $national_id</p>
                    <p>Birthday: $birthday</p>
                    <p>Address: $address</p>
                    <p>Unique ID: $unique_id</p>
                    <p>Job Role: $job_role</p>
                </div>
            </body>
            </html>
        ";
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $pdf_output = $dompdf->output();

        // Save PDF to server
        $pdf_file = "../uploads/$unique_id.pdf";
        file_put_contents($pdf_file, $pdf_output);

        // Send PDF to email
        require 'send_email.php';
        send_email($email, $pdf_file);

        echo "ID card generated and sent to $email";
    } else {
        echo "No application found.";
    }
}
?>
