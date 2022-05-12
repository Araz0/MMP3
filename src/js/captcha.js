// Make the DIV element draggable:
var captchas = document.querySelectorAll('.captcha-container');
var viewport_width = document.documentElement.clientWidth;

if (viewport_width < 790) {
    var heroCaptchas = document.querySelector('.section-hero').querySelectorAll('.captcha-window');
    hideall(heroCaptchas);
    var heroPopups = document.querySelector('#popupfiller').querySelectorAll('.popup');
    hidebutone(heroPopups);
    var konzeptCaptchas = document.querySelector('.section-konzept').querySelectorAll('.captcha-window');
    hideall(konzeptCaptchas);
    var studypopups = document.querySelector('.section__moreStudyInfo').querySelectorAll('.popup');
    hidebutone(studypopups);

}
function hidebutone(nodeCollection){
    let savedIndex = Math.floor(Math.random() * nodeCollection.length);
    for (let i = 0; i < nodeCollection.length; i++) {
        if (i != savedIndex) {
            nodeCollection[i].style.display = "none" 
        }
    }
}
function hideall(nodeCollection){
    for (let i = 0; i < nodeCollection.length; i++) {
        nodeCollection[i].style.display = "none" 
    }
}

captchas.forEach(element => {
    dragElement(element);
    const xH = element.getAttribute("xH");
    const xV = element.getAttribute("xV");

    // if (element.getAttribute("sideH") == "right") {
    //     element.style.right = (Math.floor(Math.random() * xH) + 1)+"%";
    //     element.style.left = "auto";
    // } else {
    //     element.style.left = (Math.floor(Math.random() * xH) + 1)+"%";
    // }
    // if (element.getAttribute("sideV") == "buttom") {
    //     element.style.buttom = (Math.floor(Math.random() * xV) + 1)+"%";
    //     element.style.top = "auto";
    // } else {
    //     element.style.top = (Math.floor(Math.random() * xV) + 1)+"%";
    // }
    element.style.top = (Math.floor(Math.random() * 25) + 2)+"rem";
    if (viewport_width < 790) {
        element.style.left = (Math.floor(Math.random() * 40) + 1)+"%";
        element.style.top = (Math.floor(Math.random() * 35) + 2)+"rem";
    } else if (viewport_width < 1280) {
        element.style.left = (Math.floor(Math.random() * 50) + 1)+"%";
    } else if (viewport_width > 1280) {
        element.style.left = (Math.floor(Math.random() * 75) + 1)+"%";
    }
    
    
});


function closeCaptchaOnClick(e){
    e.parentElement.parentElement.remove();
}

function dragElement(elmnt) {
    var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    if (elmnt.children[0]) {
        // if present, the header is where you move the DIV from:
        elmnt.children[0].onmousedown = dragMouseDown;
    } else {
        // otherwise, move the DIV from anywhere inside the DIV:
        elmnt.onmousedown = dragMouseDown;
    }

    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        // get the mouse cursor position at startup:
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        // call a function whenever the cursor moves:
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        // calculate the new cursor position:
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        // set the element's new position:
        elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
        elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
    }

    function closeDragElement() {
        // stop moving when mouse button is released:
        document.onmouseup = null;
        document.onmousemove = null;
    }
}
