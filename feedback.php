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

    <div class="feedback">
        <img src="images/feedback.jpg" alt="" srcset="">
    </div>

    <div class="feedpara">
        <p>At Wellness Wise, we truly value your thoughts, suggestions, and experiences. Every comment helps us improve
            our services and provide you with the best possible care and support. Whether it’s appreciation or ideas for
            improvement, your feedback helps us grow stronger together. Thank you for taking the time to share your
            opinion! 🌿</p>
    </div>

    <div class="feed">
        <div>
            <img src="images/feed.png" alt="" srcset="">
        </div>
        <div class="feedform">
            <h1 class="text-center">Give Feedback</h1>
            <form id="feedbackForm" action="submit_feedback.php" method="POST" novalidate>
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                        required>
                    <span class="text-danger" id="nameError"></span>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com"
                        required>
                    <span class="text-danger" id="emailError"></span>
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <select class="form-select" id="rating" name="rating" required>
                        <option value="">-- Select Rating --</option>
                        <option value="5">⭐⭐⭐⭐⭐ Excellent</option>
                        <option value="4">⭐⭐⭐⭐ Good</option>
                        <option value="3">⭐⭐⭐ Average</option>
                        <option value="2">⭐⭐ Poor</option>
                        <option value="1">⭐ Very Poor</option>
                    </select>
                    <span class="text-danger" id="ratingError"></span>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Your Feedback</label>
                    <textarea class="form-control" id="message" name="message" rows="4"
                        placeholder="Write your feedback here..." required></textarea>
                    <span class="text-danger" id="messageError"></span>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4">Submit Feedback</button>
                </div>
            </form>

            <div class="text-center mt-3">
                <p id="successMsg" style="display: none; font-size: 18px; font-weight: bold; color: white;">
                    Thank you! Your feedback has been submitted successfully. 🌿💚
                </p>
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("feedbackForm");
            const name = document.getElementById("name");
            const email = document.getElementById("email");
            const rating = document.getElementById("rating");
            const message = document.getElementById("message");

            const nameError = document.getElementById("nameError");
            const emailError = document.getElementById("emailError");
            const ratingError = document.getElementById("ratingError");
            const messageError = document.getElementById("messageError");

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            function validateField(field, errorElement, condition, errorMsg) {
                if (condition) {
                    errorElement.innerText = errorMsg;
                    return false;
                } else {
                    errorElement.innerText = "";
                    return true;
                }
            }

            form.addEventListener("submit", function (e) {
                e.preventDefault();

                let nameValid = validateField(name, nameError, name.value.trim().length < 3, "Enter your full name");
                let emailValid = validateField(email, emailError, !emailPattern.test(email.value.trim()), "Enter a valid email");
                let ratingValid = validateField(rating, ratingError, rating.value === "", "Select a rating");
                let messageValid = validateField(message, messageError, message.value.trim().length < 10, "Message must be at least 10 characters");

                if (nameValid && emailValid && ratingValid && messageValid) {
                 
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "submit_feedback.php", true);
                    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhr.onload = function () {
                        if (this.responseText.trim() === "success") {
                            const successMsg = document.getElementById("successMsg");
                            successMsg.style.display = "block";
                            form.reset();
                         
                            setTimeout(() => successMsg.style.display = "none", 5000);
                        } else {
                            alert("Oops! Something went wrong. Try again.");
                        }
                    };
                   
                    let data = `name=${encodeURIComponent(name.value)}&email=${encodeURIComponent(email.value)}&rating=${encodeURIComponent(rating.value)}&message=${encodeURIComponent(message.value)}`;
                    xhr.send(data);
                }
            });

        });
    </script>


</body>

</html>