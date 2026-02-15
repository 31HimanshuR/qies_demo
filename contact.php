<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quality India Engineering Services</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="icon" type="image/png" href="assets/img/Qies Logo.png">
</head>

<body>

    <!-- Header SECTION -->
    <header class="header">
        <div class="container">

            <!-- LOGO -->
            <div class="logo">
                <a href="index.html">
                    <img src="assets/img/Qies Logo.png" alt="Quality India Engineering Logo">
                    <span> Quality India Engineering Service</span>
                </a>
            </div>

            <!-- NAVIGATION -->
            <nav class="nav" id="navMenu">
                <ul class="nav-menu">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./about .html">About</a></li>
                    <li><a href="./service.html">Services</a></li>
                    <!-- <li><a href="./projects.html">Projects</a></li> -->
                    <li><a href="./contact page/contact.html">Contact Us</a></li>
                </ul>
            </nav>

            <!-- CTA -->
            <div class="cta">
                <a href="#" class="cta-btn">Request Consultation</a>
            </div>

            <!-- MOBILE TOGGLE -->
            <div class="menu-toggle" id="menuToggle">☰</div>

        </div>
    </header>


    <!-- form SECTION -->
    <section class="contact-page">

        <div class="container">

            <div class="contact-header">
                <h1>Contact Our Engineering Team</h1>
                <p>
                    Get in touch with us for survey, testing or infrastructure consultation.
                </p>
            </div>

            <div class="contact-grid">

                <!-- LEFT SIDE -->
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><strong>Phone:</strong> +91-XXXXXXXXXX</p>
                    <p><strong>Email:</strong> your@email.com</p>
                    <p><strong>Location:</strong> India</p>
                </div>

                <!-- RIGHT SIDE FORM -->
                <div class="contact-form">

                    <form action="sendmail.php" method="POST">

                        <input type="text" name="name" placeholder="Full Name" required>

                        <input type="email" name="email" placeholder="Email Address" required>

                        <input type="text" name="subject" placeholder="Subject">

                        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>

                        <button type="submit">Send Message</button>

                    </form>



                </div>

            </div>

        </div>

    </section>


    <!-- map  SECTION -->
    <section class="map-section">
        <div class="container">
            <h3>Visit Our Office</h3>
            <div class="map-box">
                <iframe src="https://maps.google.com/maps?q=Ghaziabad&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h3>Ready to Discuss Your Project?</h3>
            <p>Our engineering team is available for consultation and site evaluation.</p>
            <a href="#" class="btn-proposal">Request Proposal</a>
        </div>
    </section>


    <!-- GLOBAL FOOTER -->
    <footer class="global-footer">

        <div class="container footer-grid">

            <!-- Column 1 -->
            <div class="footer-col">
                <div class="footer-logo">
                    <img src="assets/img/Qies Logo.png" alt="Quality India Engineering Logo">
                    <span>Quality India Engineering Services</span>
                </div>
                <p class="footer-desc">
                    Multidisciplinary engineering consultancy delivering advanced
                    survey, testing and infrastructure assessment solutions across India.
                </p>
            </div>

            <!-- Column 2 -->
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <!-- <li><a href="projects.html">Projects</a></li> -->
                    <li><a href="about .html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div class="footer-col">
                <h4>Core Services</h4>
                <ul>
                    <li>Drone & LiDAR Survey</li>
                    <li>Ground Penetrating Radar</li>
                    <li>Pile Integrity Testing</li>
                    <li>Structural Audit</li>
                    <li>GIS Mapping</li>
                </ul>
            </div>

            <!-- Column 4 -->
            <div class="footer-col">
                <h4>Contact Information</h4>
                <ul class="contact-info">
                    <li>📍 Pan India Operations</li>
                    <li>📞 +91 XXXXX XXXXX</li>
                    <li>✉ info@qualityindia.com</li>
                </ul>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <div class="container">
                <p>© 2025 Quality India Engineering Services. All Rights Reserved.</p>
            </div>
        </div>

    </footer>


    <script src="assets/js/main.js"></script>
</body>

</html>