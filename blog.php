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

    <div class="blog1">
        <img src="images/blog.jpg" alt="" srcset="">
    </div>

    <div class="blog">
		<div class="bg1">
			<div class="bg">
				<div class="bgimg">
				<img src="images/b1.jpg" alt=""></div>
				<div class="bgpara">
				<div class="bgi">
					<p><i class="fa-solid fa-user"></i> Healthy</p>
					<p><i class="fa-solid fa-calendar"></i> February 28, 2025</p>
				</div>
				<h2><a href="https://artofhealthyliving.com/">The Art of Healthy Living</a></h2>
				<p>The Art of Healthy Living is dedicated to helping you lead a healthy lifestyle. Diets, Fitness, Well-being: Health is so important, your life depends on it.</p>
			</div>
			</div>

			<div class="bg">
				<div class="bgimg">
				<img src="images/b2.jpg" alt=""></div>
				<div class="bgpara">
				<div class="bgi">
					<p><i class="fa-solid fa-user"></i> Exercise</p>
					<p><i class="fa-solid fa-calendar"></i> January 15, 2025</p>
				</div>
				<h2><a href="https://mindfulnessexercises.com/top-10-mindfulness-exercises/">Mindfulness Exercises</a></h2>
				<p>Increase your mindfulness with their top 10 mindfulness exercises for anxiety, sleep, stress reduction and depression. Review top mindfulness techniques here.</p>
			</div>
			</div>

			<div class="bg">
				<div class="bgimg">
				<img src="images/b3.jpg" alt=""></div>
				<div class="bgpara">
				<div class="bgi">
					<p><i class="fa-solid fa-user"></i> Nature</p>
					<p><i class="fa-solid fa-calendar"></i> February 10, 2025</p>
				</div>
				<h2><a href="https://greenlivingmag.com/gl-health-wellness/">Green Living Magazine</a></h2>
				<p>Green Living Magazine features a wide variety of health and wellness articles, designed to support their audience with practical advice.</p>
			</div>
			</div>

			<div class="bg">
				<div class="bgimg">
				<img src="images/b4.jpg" alt=""></div>
				<div class="bgpara">
				<div class="bgi">
					<p><i class="fa-solid fa-user"></i> Wellness</p>
					<p><i class="fa-solid fa-calendar"></i> March 5, 2025</p>
				</div>
				<h2><a href="https://eatprayworkout.com/">Eat Pray Workout</a></h2>
				<p>Join Amy Darcy in building a healthy lifestyle with recipes & wellness tips to help you live a wholesome, happy life.</p>
			</div>
			</div>

			<div class="bg">
				<div class="bgimg">
				<img src="images/b5.jpg" alt=""></div>
				<div class="bgpara">
				<div class="bgi">
					<p><i class="fa-solid fa-user"></i> Mind</p>
					<p><i class="fa-solid fa-calendar"></i> March 1, 2025</p>
				</div>
				<h2><a href="https://theblissfulmind.com/blog/">The Blissful Mind</a></h2>
				<p>The Blissful Mind is a guide to finding calm in the every day. Learn how to reduce burnout and overwhelm so you can stress less and take action.</p>
			</div>
			</div>

			<div class="bg">
				<div class="bgimg">
				<img src="images/b6.jpg" alt=""></div>
				<div class="bgpara">
				<div class="bgi">
					<p><i class="fa-solid fa-user"></i> Heal</p>
					<p><i class="fa-solid fa-calendar"></i> February 20, 2025</p>
				</div>
				<h2><a href="https://healnourishgrow.com/">Heal Nourish Grow</a></h2>
				<p>The blog contains information and advice around ultimate wellness, healthy lifestyles and advanced keto nutrition.</p>
			</div>
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