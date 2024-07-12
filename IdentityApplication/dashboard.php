<?php
// dashboard.php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="php/logout.php">Logout</a>
    <form id="application-form" action="php/save_application.php" method="post" enctype="multipart/form-data">
        <input type="text" name="full_name" placeholder="Full Name" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="date" name="birthday" placeholder="Birthday" required>
        <input type="text" name="national_id" placeholder="National ID" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="mobile" placeholder="Mobile Number" required>
        <input type="text" name="job_role" placeholder="Job Role" required>
        <input type="file" name="profile_picture" accept="image/png, image/jpeg" required>
        <button type="submit">Generate ID Card</button>
    </form>
</body>
</html>
