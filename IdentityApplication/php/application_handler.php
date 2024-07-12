<?php
// application_handler.php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../login.php");
    exit();
}

require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $full_name = $_POST['full_name'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];
    $national_id = $_POST['national_id'];
    $mobile_number = $_POST['mobile_number'];
    $job_role = $_POST['job_role'];
    $profile_picture = $_FILES['profile_picture'];

    // File upload
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($profile_picture["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($profile_picture["tmp_name"]);
    if ($check === false) {
        die("File is not an image.");
    }

    // Check file size
    if ($profile_picture["size"] > 500000) {
        die("Sorry, your file is too large.");
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        die("Sorry, only JPG, JPEG, & PNG files are allowed.");
    }

    // Move file to target directory
    if (move_uploaded_file($profile_picture["tmp_name"], $target_file)) {
        // Save application details
        $sql = "INSERT INTO applications (email, full_name, address, birthday, national_id, mobile_number, job_role, profile_picture) 
                VALUES ('$email', '$full_name', '$address', '$birthday', '$national_id', '$mobile_number', '$job_role', '". basename($profile_picture["name"]) ."')";

        if ($conn->query($sql) === TRUE) {
            $application_id = $conn->insert_id;

            // Generate unique company ID
            $unique_id = uniqid();

            // Save generated ID card details
            $sql = "INSERT INTO id_cards (application_id, unique_id) VALUES ('$application_id', '$unique_id')";
            if ($conn->query($sql) === TRUE) {
                header("Location: generate_id_card.php?id=$application_id");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $conn->close();
}
?>
