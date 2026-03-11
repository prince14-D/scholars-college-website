


/* =====================================
   SCHOLAR'S COLLEGE WEBSITE JAVASCRIPT
===================================== */

/* ============================
   NAVBAR SCROLL EFFECT
============================ */

window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");

    if (window.scrollY > 50) {
        navbar.classList.add("navbar-scrolled");
    } else {
        navbar.classList.remove("navbar-scrolled");
    }
});


/* ============================
   ADMISSION COUNTDOWN TIMER
============================ */

function startCountdown() {

    const targetDate = new Date("September 1, 2026 00:00:00").getTime();

    const timer = setInterval(function () {

        const now = new Date().getTime();
        const distance = targetDate - now;

        if (distance < 0) {
            clearInterval(timer);
            document.getElementById("countdown").innerHTML = "Admissions Open";
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if(document.getElementById("days")){
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;
        }

    }, 1000);

}

startCountdown();


/* ============================
   SMOOTH SCROLL
============================ */

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener('click', function (e) {

        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));

        if (target) {

            target.scrollIntoView({
                behavior: "smooth"
            });

        }

    });

});


/* ============================
   SIMPLE COUNTER ANIMATION
============================ */

function animateCounters() {

    const counters = document.querySelectorAll(".stat-card h3");

    counters.forEach(counter => {

        const update = () => {

            const target = +counter.innerText.replace("+", "");
            const count = +counter.getAttribute("data-count") || 0;

            const increment = target / 100;

            if (count < target) {

                counter.setAttribute("data-count", count + increment);
                counter.innerText = Math.ceil(count + increment);

                setTimeout(update, 20);

            } else {

                counter.innerText = target + "+";

            }

        };

        update();

    });

}


/* trigger counter when stats visible */

const statsSection = document.querySelector(".stats-section");

if(statsSection){

    const observer = new IntersectionObserver(entries => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {
                animateCounters();
                observer.disconnect();
            }

        });

    });

    observer.observe(statsSection);

}


/* ============================
   IMAGE LAZY LOADING
============================ */

document.addEventListener("DOMContentLoaded", function () {

    const images = document.querySelectorAll("img[data-src]");

    const imgObserver = new IntersectionObserver((entries, observer) => {

        entries.forEach(entry => {

            if (!entry.isIntersecting) return;

            const img = entry.target;

            img.src = img.dataset.src;

            img.onload = () => {
                img.setAttribute("data-loaded", "true");
            };

            observer.unobserve(img);

        });

    });

    images.forEach(img => imgObserver.observe(img));

});


/* ============================
   GALLERY IMAGE CLICK VIEW
============================ */

document.querySelectorAll(".gallery-img").forEach(img => {

    img.addEventListener("click", function () {

        const modal = document.createElement("div");

        modal.style.position = "fixed";
        modal.style.top = "0";
        modal.style.left = "0";
        modal.style.width = "100%";
        modal.style.height = "100%";
        modal.style.background = "rgba(0,0,0,0.8)";
        modal.style.display = "flex";
        modal.style.alignItems = "center";
        modal.style.justifyContent = "center";
        modal.style.zIndex = "9999";

        const image = document.createElement("img");

        image.src = this.src;
        image.style.maxWidth = "90%";
        image.style.maxHeight = "90%";
        image.style.borderRadius = "10px";

        modal.appendChild(image);

        modal.onclick = function () {
            document.body.removeChild(modal);
        };

        document.body.appendChild(modal);

    });

});


/* ============================
   PAGE LOADING FADE
============================ */

window.addEventListener("load", function(){

    document.body.style.opacity = "1";

});


document.body.style.opacity = "0";
document.body.style.transition = "opacity .5s";