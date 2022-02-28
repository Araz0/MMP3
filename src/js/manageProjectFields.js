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
            <option value="MMA">MMA</option>
            <option value="MMT">MMT</option>
            <option value="BWL">BWL</option>
        </select>
        
        <label for="project_members_role[]"><b>project_members_role</b></label>
        <input type="text" name="project_members_role[]" id="project_members_role" value="member role 1" required>
        
        <label for="project_members_thumbnail[]"><b>project_members_thumbnail</b></label>
        <input type="file" name="project_members_thumbnail[]" id="project_members_thumbnail" accept="image/*,.jpg" >
        
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
    switch(element.value) {
        case "Text":
            mediaBlock.innerHTML = `
                <label for="project_media_text[]"><b>project_media_text</b></label>
                <textarea name="project_media_text[]" id="project_media_text" rows="4" cols="50" required>project_media_text project_media_text project_media_text</textarea>
            `;
          break;
        case "Media":
            mediaBlock.innerHTML = `
                <label for="project_media_url[]"><b>project_media_url</b></label>
                <input type="text" name="project_media_url[]" value="https://www.youtube.com/watch?v=Yl5wMXsSDbY" id="project_media_url" required>
            `;
          break;
        case "Document":
            mediaBlock.innerHTML = `
                <label for="project_media_file[]"><b>project_media_file</b></label>
                <input type="file" name="project_media_file[]" id="project_media_file" accept="image/*,.jpg">
            `;
            break;
        case "Gallery":
            mediaBlock.innerHTML = `
                <label for="project_media_gallery[]"><b>project_media_gallery</b></label>
                <input type="file" name="project_media_gallery[]" id="project_media_gallery" accept="image/*,.jpg" multiple>
            `;
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
            <option value="Media">Media</option>
            <option value="Document">Document</option>
            <option value="Gallery">Gallery</option>
        </select>

        <label for="project_media_title[]"><b>project_media_title</b></label>
        <input type="text" name="project_media_title[]" value="media title" id="project_media_title" required>

        <div class="project_media_block">
            <label for="project_media_text[]"><b>project_media_text</b></label>
            <textarea name="project_media_text[]" id="project_media_text" rows="4" cols="50" required>project_media_text project_media_text project_media_text</textarea>
        </div>
        <button type="button" onclick="deleteField(this)">Delete Media</button> 
    `;

    // Append the hole thing to the main container
    mediaContainer.insertBefore(newMediaWrapper, newMediaBtn);
});

