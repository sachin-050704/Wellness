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

    <div class="about">
        <h1>ABOUT US</h1>
    </div>

    <div class="vision">
        <h1>🌱 The Story Behind Wellness Wise</h1>
        <p>Wellness Wise was born from a belief that nutrition is not just about what we eat — it’s about how we live.
            Our journey began with a vision to make healthy living simple, enjoyable, and deeply personal. Too often,
            people struggle with diets that don’t last or advice that feels too general. We wanted to change that. At
            Wellness Wise, every plan begins with understanding you — your lifestyle, your habits, your challenges, and
            your goals. Founded by a passionate nutrition expert, our clinic combines the power of medical science and
            mindful living to guide people toward long-term health and balance. We don’t believe in one-size-fits-all
            solutions. We believe in teaching you the wisdom of food, helping you rebuild your relationship with eating,
            and supporting you every step of the way. Wellness Wise isn’t just a clinic — it’s a movement toward
            smarter, sustainable wellness that starts with awareness and grows into transformation.</p>
    </div>

    <div class="philo">
        <div><img src="images/philo.png" alt=""></div>
        <div class="philopara">
            <h1>Our Philosophy</h1>
            <p>At Wellness Wise, we believe that true health isn’t found in strict diets or temporary fixes — it’s built
                through balance, awareness, and consistency. Food is not the enemy; it’s a powerful tool that can heal,
                energize, and transform both body and mind when understood correctly.Our philosophy is simple: listen to
                your body, feed it with purpose, and live with intention. Every individual is unique, and so is their
                nutritional journey. That’s why we focus on personalized nutrition, blending scientific insight with
                real-life practicality.We aim to help you rediscover the joy of eating — without guilt, fear, or
                restriction. Because when nutrition becomes a lifestyle, wellness becomes effortless.</p>
        </div>
    </div>

    <div class="promise">
        <h1 class="ph1">Our Promises</h1>
        <div class="list">
            <div class="box">
                <h1>🌿</h1>
                <h2>Personalized Care</h2>
                <p>Every body is unique, so your nutrition plan should be too.</p>
                <div class="extbox"></div>
                <div class="extbox1"></div>
            </div>
            <div class="box">
                <h1>🧠</h1>
                <h2>Science-Backed Guidance</h2>
                <p>Every recommendation is rooted in real research and proven methods.</p>
                <div class="extbox"></div>
                <div class="extbox1"></div>
            </div>
            <div class="box">
                <h1>🤝</h1>
                <h2>Genuine Support</h2>
                <p>We walk with you at every step of your wellness journey.</p>
                <div class="extbox"></div>
                <div class="extbox1"></div>
            </div>
            <div class="box">
                <h1>🍎</h1>
                <h2>Simple & Sustainable Plans</h2>
                <p>No crash diets or confusion — only easy, lifelong habits.</p>
                <div class="extbox"></div>
                <div class="extbox1"></div>
            </div>
            <div class="box">
                <h1>💬</h1>
                <h2>Honest Communication</h2>
                <p>Clear, friendly, and transparent guidance — always.</p>
                <div class="extbox"></div>
                <div class="extbox1"></div>
            </div>
            <div class="box">
                <h1>🌞</h1>
                <h2>Lasting Transformation</h2>
                <p>Our goal isn’t short-term change, it’s long-term wellness.</p>
                <div class="extbox"></div>
                <div class="extbox1"></div>
            </div>
        </div>
    </div>

    <button onclick="scrollup()" class="fix"><i class="fa-solid fa-arrow-up"></i></button>


    <div class="footer">
        <div class="fpara1">
            <p>Wellness Wise is dedicated to guiding you toward better health through personalized nutrition and
                science-based diet plans. We focus on natural, sustainable habits that enhance energy, balance, and
                overall wellness. Trust our experts to help you eat smart, live strong, and achieve long-term health
                naturally. 🌿💚</p>
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