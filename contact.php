
<?php include("header.php"); ?> 
<main>
        <div class="a-slideshow">
        <img src="css/images/contact.png" style="width: 100%; height: 900px" alt="Slide 1">
       <div class="slide-text">
            <h2 style="font-size: 55px; font-family: 'Dancing Script',sans-serif;">Contact Us</h2> 
            <br> 
            <p style="font-size: 35px; font-family: 'Dancing Script',sans-serif;" >Ready to explore? Let’s talk about your next destination..!</p> 
        </div>
    </div>

    <div class="action_button">
        <a href="#" class="side-btn quote-btn open-enquiry">Get a Quote</a>
        <a href="#" class="side-btn quote-btn open-plan">Plan a Tour</a>
    </div>
</main>
<div class="reveal">
    <main class="contact-section">
        <div class="container">
            <div class="contact-form-container">
                <h2>Let's get connected</h2>
                <p>Share your travel requirements. We will get it done for you.</p>
                <form action="#" method="POST" class="contact-form">
                    <select name="service" required>
                        <option value="" disabled selected>-- Select Service... --</option>
                        <option value="tour">Book a Tour</option>
                        <option value="visa">Visa Assistance</option>
                        <option value="other">Other Inquiry</option>
                    </select>
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="tel" name="contact-number" placeholder="Contact Number" required>
                    <textarea name="message" placeholder="Message"></textarea>
                    <button type="submit" class="btn-send-enquiry">Send Enquiry</button>
                </form>
            </div>

            <div class="contact-details-container">
                <div class="map-placeholder">
                    <a href="https://maps.app.goo.gl/yNKYjhXovkRA1gpz5" class="map-text" style="background-image: url(css/images/map2.png); width:100%; height:100%;">Map View Placeholder</a>
                </div>

                <div class="address-block">
                    <h4>Address</h4>
                    <p><strong>Rethink Ways Private Limited</strong></p>
                    <address>
                        4/16, Raagas Ammar Court, G.N. Chetty Road, T. Nagar,<br>
                        Chennai, Tamil Nadu, India - 600017.
                    </address>
                    <p>Mobile: <a href="tel:+919384909347">+91 80728 33552</a></p>
                    <p>Email: <a href="mailto:info@dreams.co.in">info@dreams.co.in</a></p>
                </div>

                <div class="social-links">
                    <p>Whatsapp</p>
                    <p>Facebook</p>
                    <p>Instagram</p>
                    <p>Twitter</p>
                </div>
            </div>
        </div>
        <div class="reveals">
        <div class="stay" style="background:darkturquoise; color:white; padding:40px; text-align:center;">
            <h2>Stay Informed</h2>
            <p>Get notified about special deals and new destinations...</p>
            <div id="subscribe-message" style='margin-bottom:15px; padding:10px; border-radius:5px; background:white; color:black; display:none;'></div>
                <form id="subscribeForm" action="process_subscribe.php">
                    <input type="email" name="email" placeholder="Enter your email" required style="padding:10px; border-radius:5px; border:none; width:250px;">
                    <button type="submit" id="subscribeBtn" style="padding:10px 20px; background:black; color:white; border-radius:5px; font-weight:bold;"> Subscribe Now </button>
                </form>
            </div>
        </div>
    </main>
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
<div id="planTourModal" class="modal">
    <div class="modal-content plan-tour-content">
        <div class="modal-header plan-tour-header">
            <span class="close-btn" id="closePlanTourModal">&times;</span>
            <h3 class="modal-title">PLAN A TOUR</h3>
        </div>
        <div class="modal-body-content plan-tour-body">
            <form id="planTourSubmitForm" action="form_plan.php" method="POST">
                
                <div class="form-row">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="text" name="city" placeholder="City of Residence" required>
                </div>

                <div class="form-row">
                    <input type="tel" name="phone" placeholder="Phone" required>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                
                <div class="form-row">
                    <select name="tourPackage" required>
                        <option value="">-- Select Tour Package --</option>
                        <option value="Dubai">Dubai</option>
                        <option value="Bali">Bali</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Andaman">Andaman</option>
                        <option value="Himachal">Himachal</option>
                        <option value="Kashmir">Kashmir</option>
                        <option value="North East">North East</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Goa">Goa</option>
                        <option value="Rajasthan">Rajasthan</option>

                    </select>
                    <select name="typeOfTour" required>
                        <option value="">-- Type of Tour --</option>
                        <option value="Honrymoon">Honeymoon/Couple</option>
                        <option value="Family">Family</option>
                        <option value="Friends">Friends</option>
                        <option value="Group">Group</option>
                        <option value="Corporate">Corporate</option>
                    </select>
                </div>

                <div class="form-row">
                    <input type="text" name="travelDate" placeholder="Travel Date" class="date-input" required>
                    <input type="text" name="duration" placeholder="Duration" required>
                </div>
                
                <div class="form-row">
                    <input type="number" name="adults" placeholder="No. of Adults" min="1" required>
                    <input type="number" name="children" placeholder="No. of Children" min="0">
                </div>
                
                <div class="form-row full-width-row"> 
                    <textarea name="requirements" placeholder="Any Other requirements" rows="3"></textarea>
                </div>

                <div class="flight-assistance-row"> 
                    <label>Wish assistance for Flight Booking</label>
                    <div class="radio-group">
                        <input type="radio" id="flightYes" name="flightAssistance" value="Yes" required>
                        <label for="flightYes">Yes</label>
                        <input type="radio" id="flightNo" name="flightAssistance" value="No" checked>
                        <label for="flightNo">No</label>
                    </div>
                </div>

                <button type="submit" class="send-enquiry-btn">Send Enquiry</button>
            </form>
            <div id="planTourSuccessMessage" style="display: none;">
                <h1 class="thank-you-title">Thank you...!</h1>
                <p class="thank-you-message">Form submitted successfully</p>
                <p class="thank-you-message">Our executive will contact you soon</p>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?> 