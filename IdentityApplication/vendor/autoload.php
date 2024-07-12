<?php
require '../vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;

// Fetch application details from the database
$id = $_GET['id'];
require 'db.php';
$sql = "SELECT * FROM applications WHERE id = '$id'";
$result = $conn->query($sql);
$application = $result->fetch_assoc();

// Prepare HTML content for the PDF
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .id-card { width: 3in; height: 4in; border: 1px solid #000; padding: 10px; text-align: center; }
        .id-card img { width: 100px; height: 100px; }
        .id-card h2 { margin: 0; }
        .id-card p { margin: 5px 0; }
    </style>
</head>
<body>
    <div class="id-card">
        <img src="../uploads/' . $application['profile_picture'] . '" alt="Profile Picture">
        <h2>' . $application['full_name'] . '</h2>
        <p>National ID: ' . $application['national_id'] . '</p>
        <p>Birthday: ' . $application['birthday'] . '</p>
        <p>Address: ' . $application['address'] . '</p>
        <p>Job Role: ' . $application['job_role'] . '</p>
        <p>Unique ID: ' . uniqid() . '</p>
    </div>
</body>
</html>
';

// Initialize Dompdf and render the HTML as PDF
$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$pdf = $dompdf->output();

// Save the PDF to a file
file_put_contents('../id_cards/id_card_' . $application['id'] . '.pdf', $pdf);

// Send the PDF as an email attachment
$to = $application['email'];
$subject = 'Your Employee ID Card';
$message = 'Please find attached your employee ID card.';
$headers = "From: noreply@company.com\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"boundary\"\r\n";

$attachment = chunk_split(base64_encode($pdf));
$body = "--boundary\r\n";
$body .= "Content-Type: text/plain; charset=UTF-8\r\n";
$body .= "Content-Transfer-Encoding: 7bit\r\n";
$body .= "\r\n$message\r\n";
$body .= "--boundary\r\n";
$body .= "Content-Type: application/pdf; name=\"id_card.pdf\"\r\n";
$body .= "Content-Transfer-Encoding: base64\r\n";
$body .= "Content-Disposition: attachment; filename=\"id_card.pdf\"\r\n";
$body .= "\r\n$attachment\r\n";
$body .= "--boundary--";

mail($to, $subject, $body, $headers);

// Inform the user
echo "ID card generated and sent to the employee's email.";
?>
