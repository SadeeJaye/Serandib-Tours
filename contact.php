<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serandib Tours</title>
    <link rel="stylesheet" href="contact.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</head>
<body>
    <header>
    <nav>
    <div class="container">
            <h3 class="logo">Serandib<span>Tour</span></h3>
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="only.php">Only In Serandib</a></li>
                <li><a href="transport.php">Transport</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="login.php" class="btn login-btn">Log In</a>
                <a href="login.php" class="btn signup-btn">Sign Up</a>
        </div>
    </nav>
        <h1 class="big-title translate" data-speed="0.1">Living The Island Life</h1>

        <img src="person.png" class="person translate" data-speed="-0.25" alt="">
        <img src="mountain1.png" class="mountain1 translate" data-speed="-0.2" alt="">
        <img src="mountain2.png" class="mountain2 translate" data-speed="0.4" alt="">
        <img src="mountain3.png" class="mountain3 translate" data-speed="0.3" alt="">
        <img src="sky.png" class="sky translate" data-speed="0.5" alt="">
    </header>

    <section>
        <div class="shadow"></div>
    </section>



    <div class="contact-page-container">
    
    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <h1>Get In Touch</h1>
        <p>Have a question or want to learn more about our tours? Feel free to contact us below.</p>
        <form action="process_contact.php" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </section>

    <section class="contact-info-section">
    <h2>Contact Information</h2>
    <div class="info-wrapper">
        <div class="info-item">
            <!-- Lottie Animation for Address -->
            <div class="icon">
                <lottie-player src="https://lottie.host/224eedc5-7d81-4a22-a12c-4b0dfbf20deb/ZOXRmekrzB.json" background="transparent" speed="1" style="width: 70px; height: 100px;" loop autoplay></lottie-player>
            </div>
            <h3>Office Address</h3>
            <p>No. 12, Main Street, Colombo, Sri Lanka</p>
        </div>
        <div class="info-item">
            <!-- Lottie Animation for Phone -->
            <div class="icon">
                <lottie-player src="https://lottie.host/35d3eb55-18ac-4731-b225-2d3306c6ceff/VrsHkr3RPK.json" background="transparent" speed="1" style="width: 70px; height: 100px;" loop autoplay></lottie-player>
            </div>
            <h3>Phone Number</h3>
            <p>+94 77 123 4567</p>
        </div>
        <div class="info-item">
            <!-- Lottie Animation for Email -->
            <div class="icon">
                <lottie-player src="https://lottie.host/15d9d777-711a-47ac-9dee-0976e69706f3/zVbaqqqOXI.json" background="transparent" speed="1" style="width: 70px; height: 100px;" loop autoplay></lottie-player>
            </div>
            <h3>Email</h3>
            <p>info@serandibtours.com</p>
        </div>
        <div class="info-item">
            <!-- Lottie Animation for Social Media -->
            <div class="icon">
                <h3>Follow Us</h3>
                <div class="social-media-links">
                    <a href="https://facebook.com" target="_blank">
                        <lottie-player src="https://lottie.host/38ebc249-5ddf-45fe-a9ed-4a7b352abf15/4SEvsgC1qt.json" background="transparent" speed="1" style="width: 50px; height: 50px;" loop autoplay></lottie-player>
                    </a>
                    <a href="https://instagram.com" target="_blank">
                        <lottie-player src="https://lottie.host/aead254e-ac22-4bf3-909d-f3afb88767fb/Ib4ou8kDgM.json" background="transparent" speed="1" style="width: 50px; height: 50px;" loop autoplay></lottie-player>
                    </a>
                    <a href="https://twitter.com" target="_blank">
                        <lottie-player src="https://lottie.host/c0efd417-8692-410c-8dc9-19b1ccb6ad6c/HUiiUv6FQL.json" background="transparent" speed="1" style="width: 50px; height: 50px;" loop autoplay></lottie-player>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


</div>





















































    <footer class="footer">
    <div class="footer-content">
        <div class="footer-logo">
            <h2>Serandib Tours</h2>
            <p>Explore the beauty of Sri Lanka with us!</p>
        </div>
        <div class="footer-links">
            <div class="footer-section">
                <h3>Explore</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#tours">Only In Serandib</a></li>
                    <li><a href="#tours">Transport</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <ul>
                    <li>Email: info@serandibtours.com</li>
                    <li>Phone: +943 456 7890</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-media">
                    <a href="https://facebook.com/yourpage" class="social-icon" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/yourpage" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com/yourpage" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com/company/yourpage" class="social-icon" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Serandib Tours. All rights reserved.</p>
    </div>
</footer>




    <script src="contact.js"></script>
</body>
</html>