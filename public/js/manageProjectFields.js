let newMemberBtn = document.getElementById("add_new_member_btn");
newMemberBtn.addEventListener("click",function(){
    var membersContainer = document.getElementById("project_members_container");

    var newMemberWrapper = document.createElement("div");
    newMemberWrapper.classList.add("project_member_wrapper");
    newMemberWrapper.classList.add("form-group-wrapper");

    newMemberWrapper.innerHTML = `
        <label for="project_members_name[]"><b>project_members_name</b></label>
        <input type="text" name="project_members_name[]" id="project_members_name" value="member name 1" required>
        
        <label for="project_members_department[]"><b>project_members_department</b></label>
        <select name="project_members_department[]" id="project_members_department"> 
            <option value="MMT">MMT</option>
            <option value="MMA">MMA</option>
            <option value="HCI">HCI</option>
            <option value="KMU">KMU</option>
            <option value="HTB">HTB</option>
            <option value="SMB">SMB</option>
            <option value="SMC">SMC</option>
            <option value="ITS">ITS</option>
            <option value="AIS">AIS</option>
            <option value="HTW">HTW</option>
            <option value="BWI">BWI</option>
            <option value="IMT">IMT</option>
            <option value="SOZA">SOZA</option>
            <option value="PDM">PDM</option>
            <option value="BMA">BMA</option>
            <option value="HEB">HEB</option>
            <option value="GUK">GUK</option>
            <option value="OTH">OTH</option>
            <option value="ETH">ETH</option>
            <option value="PTH">PTH</option>
            <option value="RET">RET</option>
        </select>
        
        <label for="project_members_role[]"><b>project_members_role</b></label>
        <input type="text" name="project_members_role[]" id="project_members_role" value="member role 1" required>
        
        <label for="project_members_category[]"><b>project_members_category</b></label>
        <select name="project_members_category[]" id="project_members_category"> 
            <option value="MMP1">MMP1</option>
            <option value="MMP2">MMP2</option>
            <option value="MMP2a">MMP2a</option>
            <option value="MMP2b">MMP2b</option>
            <option value="MMP3">MMP3</option>
            <option value="AbschlussProject">Master Project</option>
        </select>
        
        <button type="button" onclick="deleteField(this)">Delete Memeber</button> 
    `;

    // Append the hole thing to the main container
    membersContainer.insertBefore(newMemberWrapper, newMemberBtn);
});

let newLinkBtn = document.getElementById("add_new_link_btn");
newLinkBtn.addEventListener("click",function() {
    var linksContainer = document.getElementById("project_links_container");

    var newLinkWrapper = document.createElement("div");
    newLinkWrapper.classList.add("project_link_wrapper");
    newLinkWrapper.classList.add("form-group-wrapper");
    newLinkWrapper.innerHTML = `
        <label for="project_link_title[]"><b>project_link_title</b></label>
        <input type="text" name="project_link_title[]" id="project_link_title" value="link 1" required>

        <label for="project_link_url[]"><b>project_link_url</b></label>
        <input type="text" name="project_link_url[]" id="project_link_url" value="https://www.example.com" required>
        
        <button type="button" onclick="deleteField(this)">Delete Link</button> 
        <br>
    `;

    // Append the hole thing to the main container
    linksContainer.insertBefore(newLinkWrapper, newLinkBtn);
});


function deleteField(element){
    element.parentElement.remove();
}

function changeInputType(element){
    let mediaBlock = element.parentNode.getElementsByClassName("project_media_block")[0]
    let mediaDescriptionInput = `
        <label for="project_media_description[]"><b>project_media_description</b></label>
        <input type="text" name="project_media_description[]" value="project_media_description" id="project_media_description" required>
    `;
    switch(element.value) {
        case "Text":
            mediaBlock.innerHTML = `
                <label for="project_media_text[]"><b>project_media_text</b></label>
                <textarea name="project_media_text[]" id="project_media_text" rows="4" cols="50" required>project_media_text project_media_text project_media_text</textarea>
            `;
          break;
        case "Media":
            mediaBlock.innerHTML = `
                <label for="project_media_file[]"><b>project_media_file</b></label>
                <input type="file" name="project_media_file[]" id="project_media_file" accept="image/*,.jpg">

            ` + mediaDescriptionInput;
          break;
        case "Embeded":
            mediaBlock.innerHTML = `
                <label for="project_media_url[]"><b>project_media_url</b></label>
                <input type="text" name="project_media_url[]" value="https://www.youtube.com/watch?v=Yl5wMXsSDbY" id="project_media_url" required>

            ` + mediaDescriptionInput;
          break;
        case "Gallery":
            mediaBlock.innerHTML = `
                <label for="project_media_gallery[]"><b>project_media_gallery</b></label>
                <input type="file" name="project_media_gallery[]" id="project_media_gallery" accept="image/*,.jpg" multiple>
            ` + mediaDescriptionInput;
            break;
        default:
          // code block
      } 
}

let newMediaBtn = document.getElementById("add_new_media_btn");
newMediaBtn.addEventListener("click", function() {
    var mediaContainer = document.getElementById("project_media_container");

    var newMediaWrapper = document.createElement("div");
    newMediaWrapper.classList.add("project_media_wrapper");
    newMediaWrapper.classList.add("form-group-wrapper");

    newMediaWrapper.innerHTML = `
        <label for="project_media_type[]"><b>project_media_type</b></label>
        <select name="project_media_type[]" id="project_media_type" onchange="changeInputType(this)" required> 
            <option value="Text">Text</option>
            <option value="Media">Media(image, video, audio, document)</option>
            <option value="Embeded">Embeded youtube | Vimeo</option>
            <option value="Gallery">Gallery</option>
        </select>

        <label for="project_media_title[]"><b>project_media_title</b></label>
        <input type="text" name="project_media_title[]" value="media title" id="project_media_title" required>

        <div class="project_media_block">
            <label for="project_media_text[]"><b>project_media_text</b></label>
            <textarea name="project_media_text[]" id="project_media_text" rows="4" cols="50" required>project_media_text project_media_text project_media_text</textarea>
            
            <label for="project_media_description[]"><b>project_media_description</b></label>
            <input type="text" name="project_media_description[]" value="project_media_description" id="project_media_description" required>
        </div>

        <button type="button" onclick="deleteField(this)">Delete Media</button> 
    `;

    // Append the hole thing to the main container
    mediaContainer.insertBefore(newMediaWrapper, newMediaBtn);
});

