<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee ID Management</title>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { transform: translateX(-100px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        @keyframes glow {
            0% { box-shadow: 0 0 5px red; }
            50% { box-shadow: 0 0 10px red; }
            100% { box-shadow: 0 0 5px red; }
        }

        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #40E0D0;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .feature-card {
            transition: transform 0.5s ease, box-shadow 0.3s ease;
            animation: fadeIn 1s ease-out forwards;
            opacity: 0;
            box-shadow: 0 10px 30px rgba(64, 224, 108, 0.2);
        }

        .feature-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 10px 30px rgba(64, 224, 208, 0.5);
        }

        .button-glow {
            animation: glow 2s infinite;
        }

        .floating-element {
            animation: float 3s ease-in-out infinite;
        }
        .feature-item {
            background: transparent;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .feature-item:hover {
            transform: translateY(-10px);
        }
        
    </style>
</head>
<body style="margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif; ">

    <header style="background: white; padding: 1rem 2rem; border-bottom: 1px solid #eaf0f6; position: sticky; top: 0; z-index: 1000;">
        <nav style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center; gap: 1rem;">
                <img src="https://img.freepik.com/premium-vector/phoenix-logo-design-vector-illustration-white-background_833755-21540.jpg" alt="Company Logo" style="height: 60px;" class="floating-element"/>
                <div style="display: flex; gap: 2rem;">
                    <a href="index.php" style="color: #33475b; text-decoration: none; font-weight: 500; transition: color 0.3s ease;">Home</a>
                    <a href="about.php" style="color: #33475b; text-decoration: none; font-weight: 500; transition: color 0.3s ease;">About</a>
                    <a href="contact.php" style="color: #33475b; text-decoration: none; font-weight: 500; transition: color 0.3s ease;">Contact</a>
                </div>
            </div>
            <div style="display:flex; gap: 1rem; align-items: center;">
                <a href="signup.php"><button class="button-glow" style="background:linear-gradient(to right, #40E0D0, #4169E1); color: white; border: none; padding: 0.8rem 1.5rem; border-radius: 4px; font-weight: 500; cursor: pointer; transition: background-color 0.3s ease; width: 100px;">Signup</button></a>
                <a href="login.php"><button onmouseover="this.style.background='rgba(64, 224, 208, 0.3)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'" style="background:linear-gradient(to right, #40E0D0, #4169E1); color: white; border: none; padding: 0.8rem 1.5rem; border-radius: 4px; font-weight: 500; cursor: pointer; transition: background-color 0.3s ease; width: 100px;">Login</button></a>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section style="height: 100vh; display: flex; align-items: center; padding: 0 4rem; background: url('https://www.flyingcolour.net/wp-content/uploads/2021/03/CHOOSE-THE-RIGHT-FREE-ZONE-FOR-YOUR-SOFTWARE-COMPANY.jpg') no-repeat center center; background-size: cover; position: relative; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at center, rgba(64, 224, 208, 0.4) 0%, transparent 70%);"></div>
            <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 10; text-align: center; color:black">
                <div style="background: rgba(255, 255, 255, 0.3); padding: 3rem 2rem; border-radius: 10px; display: inline-block; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);">
                    <h1 style="font-size: 64px; margin: 0 0 1rem 0; font-weight: 500; line-height: 1.2; animation: slideIn 1.2s ease-out;">Simplifying Employee Identity Management</h1>
                    <p style="font-size: 18px; max-width: 800px; margin: 0 auto 2rem auto; animation: slideIn 1.4s ease-out; ">Welcome to our company, We provide the best solutions for managing employee identities. Our system allows for easy generation and management of employee ID cards.</p>
                </div>
            </div>
        </section>
        

        <!-- Features Section -->
        <section style="padding: 3rem 4rem; position: relative;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; "></div>
            <div style="max-width: 1200px; margin: 0 auto; position: relative;">
                <h2 style="font-size: 64px; margin: 0 0 4rem 0; font-weight: 500; animation: fadeIn 1s ease-out;">Our Features</h2>
                
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem;">
                    <div class="feature-card" style="background: rgba(255, 255, 255, 0.1); padding: 2rem; border-radius: 20px; animation-delay: 0.2s;">
                        <div style="display: flex; flex-direction:row; column-gap:2rem; align-items:center">
                        <img src="https://cdn-icons-png.flaticon.com/512/5087/5087579.png" alt="Global Icon" style="max-width: 60px;" class="feature-item"/>
                        <h4 style="font-size: 28px; margin: 0 0 0 0;">Easy Signup and Login</h4></div>
                        <p style="margin: 0; color: #cccccc; padding-top:20px; text-align:center;">Get started quickly with a smooth sign-up and login process.</p>
                    </div>
                    
                    <div class="feature-card" style="background: rgba(255, 255, 255, 0.1); padding: 2rem; border-radius: 20px; animation-delay: 0.4s;">
                        <div style="display: flex; flex-direction:row; column-gap:2rem; align-items:center">
                        <img src="https://cdn-icons-png.flaticon.com/512/6013/6013825.png" alt="Profile Management" style="max-width: 60px;" class="feature-item"/>
                        <h4 style="font-size: 28px; margin: 0 0 1rem 0;">Profile Management</h4></div>
                        <p style="margin: 0; color: #cccccc; padding-top:20px; text-align:center;">Manage your personal details and job role effortlessly.</p>
                    </div>
                    
                    <div class="feature-card" style="background: rgba(255, 255, 255, 0.1); padding: 2rem; border-radius: 20px; animation-delay: 0.6s;">
                        <div style="display: flex; flex-direction:row; column-gap:2rem; align-items:center">
                        <img src="https://cdn-icons-png.flaticon.com/512/10402/10402311.png" alt="ID Card" style="max-width: 60px;" class="feature-item"/>
                        <h4 style="font-size: 28px; margin: 0 0 1rem 0;">ID Card Generation</h4></div>
                        <p style="margin: 0; color: #cccccc; padding-top:20px; text-align:center;">Generate professional ID cards for your employees in minutes.</p>
                    </div>
                    
                    <div class="feature-card" style="background: rgba(255, 255, 255, 0.1); padding: 2rem; border-radius: 20px; animation-delay: 0.8s;">
                        <div style="display: flex; flex-direction:row; column-gap:2rem; align-items:center">
                        <img src="https://cdn-icons-png.flaticon.com/512/10635/10635196.png" alt="Email Delivery" style="max-width: 60px;" class="feature-item"/>
                        <h4 style="font-size: 28px; margin: 0 0 1rem 0;">Automated Email Delivery</h4></div>
                        <p style="margin: 0; color: #cccccc; padding-top:20px; text-align:center;">Your ID cards will be automatically delivered via email to ensure quick access.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer style="background: linear-gradient(to right, #40E0D0, #4169E1); color: white; text-align: center; padding: 1rem; position: relative; bottom: 0;">
        <p style="margin: 0; font-size: 0.8rem;">&copy; 2024 Company Name. All rights reserved.</p>
    </footer>

</body>
</html>
