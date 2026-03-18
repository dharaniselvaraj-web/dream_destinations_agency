<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/about_us.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/destinations.css">
    <link rel="stylesheet" href="css/extra.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/reveal.css">
    <link rel="stylesheet" href="css/services.css">

    <!-- ICON LIBRARIES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- FONTS -->
   <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Beattone&family=Poppins:wght@400;500;700&family=Roboto:wght@400;500;700&family=Lato:wght@400;700&family=Montserrat:wght@400;500;700&family=Oswald:wght@400;500;700&family=Playfair+Display:wght@400;700&family=Raleway:wght@400;500;700&family=Dancing+Script:wght@400;700&family=Indie+Flower&family=Great+Vibes&family=Sacramento&family=Kaushan+Script&family=Amatic+SC:wght@400;700&family=Courgette&family=Shadows+Into+Light&family=Homemade+Apple&family=Cookie&family=Satisfy&family=Gloria+Hallelujah&family=Permanent+Marker&family=Rock+Salt&display=swap" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="icon" href="ICON.jpg">
    <title>Dreams Beyond Destinations</title>
</head>

<body>

<!-- FOLLOW US BAR -->
<div class="follow-us">
    <p style="margin-top:10px">Follow Us</p>
    <a href="#" class="social-icon"><i class="fab fa-facebook-f fa-bounce"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-youtube fa-bounce"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-instagram fa-bounce"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-whatsapp fa-bounce"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-twitter fa-bounce"></i></a>

    <img src="css/images/iata_logo-02.png" alt="" style="width: 180px; height: 30px; margin-left: 1250px;">
</div>

<!-- MAIN HEADER NAV -->
<div class="header">
    <h3 style="margin-left: 170px;font-size: 26px;">
        Dreams Beyond <br>                          
        <i class="fa-solid fa-heart fa-beat" style="color: tomato; margin-left: 75px;"></i><br>
        <span style="margin-left: 100px;">Destinations</span>
    </h3>

    <!-- HAMBURGER -->
    <div class="hamburger-menu">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>

    <!-- NAVIGATION MENU -->
    <div class="nav">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="destinations.php">Destinations</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="#" class="nav-link open-plan" style="background: darkturquoise; color: white;">Plan a Tour</a></li>
        </ul>
    </div>
</div>

<div id="enquiryModal" class="modal">

    <div class="modal-content">
        <div class="modal-header">
            <span class="close-btn">&times;</span>
            <h3 class="modal-title-step1">JUST ONE MORE STEP</h3>
        </div>
        <div class="modal-body-content">
            <div class="modal-left-content">
                <h3 ><span>Dreams Beyond </span><br>
                <i class="fa-solid fa-heart fa-beat" style=" color: tomato; "></i><br><span> Destinations</span> </h3>
                <p style="font-weight: bold; font-size:30px; font-style:italic;">We'll call you..!</p>
                <p>We need to know a bit more about you. Don't worry. We won't spam you.</p>
                <p>or</p>
                <p>call us at <span style="color:darkturquoise; font-weight: bold;">+91 80728 33552</span></p>
            </div>
            
            <div class="modal-right-content">
                
                <div id="enquiryFormWrapper"> 
                    
                    <p class="form-status-message" style="margin-bottom: 10px; display: none; text-align: center;"></p>
                    
                    <form id="enquirySubmitForm" action="process_enquiry.php" method="POST">
                        <input type="text" name="fullName" placeholder="Full Name" required>
                        <select name="serviceName" id="serviceNameInput" required>
                            <option value="">-- Select Service --</option>
                            <option value="flights">Flights</option>
                            <option value="Cabs & Coaches">Cabs & Coaches</option>
                            <option value="Cruise Vacations">Cruise Vacations</option>
                            <option value="Day Outings">Day Outings</option>
                            <option value="Surprise Anniversary & Birthday outings">Surprise Anniversary & Birthday outings</option>
                            <option value="Students Educational Tours">Students Educational Tours</option>
                            <option value="Events & Meetings">Events & Meetings</option>
                            <option value="Food for Occasions">Food for Occasions</option>
                            <option value="Passport">Passport</option>
                            <option value="Visa">Visa</option>
                            <option value="Hotels Stay">Hotels Stay</option>
                        </select>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="tel" name="mobileNumber" placeholder="Mobile Number" required>
                        <button type="submit" class="get-quotes-btn">Get free quotes</button>
                    </form>
                </div>

                <div id="thankYouContainer" style="display: none; text-align: center; padding: 50px 20px;">
                    <div class="thank-you-body">
                        <h1 class="thank-you-title" style="font-size: 40px; color: #333; font-style:italic;">Thank you...!</h1>
                        <p class="thank-you-message">Form submitted successfully</p>
                        <p class="thank-you-message">Our executive will contact you soon</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){

    // Open Enquiry Modal
    $(".enquiryBtn").click(function(e){
        e.preventDefault();
        $("#enquiryModal").fadeIn();
    });

    // Close Modal
    $(".close-btn").click(function(){
        $("#enquiryModal").fadeOut();
    });

});
</script>
<script>
$(document).ready(function(){

    $(".open-enquiry").click(function(e){
        e.preventDefault();
        $("#enquiryModal").fadeIn();
    });

    $(".close-btn").click(function(){
        $("#enquiryModal").fadeOut();
    });

});
</script>
<script>
$(document).ready(function(){

    // OPEN Enquiry Form
    $(".open-enquiry").click(function(e){
        e.preventDefault();
        $("#enquiryModal").fadeIn();
    });

    // OPEN Plan a Tour Form
    $(".open-plan").click(function(e){
        e.preventDefault();
        $("#planTourModal").fadeIn();
    });

    // CLOSE buttons
    $(".close-btn").click(function(){
        $("#enquiryModal, #planTourModal").fadeOut();
    });

});
</script>

