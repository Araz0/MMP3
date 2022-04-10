const burgerbutton = document.getElementById("burgerButton");
const mainMenu = document.querySelector(".main-menu");
function toggleMenu() {
    if (mainMenu.children[1].classList.contains("show-menu")) {
        mainMenu.children[1].classList.remove("show-menu");
        mainMenu.children[2].classList.remove("show-menu");
    } else {
        mainMenu.children[1].classList.add("show-menu");
        mainMenu.children[2].classList.add("show-menu");
    }
}

burgerbutton.addEventListener("click", toggleMenu);