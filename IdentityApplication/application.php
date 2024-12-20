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
<html lang="en" style="margin: 0; padding: 0; box-sizing: border-box;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Application</title>
</head>
<body style="margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif; line-height: 1.6; color: #33475b; background-color: #f5f8fa;">
    <header style="background: white; padding: 1rem 2rem; border-bottom: 1px solid #eaf0f6; position: sticky; top: 0; z-index: 1000;">
        <nav style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center; gap: 1rem;">
                <img src="https://img.freepik.com/premium-vector/phoenix-logo-design-vector-illustration-white-background_833755-21540.jpg" alt="Company Logo" style="height: 60px;"/>
                <div style="display: flex; gap: 2rem;">
                    <a href="index.php" style="color: #33475b; text-decoration: none; font-weight: 500; transition: color 0.3s ease;">Home</a>
                    <a href="about.php" style="color: #33475b; text-decoration: none; font-weight: 500; transition: color 0.3s ease;">About Us</a>
                    <a href="contact.php" style="color: #33475b; text-decoration: none; font-weight: 500; transition: color 0.3s ease;">Contact</a>
                    
                </div>
            </div>
            <div style="display:flex; gap: 1rem; align-items: center;">
                <a href="logout.php"><button style="background:linear-gradient(to right, #40E0D0, #4169E1); color: white; border: none; padding: 0.8rem 1.5rem; border-radius: 4px; font-weight: 500; cursor: pointer; transition: background-color 0.3s ease; width: 100px;">Logout</button></a>
            </div>
        </nav>
    </header>

    <main style="max-width: 1200px; margin: 0 auto; padding: 2rem;">
        <h1 style="font-size: 2.5rem; margin-bottom: 1rem; color: #2e475d; text-align: center;">Employee Application</h1>
        <section style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 15px rgba(0,0,0,0.05);">
            <form id="application-form" action="php/application_handler.php" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 1rem;">
                <input type="hidden" name="email" value="<?php echo $email; ?>">

                <label for="full_name" style="font-weight: 500;">Full Name:</label>
                <input type="text" name="full_name" required style="padding: 0.8rem; border: 1px solid #ccc; border-radius: 4px;">

                <label for="address" style="font-weight: 500;">Address:</label>
                <input type="text" name="address" required style="padding: 0.8rem; border: 1px solid #ccc; border-radius: 4px;">

                <label for="birthday" style="font-weight: 500;">Birthday:</label>
                <input type="date" name="birthday" required style="padding: 0.8rem; border: 1px solid #ccc; border-radius: 4px;">

                <label for="national_id" style="font-weight: 500;">National ID Number:</label>
                <input type="text" name="national_id" required style="padding: 0.8rem; border: 1px solid #ccc; border-radius: 4px;">

                <label for="mobile_number" style="font-weight: 500;">Mobile Number:</label>
                <input type="text" name="mobile_number" required style="padding: 0.8rem; border: 1px solid #ccc; border-radius: 4px;">

                <label for="job_role" style="font-weight: 500;">Job Role:</label>
                <input type="text" name="job_role" required style="padding: 0.8rem; border: 1px solid #ccc; border-radius: 4px;">

                <label for="profile_picture" style="font-weight: 500;">Profile Picture:</label>
                <input type="file" name="profile_picture" accept="image/png, image/jpeg" required style="padding: 0.8rem; border: 1px solid #ccc; border-radius: 4px;">

                <button type="submit" style="background: linear-gradient(to right, #40E0D0, #4169E1); color: white; border: none; padding: 0.8rem 1.5rem; border-radius: 4px; font-weight: 500; cursor: pointer; transition: background-color 0.3s ease;">Submit Application</button>
            </form>
        </section>
    </main>


    <style>
        @media (max-width: 768px) {
            nav { flex-direction: column; gap: 1rem; }
            nav > div { flex-direction: column; width: 100%; }
            nav > div > div { flex-direction: column; align-items: center; width: 100%; }
            section { padding: 1rem; }
            h1 { font-size: 2rem; }
            main { padding: 1rem; }
        }
    </style>
</body>
</html>
