const burgerbutton = document.getElementById("burgerButton");
const mobileMenu = document.querySelector(".mobile-menu");
function toggleMenu() {
    if (mobileMenu.classList.contains("show-menu")) {
        mobileMenu.classList.remove("show-menu");
        mobileMenu.classList.remove("show-menu");
    } else {
        mobileMenu.classList.add("show-menu");
        mobileMenu.classList.add("show-menu");
    }
}

burgerbutton.addEventListener("click", toggleMenu);