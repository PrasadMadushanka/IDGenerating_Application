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
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: #33475b;
            background-color: #f5f8fa;
        }
        header {
            background: white;
            padding: 1rem 2rem;
            border-bottom: 1px solid #eaf0f6;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            color: #33475b;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #0091ae;
        }
        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        h1 {
            font-size: 2.5rem;
            color: #2e475d;
            margin-bottom: 1rem;
        }
        form {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        input {
            padding: 0.8rem;
            font-size: 1rem;
            border: 1px solid #e0e6ed;
            border-radius: 4px;
            outline: none;
            margin-bottom: 1rem;
            transition: border-color 0.3s ease;
        }
        input:focus {
            border-color: #40E0D0;
        }
        button {
            background: linear-gradient(to right, #40E0D0, #4169E1);
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #34b5c4;
        }
        a {
            color: #0091ae;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #2e475d;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div style="display: flex; align-items: center; gap: 1rem;">
                <img src="https://img.freepik.com/premium-vector/phoenix-logo-design-vector-illustration-white-background_833755-21540.jpg" alt="Company Logo" style="height: 60px;"/>
                <div style="display: flex; gap: 2rem;">
                    <a href="index.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
            <div style="display:flex; gap: 1rem; align-items: center;">
                <a href="logout.php"><button>Logout</button></a>
            </div>
        </nav>
    </header>

    <div class="dashboard-container">
        <h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>

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
    </div>
</body>
</html>
