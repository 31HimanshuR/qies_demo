const menuToggle = document.getElementById("menuToggle");
const navMenu = document.getElementById("navMenu");

menuToggle.addEventListener("click", () => {
    navMenu.classList.toggle("active");
});

window.addEventListener("load", function() {
    const loader = document.getElementById("page-loader");
    setTimeout(() => {
        loader.classList.add("hide");
    }, 800); // duration of loader
});


const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {
    const update = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const speed = target / 100;

        if (count < target) {
            counter.innerText = Math.ceil(count + speed);
            setTimeout(update, 30);
        } else {
            counter.innerText = target + "+";
        }
    };
    update();
});




window.addEventListener("load", function () {
    document.body.classList.add("page-loaded");
});


