<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="home">
        <img src="images/home.png" alt="" srcset="">
    </div>

    <div class="home2">
        <div class="himg">
            <img src="images/home2.png" alt="">
        </div>

        <div class="hpara">
            <h1>Personalized Nutrition, Better Health!</h1>
            <p>At <b>Wellness Wise</b>, we combine expert nutrition guidance with modern science to help you achieve
                your health goals. From weight management to balanced diets and lifestyle plans, we’re here to support
                your journey toward a healthier, happier you. 🥦💚</p>
            <button><a href="appointment.php">Book Your Consultation</a></button>

        </div>
    </div>


    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active" style="background-image: url('images/slide1.jpg');">
                <div class="carousel-caption">
                    <h1 class="h1">Personalized Nutrition, Better Health!</h1>
                    <p class="p">We combine modern science with natural nutrition to help you live healthier and happier.</p>
                    <a href="appointment.php" class="btn-custom">Book Consultation</a>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('images/slide2.jpg');">
                <div class="carousel-caption">
                    <h1 class="h1">Eat Smart, Feel Strong!</h1>
                    <p class="p">Get expert diet plans designed by certified nutrition professionals.</p>
                    <a href="service.php" class="btn-custom">Explore Services</a>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('images/slide5.jpg');">
                <div class="carousel-caption">
                    <h1 class="h1">Natural Care. Real Results.</h1>
                    <p class="p">From weight management to wellness — we guide you every step of the way. 🌿</p>
                    <a href="appointment.php" class="btn-custom">Start Your Journey</a>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="script.js"></script>

</body>

</html>