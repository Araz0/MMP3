var viewport_width = document.documentElement.clientWidth;
var captchas = document.querySelectorAll('.captcha-container');

captchas.forEach(element => {
    dragElement(element);

    element.style.top = randomIntFromInterval(1, element.parentElement.clientHeight - element.clientHeight)+"px";
    if (viewport_width < 790) {
        element.style.left = randomIntFromInterval(1, element.parentElement.clientWidth - element.clientWidth)+"px";
        element.style.top = randomIntFromInterval(1, element.parentElement.clientHeight - element.clientHeight)+"px";
    } else if (viewport_width < 1280) {
        element.style.left = randomIntFromInterval(1, element.parentElement.clientWidth - element.clientWidth)+"px";
    } else if (viewport_width > 1280) {
        element.style.left = randomIntFromInterval(1, element.parentElement.clientWidth - element.clientWidth)+"px";
        element.style.top = randomIntFromInterval(1, element.parentElement.clientHeight - element.clientHeight)+"px";
        // element.style.left = (Math.floor(Math.random() * 75) + 1)+"%";
    }
});


if (viewport_width < 790) {
    var heroCaptchas = document.querySelector('.section-hero').querySelectorAll('.captcha-window');
    hidebutone(heroCaptchas);
    var heroPopups = document.querySelector('#popupfiller').querySelectorAll('.popup');
    hidebutone(heroPopups);
    var konzeptCaptchas = document.querySelector('.section-konzept').querySelectorAll('.captcha-window');
    hidebutone(konzeptCaptchas);
    var studypopups = document.querySelector('.section__moreStudyInfo').querySelectorAll('.popup');
    hidebutone(studypopups);

}
function randomIntFromInterval(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min)
}
function hidebutone(nodeCollection){
    let savedIndex = Math.floor(Math.random() * nodeCollection.length);
    for (let i = 0; i < nodeCollection.length; i++) {
        if (i != savedIndex) {
            nodeCollection[i].remove(); 
        }
    }
}
function hideall(nodeCollection){
    for (let i = 0; i < nodeCollection.length; i++) {
        nodeCollection[i].remove(); 
    }
}



function closeCaptchaOnClick(e){
    e.parentElement.parentElement.remove();
}


function closeSectionCaptchasOnVerify(e){
    var section_captchas = e.parentElement.parentElement.parentElement.querySelectorAll('.captcha-container');
    
    e.parentElement.parentElement.remove();
    for (let i = 0; i < section_captchas.length; i++) {
        const element = section_captchas[i];
        setTimeout(function(i) {
            element.remove(); 
        },500 * i,i);
        
    };
    document.getElementById("hero-video").play();
    document.getElementById("hero-logo").play();
}
let sleep = ms => {  
    return 
};  
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
