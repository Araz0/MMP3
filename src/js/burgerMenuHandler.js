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

function toggleStudy(e) {
    e.parentElement.parentElement.children[1].classList.toggle("show-study");
    // if (e.style.backgroundImage = "url('/media/icon-dropup.png')") {
    //     e.style.backgroundImage = "url('/media/icon-dropdown.png')";
    // } else {
    //     e.style.backgroundImage = "url('/media/icon-dropup.png')";
    // }
    e.classList.toggle("dropdown-isup");

}