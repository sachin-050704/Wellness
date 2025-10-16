<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: signup.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellness Wise</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

    <div class="preloader">
        <img src="images/loader.gif" alt="">
    </div>

    <div class="navbar">
        <div class="logo" onclick="home()">
            <div><img src="images/logo.png" alt="" srcset=""></div>
            <div>
                <h1>WELLNESS <span class="title">WISE</span></h1>
            </div>
        </div>
        <div class="logoicon"><button onclick="toggle()"><i class="fa-solid fa-bars"></i></button></div>
        <div class="logoicon1"><button onclick="toggle1()"><i class="fa-solid fa-xmark"></i></button></div>
        <div id="tab" class="nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="appointment.php">Appointment</a></li>
                <li><a href="doctor.php">Doctor</a></li>
                <li><a href="blog.php">Blogs</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="doc">
        <div class="docimg"><img src="images/doctor.png" alt="" srcset=""></div>
        <div class="docpara">
            <h1>Dr. Rhea Sharma</h1>
            <p>Founder & Chief Nutrition Consultant – Wellness Wise</p>
            <div class="doc1">
                <h2>Qualification:</h2>
                <li>M.Sc. in Clinical Nutrition and Dietetics – University of Mumbai</li>
                <li>Certified Holistic Health Coach – Institute for Integrative Nutrition (IIN), New York</li>
                <li>Registered Dietitian (RD) – Indian Dietetic Association</li>
            </div>
            <div class="doc2">
                <h2>About Dr. Rhea Sharma:</h2>
                <p>With over 8 years of experience in the field of nutrition, wellness, and preventive healthcare, Dr. Rhea Sharma believes that true wellness begins with mindful nourishment. She combines the best of modern nutrition science and holistic lifestyle practices to help her clients achieve balance — physically, mentally, and emotionally. Her approach is personalized, sustainable, and science-backed — focusing not just on diet charts, but on building lifelong healthy habits. At Wellness Wise, she guides individuals toward their ideal state of health through customized nutrition plans, lifestyle counseling, and natural healing methods.</p>
            </div>
            <div class="doc3">
                <h2>Specializations:</h2>
                <li>🌿 Weight Management & Body Transformation</li>
                <li>🥗 Therapeutic Diets for Diabetes, PCOS, and Hypertension</li>
                <li>💪 Sports & Fitness Nutrition</li>
                <li>🧘‍♀️ Stress and Hormonal Balance through Food</li>
                <li>🌸 Gut Health and Immunity Improvement</li>
            </div>
            <div class="doc4">
                <h3>Philosophy:</h3>
                <h1>“Your body is your home — treat it with nourishment, not restriction.”</h1>
            </div>
        </div>
    </div>

    <button onclick="scrollup()" class="fix"><i class="fa-solid fa-arrow-up"></i></button>


    <div class="footer">
		<div class="fpara1">
			<p>Wellness Wise is dedicated to guiding you toward better health through personalized nutrition and science-based diet plans. We focus on natural, sustainable habits that enhance energy, balance, and overall wellness. Trust our experts to help you eat smart, live strong, and achieve long-term health naturally. 🌿💚</p>
			<p><i class="fa-solid fa-location-dot"></i> Maharashtra, India</p>
			<p><i class="fa-solid fa-phone"></i> +(91) 8169922405</p>
			<p><i class="fa-solid fa-phone"></i> +(91) 9324051290</p>
		</div>

		<div class="fpara2">
            <h3>Usefull Links</h3>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="appointment.php">Appointment</a></li>
            <li><a href="doctor.php">Doctor</a></li>
            <li><a href="blog.php">Blogs</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="contact.php">Contact</a></li>
        </div>

        <div class="fpara3">
            <h3>Explore</h3>
            <li><a href="service.php">Our Services</a></li>
			<li><a href="about.php">Our Features</a></li>
			<li><a href="doctor.php">Our Doctor</a></li>
        </div>

		<div class="fpara4">
			<h3>Contact</h3>
			<p><i class="fa-solid fa-location-dot"></i> Maharashtra, India</p>
			<p><i class="fa-solid fa-phone"></i> +(91) 8169922405</p>
			<p><i class="fa-solid fa-phone"></i> +(91) 9324051290</p>
		</div>

		
	</div>

    <script>
        const pre = document.querySelector(".preloader");

        window.addEventListener("load", () => {
            setTimeout(() => {
                pre.classList.add("hide"); 
            }, 2400); 
        });
    </script>


    <script src="script.js"></script>

</body>

</html>