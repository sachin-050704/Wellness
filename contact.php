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

    <div class="contact">
        <h1>CONTACT US</h1>
    </div>

    <div class="contactpara">
        <h1>🌿 Contact Us Anytime 🌿</h1>
        <p>At Wellness Wise, we’re always here to listen, guide, and support your wellness journey. Whether you have questions about your diet plan, need personalized nutrition advice, or simply want to share your progress, our team is just a message away. Your health and satisfaction mean everything to us, and we’re happy to assist you with care and compassion. You can reach out via phone, email, or visit our clinic during working hours — we promise a warm welcome and quick response. Together, let’s make your path to better health simple, enjoyable, and truly rewarding.</p>
    </div>

    <div class="contact1">
			<img src="images/contact.png" alt="">
			<div class="cpara">
				<div class="c1">
					<i class="fa-solid fa-phone"></i>
					<h4>Phone No.:-</h4>
					<h2>+918169922405</h2>
					<h2>+919324051290</h2>
				</div>

				<div class="c1">
					<i class="fa-solid fa-envelope"></i>
					<h4>Email:-</h4>
					<h2><a href="lawreach52@gmail.com">wellnesswise@gmail.com</a></h2>
					<h2><a href="alaricvaz2@gmail.com">drrheasharma@gmail.com</a></h2>
				</div>

				<div class="c1">
					<i class="fa-solid fa-location-dot"></i>
					<h4>Address:-</h4>
					<p>Wellness Wise, Marry Villa</p>
					<p>Vasai, Maharashtra, India</p>
				</div>
			</div>
		</div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.0339942318037!2d72.81862827498507!3d19.367680681897912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ae91f0c546c7%3A0x531085fa70e7e4df!2sStella%20Rd%2C%20Suyog%20Nagar%2C%20Vasai%20West%2C%20Vasai-Virar%2C%20Maharashtra%20401202!5e0!3m2!1sen!2sin!4v1759925207918!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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