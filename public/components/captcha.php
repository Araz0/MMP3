<div class="captcha-container">
    <div class="captcha-header captcha-row-spacebetween">
        <span>Captcha</span>
        <button onclick="closeCaptchaOnClick(this)">X</button>
    </div>
    <div class="captcha-message">
        <p><?php echo $captcha_message; ?></p>
    </div>
    <div class="images-Container">
        <div class="images">
            <input type="checkbox" id="bx1" name="bx1" value="bx1">
            <label for="bx1"></label>
            <input type="checkbox" id="bx2" name="bx2" value="bx2">
            <label for="bx2"></label>
            <input type="checkbox" id="bx3" name="bx3" value="bx3">
            <label for="bx3"></label>
            <input type="checkbox" id="bx4" name="bx4" value="bx4">
            <label for="bx4"></label>
            <input type="checkbox" id="bx5" name="bx5" value="bx5">
            <label for="bx5"></label>
            <input type="checkbox" id="bx6" name="bx6" value="bx6">
            <label for="bx6"></label>
            <input type="checkbox" id="bx7" name="bx7" value="bx7">
            <label for="bx7"></label>
            <input type="checkbox" id="bx8" name="bx8" value="bx8">
            <label for="bx8"></label>
            <input type="checkbox" id="bx9" name="bx9" value="bx9">
            <label for="bx9"></label>
        </div>
        <img src="<?php echo $captcha_image_path; ?>" alt="Captcha image">
    </div>
    <div class="captcha-footer captcha-row-spacebetween">
        <label class="custom-checkbox" for="notarobot">
            <input type="checkbox" name="notarobot" id="notarobot">I'm not a robot</input>
            
        </label>
        <button onclick="closeCaptchaOnClick(this)">verify</button>
    </div>
    
</div>