<!-- application.php -->
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

require 'php/db.php';

// Fetch user details if needed
$email = $_SESSION['email'];
$sql = "SELECT * FROM signup WHERE email='$email'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Application</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Employee Application</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <form id="application-form" action="php/application_handler.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <label for="full_name">Full Name:</label>
                <input type="text" name="full_name" required>
                <label for="address">Address:</label>
                <input type="text" name="address" required>
                <label for="birthday">Birthday:</label>
                <input type="date" name="birthday" required>
                <label for="national_id">National ID Number:</label>
                <input type="text" name="national_id" required>
                <label for="mobile_number">Mobile Number:</label>
                <input type="text" name="mobile_number" required>
                <label for="job_role">Job Role:</label>
                <input type="text" name="job_role" required>
                <label for="profile_picture">Profile Picture:</label>
                <input type="file" name="profile_picture" accept="image/png, image/jpeg" required>
                <button type="submit">Submit Application</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Company Name. All rights reserved.</p>
    </footer>
</body>
</html>
