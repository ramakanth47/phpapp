<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divine Guide</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> <!-- Added FontAwesome link -->
    <style>
        /* Styling for the horizontal lines */
        hr {
            border: 0;
            border-top: 1px solid #4a148c;
            margin: 20px 0;
        }

        .language-selector {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .flags-icon {
            width: 120px;
            margin-bottom: 5px;
        }
        .language-dropdown select {
            padding: 4px;
        }
        .icon {
            width: 100px;
            height: 90px;
        }

        /* About Us Section Styling */
        .about-section {
            display: block; 
            margin: 50px auto;
            max-width: 800px;
            color: #4a148c;
            text-align: center;
            font-family: 'Poppins', sans-serif;
        }
        .about-section h2 {
            font-size: 24px;
            font-weight: 700;
            text-transform: uppercase;
            color: #4a148c;
            margin-bottom: 20px;
        }
        .about-section p {
            font-size: 16px;
            line-height: 1.6;
            color: #4a148c;
            margin-bottom: 20px;
        }

        /* Reviews Section Styling */
        .reviews-section {
            display: block; 
            margin: 50px auto;
            max-width: 800px;
            color: #4a148c;
            text-align: center;
            font-family: 'Poppins', sans-serif;
        }
        
        .normal-ui {
            display: block;
        }

        /* Footer styling */
        .footer {
            background-color: #4B0082; 
            color: #fff;
            padding: 40px 0 20px;
        }
        .footer h5 {
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 18px;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer .form-control {
            background-color: #4B0082;
            border: 1px solid #ddd;
            color: #fff;
            margin-bottom: 15px;
        }
        .footer .form-control::placeholder {
            color: #ddd;
        }
        .footer .btn {
            background-color: #fff;
            color: #4B0082;
            font-weight: bold;
            border: none;
            padding: 8px 15px;
            width: 100%;
        }
        .social-icons {
            text-align: right;
        }
        .social-icons a {
            color: #fff;
            margin-left: 15px;
            font-size: 20px;
        }
        .footer-bottom {
            text-align: center;
            font-size: 14px;
            color: #ddd;
            margin-top: 20px;
        }
        .footer .contact-info p, .footer .quick-links ul {
            line-height: 1.8;
            font-size: 14px;
        }
        .quick-links ul {
            list-style: none;
            padding: 0;
        }
        .quick-links ul li {
            margin-bottom: 8px;
        }

    </style>
</head>
<body>

<!-- Header and Navigation -->
<header class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand mx-auto text-center" href="#">
                <img src="images/logo.png" alt="Divine Guide Logo" height="75">
                <span class="brand-title"></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" id="services-link"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item" id="aboutus-link"><a class="nav-link" href="#aboutus-section">About Us</a></li>
                    <li class="nav-item" id="appointments-link"><a class="nav-link" href="Appointment.php">Appointments</a></li>
                    <li class="nav-item" id="reviews-link"><a class="nav-link" href="#reviews-section">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                </ul>
                <!-- Language Selector with flags above the dropdown -->
                <div class="language-selector ml-4">
                    <img src="images/flags.png" alt="Flags" class="flags-icon">
                    <div class="language-dropdown">
                        <select>
                            <option>Select Language</option>
                            <option value="en">English</option>
                            <option value="ru">Russian</option>
                            <option value="fr">French</option>
                            <option value="de">German</option>
                            <option value="es">Spanish</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<hr>

<!-- Main Content -->
<div class="container text-center my-5 normal-ui" id="main-content">
    <h1 class="mb-4">Our Services</h1>
    <div class="row text-center">
        <div class="col-md-3">
            <img src="images/4.png" alt="Lucky Mobile Number" class="icon">
            <p><a href="luckynumber.html">Lucky Mobile Number</a></p>
        </div>
        <div class="col-md-3">
            <img src="images/2.png" alt="Numerology Name" class="icon">
            <p><a href="luckyname.html">Numerology Name</a></p>
        </div>
        <div class="col-md-3">
            <img src="images/11.png" alt="Vastu Consultation" class="icon">
            <p><a href="vastuconsultation.html">Vastu Consultation</a></p>
        </div>
        <div class="col-md-3">
            <img src="images/8.png" alt="Astrology Consultation" class="icon">
            <p><a href="Astrologyconsultation.html">Astrology Consultation</a></p>
        </div>
    </div>
    <div class="row mt-4 text-center">
        <div class="col-md-3">
            <img src="images/5.png" alt="Lucky Business Name" class="icon">
            <p>Lucky Business Name</p>
        </div>
        <div class="col-md-3">
            <img src="images/6.png" alt="Lucky Bank Account Number" class="icon">
            <p>Lucky Bank Account Number</p>
        </div>
        <div class="col-md-3">
            <img src="images/7.png" alt="Lucky Vehicle Number" class="icon">
            <p>Lucky Vehicle Number</p>
        </div>
        <div class="col-md-3">
            <img src="images/8.png" alt="Kundali Compatibility" class="icon">
            <p>Kundali Compatibility</p>
        </div>
    </div>
    <button class="btn btn-primary mt-4">Analyse Your Mobile Number, Name, Business Name, Vehicle number and Bank Account</button>
</div>
<hr>

<!-- About Us Section -->
<div class="container about-section" id="aboutus-section">
    <h2>About Us</h2>
    <p>At Divine guide, we believe that every individual’s path to success is unique and encoded in the energies around them. Based in Mumbai and Hyderabad, we bring over six years of dedicated expertise in mobile number numerology, astrology, Vastu consultation, and Name numerology, serving over 6,000 clients with insightful, personalized guidance around the world.</p>
    
    <p>At Divine guide, we use a compassionate and intuitive approach to help clients unlock potential, resolve challenges and find balance. Whether you're looking to improve your professional life, strengthen personal relationships, or create harmony in your living space, we provide holistic solutions designed specifically for your journey.</p>
    
    <p>Join us, and let’s work together to reveal the energies that will guide you toward a brighter, more fulfilled life.</p>
</div>
<hr>

<!-- Reviews Section -->
<div class="container reviews-section" id="reviews-section">
    <h2>Reviews</h2>
    <div class="review">
        <h4>Enlightening and Uplifting! 🌟</h4>
        <p>"I had the privilege of working with this divine guide, and it was truly an enlightening experience! From the moment we began our session, I felt an overwhelming sense of peace and clarity. Their ability to tune into my energy was remarkable, and the insights I received have helped me navigate some major life decisions with confidence. I highly recommend this service to anyone seeking guidance and support on their spiritual journey."</p>
        <p><strong>Rating:</strong> ⭐⭐⭐⭐⭐</p>
        <p><strong>Name:</strong> Jessica L.</p>
    </div>

    <div class="review">
        <h4>A True Source of Wisdom 🙏</h4>
        <p>"What an incredible experience! The divine guide I worked with helped me understand my purpose and brought me comfort during a challenging time. Their wisdom and compassion are unmatched, and I left every session feeling more at ease and connected to my higher self. If you're looking for genuine spiritual guidance, this is the place to go."</p>
        <p><strong>Rating:</strong> ⭐⭐⭐⭐⭐</p>
        <p><strong>Name:</strong> Michael B.</p>
    </div>

    <div class="review">
        <h4>Eye-Opening Experience</h4>
        <p>"I was skeptical at first, but this divine guide’s accuracy and depth were truly eye-opening. They were able to tap into things about my life that no one could have known. The guidance I received was both practical and spiritual, and I felt so much lighter after the session. I’m excited to return for more sessions!"</p>
        <p><strong>Rating:</strong> ⭐⭐⭐⭐⭐</p>
        <p><strong>Name:</strong> Liam T.</p>
    </div>
</div>
<hr>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-md-4">
                <h5>Contact</h5>
                <div class="contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> Sion churubatti Road, Sion-Mumbai 400022</p>
                    <p><i class="fas fa-map-marker-alt"></i> Shyamlal Compound, Begampet Hyderabad 500016</p>
                    <p><i class="fas fa-phone"></i> 9071013371</p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:divineguide@gmail.com">divineguide@gmail.com</a></p>
                </div>
            </div>

            <div class="col-md-4 quick-links">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Appointments</a></li>
                    <li><a href="#">Store</a></li>
                    <li><a href="terms.html" target="_blank">Terms & Conditions</a></li>
                    <li><a href="privacy.html" target="_blank">Privacy Policy</a></li>
                    <li><a href="refund.html" target="_blank">Refund and Cancellation Policy</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h5>Quick Enquiry</h5>
                <form>
                    <input type="text" class="form-control" placeholder="Name">
                    <input type="email" class="form-control" placeholder="Email">
                    <input type="text" class="form-control" placeholder="Phone Number">
                    <textarea class="form-control" rows="3" placeholder="Write Your Message"></textarea>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <p class="footer-bottom">&copy; 2024-2025 All Rights Reserved by divineguide.co</p>
            </div>
            <div class="col-md-6 social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap and jQuery JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
