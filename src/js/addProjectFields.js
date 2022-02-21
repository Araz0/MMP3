function addMemberField(){

    var membersContainer = document.getElementById("project_members_container");

    var newMemberWrapper = document.createElement("div");
    newMemberWrapper.classList.add("project_member_wrapper");

    newMemberWrapper.innerHTML = `
    <div class="project_member_wrapper">
        <label for="project_members_name[]"><b>project_members</b>
            <input type="text" name="project_members_name[]" id="project_members_name" value="member name 1" required>
        </label>
        <label for="project_members_role[]"><b>project_members_role</b>
            <input type="text" name="project_members_role[]" id="project_members_role" value="member role 1" required>
        </label>
        <label for="project_members_thumbnail[]"><b>project_members_thumbnail</b>
            <input type="file" name="project_members_thumbnail[]" id="project_members_thumbnail" accept="image/*,.jpg" required>
        </label>
    </div>
    `;

    // Append the hole thing to the main container
    membersContainer.insertBefore(newMemberWrapper, document.getElementById("add_new_member_btn"));
}

document.getElementById("add_new_member_btn").addEventListener("click",function(e){
    addMemberField();
},false);

function addLinkField(){

    var linksContainer = document.getElementById("project_links_container");

    var newLinkWrapper = document.createElement("div");
    newLinkWrapper.classList.add("project_link_wrapper");

    newLinkWrapper.innerHTML = `
    <div class="project_link_wrapper">
        <label for="project_link_title[]"><b>project_link_title</b>
            <input type="text" name="project_link_title[]" id="project_link_title" value="link 1" required>
        </label>
        <label for="project_link_url[]"><b>project_link_url</b>
            <input type="text" name="project_link_url[]" id="project_link_url" value="https://www.example.com" required>
        </label> <br>
    </div>
    `;

    // Append the hole thing to the main container
    linksContainer.insertBefore(newLinkWrapper, document.getElementById("add_new_link_btn"));
}

document.getElementById("add_new_link_btn").addEventListener("click",function(e){
    addLinkField();
},false);