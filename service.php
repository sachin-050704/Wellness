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

    <div class="service">
        <div class="ser"><h1>Our Services</h1></div>
    </div>


    <div class="ourser">
        <div class="serlist">
            <div class="serbox">
                <button>📝</button>
                <h2>Personalized Nutrition Plans</h2>
                <p>Tailored meal plans designed for your body, lifestyle, and goals — whether it’s weight management, muscle gain, or overall wellness.</p>
            </div>
            <div class="serbox">
                <button>🧑‍⚕️</button>
                <h2>One-on-One Consultations</h2>
                <p>Private sessions with our expert nutritionist to understand your habits, challenges, and health goals.</p>
            </div>
            <div class="serbox">
                <button>💪</button>
                <h2>Health & Wellness Coaching</h2>
                <p>Guidance and support to build healthy routines, improve energy, and maintain long-term wellness.</p>
            </div>
            <div class="serbox">
                <button>🍽️</button>
                <h2>Special Diet Programs</h2>
                <p>Customized programs for medical conditions like diabetes, PCOS, heart health, or digestive issues.</p>
            </div>
            <div class="serbox">
                <button>⚖️</button>
                <h2>Weight Management Solutions</h2>
                <p>Safe and effective strategies for losing, gaining, or maintaining weight through balanced nutrition.</p>
            </div>
            <div class="serbox">
                <button>🌸</button>
                <h2>Lifestyle & Habit Counseling</h2>
                <p>Helping you develop sustainable habits, from mindful eating to stress management and better sleep.</p>
            </div>
            <div class="serbox">
                <button>💻</button>
                <h2>Online Support & Follow-ups</h2>
                <p>Flexible virtual consultations and regular follow-ups to track your progress and keep you motivated.</p>
            </div>
            <div class="serbox">
                <button>📚</button>
                <h2>Nutritional Workshops & Classes</h2>
                <p>Interactive sessions to educate individuals and groups about healthy eating, meal prep, and wellness strategies.</p>
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