const nav = document.getElementById("tab");
const tabicon = document.querySelector(".logoicon");
const tabicon1 = document.querySelector(".logoicon1");

function home() {
    window.location.href = "home.html"
}

let f = document.querySelector(".fix");

window.onscroll = function () {
    let h = document.documentElement.scrollTop;
    if (h > 90) {
        f.style.display = "block";
    } else {
        f.style.display = "none";
    }
}

function scrollup() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

function toggle() {
    tabicon.style.display = "none";
    tabicon1.style.display = "block";
    nav.classList.add("active");
}

function toggle1() {
    tabicon.style.display = "block";
    tabicon1.style.display = "none";
    nav.classList.remove("active");
}


const myCarousel = document.getElementById('myCarousel');
const carousel = new bootstrap.Carousel(myCarousel, {
    interval: 4000,
    ride: 'carousel',
    pause: false
});

myCarousel.addEventListener('mouseenter', () => {
    carousel.pause();
});

myCarousel.addEventListener('mouseleave', () => {
    carousel.cycle();
});


document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("appointmentForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); 

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const contact = document.getElementById("contact").value.trim();
        const date = document.getElementById("date").value;

        if (name.length < 3) {
            alert("⚠️ Please enter your full name (at least 3 characters).");
            return;
        }


        const emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
        if (!emailPattern.test(email)) {
            alert("⚠️ Please enter a valid email address.");
            return;
        }

        
        const phonePattern = /^[0-9]{10}$/;
        if (!phonePattern.test(contact)) {
            alert("⚠️ Please enter a valid 10-digit contact number.");
            return;
        }

       
        if (!date) {
            alert("⚠️ Please select an appointment date.");
            return;
        }

        const today = new Date();
        const selectedDate = new Date(date);
        if (selectedDate < new Date(today.getFullYear(), today.getMonth(), today.getDate())) {
            alert("⚠️ Appointment date cannot be in the past.");
            return;
        }

        alert("✅ Appointment booked successfully!");
        form.reset();
    });
});




