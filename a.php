<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucky Mobile Number</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Basic styling */
        body {
            font-family: 'Arial', sans-serif;
        }
        
        .main-section {
            text-align: center;
            margin-top: 50px;
        }
        
        /* Lucky number section (initially hidden) */
        #luckyNumberSection {
            display: none; /* Hidden until button click */
            margin-top: 20px;
            color: #4a148c;
        }
        
        /* Title styling */
        #luckyNumberSection h3 {
            font-weight: bold;
        }
        
        /* List styling */
        #luckyNumberSection ul {
            list-style-type: none;
            padding: 0;
            color: #4a148c;
            font-weight: 600;
            margin-top: 20px;
            line-height: 1.8;
        }
        
        /* Main button styling */
        .main-button, .consultation-button {
            background-color: #4a148c;
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            font-weight: bold;
        }

        .main-button:hover, .consultation-button:hover {
            background-color: #3c0e73;
        }

        /* WhatsApp button styling */
        .whatsapp-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            margin-top: 20px;
            padding: 10px 20px;
            border-radius: 25px;
            background-color: #4a148c;
            color: white;
            font-weight: bold;
        }

        /* Position the WhatsApp icon outside the consultation area */
        .whatsapp-icon {
            width: 24px;
            height: 24px;
            margin-left: 8px;
        }
    </style>
</head>
<body>

<div class="container main-section">
    <h2>Lucky Mobile Number</h2>
    <p>Discover the potential of your mobile number to bring balance, positivity, and success in your life.</p>
    <button class="main-button" onclick="showLuckyNumberSection()">Analyse Your Mobile Number</button>
</div>

<!-- Lucky Mobile Number Analysis Section -->
<div id="luckyNumberSection" class="text-center">
    <h3>Lucky Mobile Number</h3>
    <p>Your mobile number isn’t just a string of digits; it carries energy and vibrations that can impact various aspects of your life. A lucky mobile number, customized to align with your unique numerological profile, can bring balance, positivity, and success into your personal and professional world.</p>
    <ul>
        <li>Enhanced Prosperity</li>
        <li>Improved Relationships</li>
        <li>Career Success and Opportunities</li>
        <li>Increased Positivity and Peace</li>
        <li>Health and Well-being</li>
        <li>Boosted Confidence and Self-Esteem</li>
        <li>Personal Growth and Fulfillment</li>
        <li>Alignment with Life Goals</li>
    </ul>
    <!-- Analyse Mobile Number Button placed above consultation -->
    <button class="main-button" onclick="showLuckyNumberSection()">Analyse Your Mobile Number</button>
    
    <!-- WhatsApp Consultation Button -->
    <a href="https://wa.me/1234567890" class="whatsapp-button">
        Consultation
    </a>
    
    <!-- WhatsApp Icon outside consultation section -->
    <img src="images/19.jpg" alt="WhatsApp Icon" class="whatsapp-icon">
</div>

<!-- Bootstrap and JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function showLuckyNumberSection() {
        document.getElementById("luckyNumberSection").style.display = "block";
    }
</script>

</body>
</html>
