


/* =====================================
   SCHOLAR'S COLLEGE WEBSITE JAVASCRIPT
===================================== */

/* ============================
   NAVBAR SCROLL EFFECT
============================ */

window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (!navbar) return;

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
    const countdownEl = document.getElementById("countdown");

    const timer = setInterval(function () {

        const now = new Date().getTime();
        const distance = targetDate - now;

        if (distance < 0) {
            clearInterval(timer);
            if (countdownEl) {
                countdownEl.innerHTML = "Admissions Open";
            }
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

        const targetSelector = this.getAttribute('href');
        if (!targetSelector || targetSelector === "#") return;

        const target = document.querySelector(targetSelector);

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

    const counters = document.querySelectorAll(".stat-number[data-count]");

    counters.forEach(counter => {

        const update = () => {

            const target = +counter.getAttribute("data-count") || 0;
            const count = +counter.getAttribute("data-current") || 0;
            const increment = Math.max(1, target / 100);

            if (count < target) {

                const nextCount = Math.min(target, count + increment);
                counter.setAttribute("data-current", nextCount);
                counter.innerText = Math.ceil(nextCount);

                setTimeout(update, 20);

            } else {

                counter.innerText = target;

            }

        };

        update();

    });

}


/* trigger counter when stats visible */

const statsSection = document.querySelector(".stats-bar");

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
   SCROLL REVEAL ANIMATIONS
============================ */

const revealItems = document.querySelectorAll(".reveal");

if (revealItems.length) {

    const revealObserver = new IntersectionObserver((entries, observer) => {

        entries.forEach(entry => {

            if (!entry.isIntersecting) return;

            entry.target.classList.add("visible");
            observer.unobserve(entry.target);

        });

    }, {
        threshold: 0.12
    });

    revealItems.forEach(item => revealObserver.observe(item));

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


window.addEventListener("pageshow", function(){

    document.body.style.opacity = "1";

});


setTimeout(function () {
    document.body.style.opacity = "1";
}, 1200);


document.body.style.opacity = "0";
document.body.style.transition = "opacity .5s";