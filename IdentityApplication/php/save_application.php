<?php
// save_application.php
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $address = $conn->real_escape_string($_POST['address']);
    $birthday = $conn->real_escape_string($_POST['birthday']);
    $national_id = $conn->real_escape_string($_POST['national_id']);
    $email = $conn->real_escape_string($_POST['email']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $job_role = $conn->real_escape_string($_POST['job_role']);
    $profile_picture = $_FILES['profile_picture']['name'];
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($profile_picture);

    if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO applications (user_id, full_name, address, birthday, national_id, email, mobile, job_role, profile_picture) 
                VALUES ('$user_id', '$full_name', '$address', '$birthday', '$national_id', '$email', '$mobile', '$job_role', '$profile_picture')";

        if ($conn->query($sql) === TRUE) {
            $application_id = $conn->insert_id;
            // Generate unique ID and save it to id_cards table
            $unique_id = uniqid('ID-');
            $sql = "INSERT INTO id_cards (application_id, unique_id) VALUES ('$application_id', '$unique_id')";

            if ($conn->query($sql) === TRUE) {
                // Generate ID card as PDF and send to email
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
