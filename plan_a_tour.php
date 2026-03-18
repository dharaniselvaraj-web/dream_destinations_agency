<?php
// ========================================================
// 1. PROCESS FORM BEFORE ANY OUTPUT
// ========================================================
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = new mysqli("localhost", "root", "", "userdb");

    if ($conn->connect_error) {
        die("Database Connection Failed");
    }

    $name = trim($_POST['name'] ?? '');
    $city = trim($_POST['city'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $tourPackage = trim($_POST['tourPackage'] ?? '');
    $typeOfTour = trim($_POST['typeOfTour'] ?? '');
    $travelDate = $_POST['travelDate'] ?? null;
    $duration = trim($_POST['duration'] ?? '');
    $adults = (int)($_POST['adults'] ?? 0);
    $children = (int)($_POST['children'] ?? 0);
    $requirements = trim($_POST['requirements'] ?? '');
    $flightAssistance = $_POST['flightAssistance'] ?? 'No';

    $sql = "INSERT INTO plan_tour_enquiries (name, city_of_residence, phone, email, tour_package, type_of_tour, travel_date, duration, num_adults, num_children, requirements, flight_assistance) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssiiss", 
        $name, $city, $phone, $email, $tourPackage, $typeOfTour, 
        $travelDate, $duration, $adults, $children, $requirements, $flightAssistance
    );

    if ($stmt->execute()) {
        header("Location: plan_a_tour.php?success=1");
        exit;
    } else {
        die("Database Insert Error");
    }
}
?>

<?php include("header.php"); ?>  <!-- Safe now -->

<!-- =====================================================
                    MAIN CONTENT
====================================================== -->

<main>
    <div class="slideshow">
        <img src="css/images/tree.png" style="width:100%; height:900px;">
        <div class="slide-text">
            <h2 style="font-size:55px; font-family:'Dancing Script';">About Us</h2>
            <p style="font-size:35px; font-family:'Dancing Script';">
               Designing holidays that go beyond destinations..!
            </p>
        </div>
    </div>
</main>

<!-- =====================================================
                SUCCESS MESSAGE
====================================================== -->

<?php if (isset($_GET['success'])): ?>
    <div style="text-align:center; margin-top:30px;">
        <h1>Thank you!</h1>
        <p>Your enquiry has been submitted successfully.</p>
    </div>
<?php endif; ?>

<!-- =====================================================
                PLAN A TOUR FORM (Modal)
====================================================== -->

<div id="planTourModal" class="modal">
    <div class="modal-content plan-tour-content">

        <div class="modal-header plan-tour-header">
            <span class="close-btn" id="closePlanTourModal">&times;</span>
            <h3 class="modal-title">PLAN A TOUR</h3>
        </div>

        <div class="modal-body-content plan-tour-body">

            <form action="plan_a_tour.php" method="POST">

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
                        <option value="Honeymoon">Honeymoon</option>
                        <option value="Family">Family</option>
                        <option value="Friends">Friends</option>
                        <option value="Group">Group</option>
                        <option value="Corporate">Corporate</option>
                    </select>
                </div>

                <div class="form-row">
                    <input type="text" name="travelDate" placeholder="Travel Date" required>
                    <input type="text" name="duration" placeholder="Duration" required>
                </div>

                <div class="form-row">
                    <input type="number" name="adults" placeholder="No. of Adults" min="1" required>
                    <input type="number" name="children" placeholder="No. of Children" min="0">
                </div>

                <div class="form-row full-width-row">
                    <textarea name="requirements" placeholder="Any Other Requirements"></textarea>
                </div>

                <div class="flight-assistance-row">
                    <label>Wish assistance for Flight Booking?</label>
                    <div class="radio-group">
                        <input type="radio" name="flightAssistance" value="Yes"> Yes
                        <input type="radio" name="flightAssistance" value="No" checked> No
                    </div>
                </div>

                <button type="submit" class="send-enquiry-btn">Send Enquiry</button>

            </form>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
