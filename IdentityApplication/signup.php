<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            min-height: 100vh;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .registration-container {
            width: 100%;
            max-width: 1000px;
            min-height: 600px;
            background: white;
            border-radius: 20px;
            display: flex;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .registration-form {
            width: 50%;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .welcome-side {
            width: 50%;
            background: linear-gradient(to right, #40E0D0, #4169E1);
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .wave-animation {
            position: absolute;
            width: 150%;
            height: 150%;
            top: 5%;
            left: 3%;
            background: linear-gradient(to right, rgba(64, 224, 208, 0.3), rgba(65, 105, 225, 0.5));
            border-radius: 35%;
            animation: wave 8s infinite linear;
        }

        @keyframes wave {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .logo {
            max-width: 150px;
            margin-bottom: 2rem;
            margin-left: 7rem;
        }

        .form-header {
            margin-bottom: 2rem;
        }

        .input-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .input-group input {
            width: 100%;
            padding: 1rem;
            padding-left: 3rem;
            border: 1px solid #e0e0e0;
            border-radius: 30px;
            outline: none;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .input-group input:focus {
            border-color: #40E0D0;
            box-shadow: 0 0 0 2px rgba(64, 224, 208, 0.1);
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #40E0D0;
            font-size: 1.2rem;
        }

        .terms-privacy {
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            color: #666;
        }

        .terms-privacy a {
            color: #40E0D0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .terms-privacy a:hover {
            color: #4169E1;
        }

        .register-button {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 30px;
            background: linear-gradient(to right, #40E0D0, #4169E1);
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .register-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(64, 224, 208, 0.4);
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.9rem;
            color: #666;
        }

        .login-link a {
            color: #40E0D0;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #4169E1;
        }

        .welcome-text {
            position: relative;
            z-index: 1;
        }

        .welcome-text h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .welcome-text p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }

        @media (max-width: 768px) {
            .registration-container {
                flex-direction: column;
            }
            .registration-form, .welcome-side {
                width: 100%;
            }
            .welcome-side {
                order: -1;
                padding: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <div class="registration-form">
            <img src="https://img.freepik.com/premium-vector/phoenix-logo-design-vector-illustration-white-background_833755-21540.jpg" alt="Logo" class="logo">
            <div class="form-header">
                <h2>Create Your Account</h2>
            </div>
            <form action="php/signup.php" method="post">
                <div class="input-group">
                    <span class="input-icon">👤</span>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <span class="input-icon">📧</span>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <span class="input-icon">🔒</span>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <span class="input-icon">🔒</span>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                </div>
                <div class="terms-privacy">
                    <label>
                        <input type="checkbox" required>
                        <span>I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></span>
                    </label>
                </div>
                <button type="submit" class="register-button">Create Account</button>
                <div class="login-link">
                    Already have an account? <a href="login.html">Login here</a>
                </div>
            </form>
        </div>
        
        <div class="welcome-side">
            <div class="wave-animation"></div>
            <div class="welcome-text">
                <h1>Join Us.</h1>
                <p>Create your account to start managing your employee ID cards and access our services.</p>
            </div>
        </div>
    </div>
</body>
</html>
