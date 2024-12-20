<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
</head>
<body style="margin: 0; font-family: 'Segoe UI', sans-serif; background-color: #f5f8fa;">
    <!-- Header -->
    <header style="background: white; padding: 1rem 2rem; border-bottom: 1px solid #eaf0f6; position: sticky; top: 0; z-index: 1000;">
        <nav style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center; gap: 1rem;">
                <img src="https://img.freepik.com/premium-vector/phoenix-logo-design-vector-illustration-white-background_833755-21540.jpg" alt="Company Logo" style="height: 60px;"/>
                <div style="display: flex; gap: 2rem;">
                    <a href="index.php" style="color: #33475b; text-decoration: none; font-weight: 500; transition: color 0.3s ease;">Home</a>
                    <a href="about.php" style="color: #33475b; text-decoration: none; font-weight: 500; transition: color 0.3s ease;">About</a>
                    <a href="contact.php" style="color: #33475b; text-decoration: none; font-weight: 500; transition: color 0.3s ease;">Contact</a>
                </div>
            </div>
            <div style="display:flex; gap: 1rem; align-items: center;">
                <a href="signup.php"><button style="background:linear-gradient(to right, #40E0D0, #4169E1); color: white; border: none; padding: 0.8rem 1.5rem; border-radius: 4px; font-weight: 500; cursor: pointer; transition: background-color 0.3s ease; width: 100px;">Signup</button></a>
                <a href="login.php"><button style="background:linear-gradient(to right, #40E0D0, #4169E1); color: white; border: none; padding: 0.8rem 1.5rem; border-radius: 4px; font-weight: 500; cursor: pointer; transition: background-color 0.3s ease; width: 100px;">Login</button></a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main style="max-width: 1200px; margin: 2rem auto; position: relative; margin-top:6rem;">

        <section>
                    <!-- Background Image -->
        <div style="position: absolute; top: 0; left: -5rem; width: 50%; height: 100%; background-image: url('https://static.vecteezy.com/system/resources/previews/029/771/764/large_2x/portrait-of-smiling-receptionist-female-greeting-client-happy-business-woman-reception-in-modern-office-free-photo.jpeg'); background-size: cover; background-position: center; opacity: 0.8; z-index: -1; border-radius:40% 60% 65% 35% / 40% 35% 65% 60%;"></div>
        </section>

        <!-- Contact Form -->
        <section style="flex: 1; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); max-width: 500px; margin: 0 auto;">
            <h2 style="font-size: 1.8rem; color: #2e475d; margin-bottom: 1rem;">Contact Form</h2>
            <form id="contact-form" action="php/contact_form_handler.php" method="post" style="display: flex; flex-direction: column; gap: 1rem;">
                <input type="text" name="name" placeholder="Your Name" required style="padding: 1rem; border: 1px solid #ccc; border-radius: 4px;">
                <input type="email" name="email" placeholder="Your Email" required style="padding: 1rem; border: 1px solid #ccc; border-radius: 4px;">
                <textarea name="message" placeholder="Your Message" required style="padding: 1rem; border: 1px solid #ccc; border-radius: 4px; height: 100px;"></textarea>
                <button type="submit" style="background:linear-gradient(to right, #40E0D0, #4169E1); color: white; border: none; padding: 1rem; border-radius: 4px; font-weight: 500; cursor: pointer; margin-top: 2rem;">Send</button>
            </form>
        </section>

        <!-- Contact Info -->
        <section style="position: absolute; bottom: 2rem; right: 2rem; width: 250px; background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
            <h3 style="font-size: 1.2rem; color: #2e475d; margin-bottom: 1rem; text-align: center;">Contact Info</h3>
            <div style="display: flex; flex-direction: column; gap: 1rem;">
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <img src="https://cdn-icons-png.flaticon.com/512/16925/16925251.png" alt="Location Icon" style="height: 24px;">
                    <p style="color: #516f90; font-size: 0.9rem; margin: 0;">Main Street, Colombo, Sri Lanka</p>
                </div>
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <img src="https://banner2.cleanpng.com/20180409/baw/avgzq3n0k.webp" alt="Phone Icon" style="height: 24px;">
                    <p style="color: #516f90; font-size: 0.9rem; margin: 0;">011 3454323</p>
                </div>
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <img src="https://store-images.s-microsoft.com/image/apps.48049.7e7cc6f5-cd52-422e-b812-3a2bba6fd124.e3922169-ad44-4a44-bf22-3c280c02bb84.a7934a31-0613-4b6d-b86d-92f5fa596955.png" alt="Hours Icon" style="height: 24px;">
                    <p style="color: #516f90; font-size: 0.9rem; margin: 0;">Mon-Fri: 9am - 6pm</p>
                </div>
            </div>
        </section>
    </main>


</body>
</html>
