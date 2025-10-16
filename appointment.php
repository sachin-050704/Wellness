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

    <div class="book">
        <div>
            <img src="images/book.png" alt="" srcset="">
        </div>
        <div class="bookform">
            <h1 class="text-center">Book Appointment</h1>
            <form id="appointmentForm" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name"
                        required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com"
                        required>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="10-digit number"
                        required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </div>

                <div class="text-center mt-3">
                    <p id="successMsg" style="display: none; font-size: 18px; font-weight: bold; color: white;">
                        Thank you! Your appointment has been booked successfully. 🌿
                    </p>
                </div>
            </form>



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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("appointmentForm");
            const successMsg = document.getElementById("successMsg");

            form.addEventListener("submit", function (e) {
                e.preventDefault();

                const name = document.getElementById("name").value.trim();
                const email = document.getElementById("email").value.trim();
                const contact = document.getElementById("contact").value.trim();
                const date = document.getElementById("date").value.trim();

                
                if (!name || !email || !contact || !date) {
                    alert("Please fill all fields!");
                    return;
                }

                // AJAX request
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "submit_appointment.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onload = function () {
                    if (this.responseText.trim() === "success") {
                        successMsg.style.display = "block"; 
                        form.reset(); 
                        setTimeout(() => {
                            successMsg.style.display = "none";
                        }, 5000); 
                    } else {
                        alert("Oops! Something went wrong. Try again.");
                    }
                };
                const data = `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&contact=${encodeURIComponent(contact)}&date=${encodeURIComponent(date)}`;
                xhr.send(data);
            });
        });

    </script>


    <script src="script.js"></script>

</body>

</html>