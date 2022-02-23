let project_hero_input = document.getElementById('project_hero');
if(document.body.contains(project_hero_input)){
    project_hero_input.addEventListener('change', () => videoFileValidation(project_hero_input))
}

function getDuration(element) {
    var video = document.createElement('video');
    video.preload = 'metadata';
    video.onloadedmetadata = function () {
        window.URL.revokeObjectURL(video.src);
        if (video.duration > 15) {
            alert("Duration : " + video.duration + " seconds");
            element.value = '';
        }
    }
    video.src = URL.createObjectURL(element.files[0]);
}
function videoFileValidation(element) {
    // Allowing file type
    var allowedExtensions = /(\.mp4)$/i; /*/(\.mp4|\.jpeg|\.png|\.gif)$/*/ 

    if (allowedExtensions.exec(element.value)) {
        getDuration(project_hero_input);
        return false;
    } 
}