const burgerbutton = document.getElementById("burgerButton");
const mobileMenu = document.querySelector(".mobile-menu");
var viewport_width = document.documentElement.clientWidth;

function toggleMenu() {
    if (mobileMenu.classList.contains("show-menu")) {
        mobileMenu.classList.remove("show-menu");
        mobileMenu.classList.remove("show-menu");
    } else {
        mobileMenu.classList.add("show-menu");
        mobileMenu.classList.add("show-menu");
    }
}

let program_tables = document.querySelector(".program-container__table");
document.querySelector(".program-container__table").children[1].style.height = document.querySelector(".program-container__table").children[0].clientHeight+"px";

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
function toggleProject(e) {
    let parentElm = e.parentElement.parentElement;
    if (viewport_width >= 992) {
        parentElm.getElementsByClassName("projects__container__project__description")[0].classList.toggle("show-project");
        parentElm.getElementsByClassName("projects__container__project__tags")[0].classList.toggle("show-project");
        parentElm.getElementsByClassName("projects__container__project__members")[0].classList.toggle("show-project");
        parentElm.getElementsByClassName("projects__container__project__members")[0].classList.toggle("clamp_projects");
        parentElm.getElementsByClassName("projects__container__project__degree")[0].classList.toggle("show-project");
    }else{
        parentElm.getElementsByClassName("projects__container__project__description")[0].classList.toggle("show-project");
        parentElm.getElementsByClassName("projects__container__project__tags")[0].classList.toggle("show-project");
        parentElm.getElementsByClassName("projects__container__project__members")[0].classList.toggle("show-project");
        parentElm.getElementsByClassName("projects__container__project__members")[0].classList.toggle("clamp_projects");
        parentElm.getElementsByClassName("projects__container__project__degree")[0].classList.toggle("show-project");
    }
    parentElm.classList.toggle("Project-opend");
    e.classList.toggle("dropdown-isup");
}
function toggleFilterDegree(e) {
    let parentElm = e.parentElement.parentElement;
    parentElm.getElementsByClassName("projects__filter__degree__options")[0].classList.toggle("show-project");
    e.classList.toggle("dropdown-isup");
}
function toggleFilterCategory(e) {
    let parentElm = e.parentElement.parentElement;
    parentElm.getElementsByClassName("projects__filter__category__options")[0].classList.toggle("show-project");
    e.classList.toggle("dropdown-isup");
}
function filterTag(e) {
    let projects = document.getElementsByClassName("projects__container")[0].children;
    let tags = document.getElementsByClassName("projects__filter__tags__container")[0].children;
    for (var i = 0; i < tags.length; i++) {
        if (tags[i] == e) {
            tags[i].classList.add("selected_tag");
        }else{
            tags[i].classList.remove("selected_tag");
        }
        
    }
    for (var i = 0; i < projects.length; i++) {

        if (e.innerHTML == "Alles") {
            projects[i].style.display = "grid"
        }else{
            if (projects[i].getElementsByClassName("projects__container__project__tags")[0].innerHTML.includes(e.innerHTML)) {
                projects[i].style.display = "grid";
                console.log("found");
            }else{
                projects[i].style.display = "none";
                console.log("not found");
            }

        }
        
    }
}
function filterDegree(e) {
    let projects = document.getElementsByClassName("projects__container")[0].children;
    for (var i = 0; i < projects.length; i++) {
        var project = projects[i];
        // Do stuff
        let project_degree = project.getElementsByClassName("projects__container__project__degree")[0].innerHTML;
        if (e.innerHTML == project_degree) {
            project.style.display = "grid"
        }else{
            if (e.innerHTML == "Alles") {
                project.style.display = "grid"
            }else{
                project.style.display = "none"
            }
        }
    }
}
function filterCategory(e) {
    let projects = document.getElementsByClassName("projects__container")[0].children;
    for (var i = 0; i < projects.length; i++) {
        var project = projects[i];
        // Do stuff
        let project_category = project.getElementsByClassName("projects__container__project__category")[0].innerHTML;
        if (e.innerHTML == project_category) {
            project.style.display = "grid"
        }else{
            if (e.innerHTML == "Alles") {
                project.style.display = "grid"
            }else{
                project.style.display = "none"
            }
        }
    }
    toggleFilterCategory(document.getElementById("categoryfilterid"));
}
if (document.getElementsByClassName("program-container__table__entry__slots__item__link")) {
    if (viewport_width <= 1470) {
        let links = document.getElementsByClassName("program-container__table__entry__slots__item__link");
        for (let i = 0; i < links.length; i++) {
            if (links[i].children[0].classList.contains("keep-label") == false) {
                links[i].children[0].innerText = "About";
            }
        }
    }
}