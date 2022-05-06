<div class="captcha-container" xH="<?php echo $captcha_xH; ?>" xV="<?php echo $captcha_xV; ?>">
    <div class="captcha-header captcha-row-spacebetween">
        <span>Captcha</span>
        <button onclick="closeCaptchaOnClick(this)"><img src="media/icon-x-close.png" alt="close button for the captcha window"></button>
    </div>
    <div class="captcha-message">
        <p><?php echo $captcha_message; ?></p>
    </div>
    <div class="images-Container">
        <div class="images">
            <?php $cbid = rand();?>
            <input type="checkbox" id="<?php echo $cbid; ?>1" name="<?php echo $cbid; ?>1" value="<?php echo $cbid; ?>1">
            <label for="<?php echo $cbid; ?>1"></label>
            <input type="checkbox" id="<?php echo $cbid; ?>2" name="<?php echo $cbid; ?>2" value="<?php echo $cbid; ?>2">
            <label for="<?php echo $cbid; ?>2"></label>
            <input type="checkbox" id="<?php echo $cbid; ?>3" name="<?php echo $cbid; ?>3" value="<?php echo $cbid; ?>3">
            <label for="<?php echo $cbid; ?>3"></label>
            <input type="checkbox" id="<?php echo $cbid; ?>4" name="<?php echo $cbid; ?>4" value="<?php echo $cbid; ?>4">
            <label for="<?php echo $cbid; ?>4"></label>
            <input type="checkbox" id="<?php echo $cbid; ?>5" name="<?php echo $cbid; ?>5" value="<?php echo $cbid; ?>5">
            <label for="<?php echo $cbid; ?>5"></label>
            <input type="checkbox" id="<?php echo $cbid; ?>6" name="<?php echo $cbid; ?>6" value="<?php echo $cbid; ?>6">
            <label for="<?php echo $cbid; ?>6"></label>
            <input type="checkbox" id="<?php echo $cbid; ?>7" name="<?php echo $cbid; ?>7" value="<?php echo $cbid; ?>7">
            <label for="<?php echo $cbid; ?>7"></label>
            <input type="checkbox" id="<?php echo $cbid; ?>8" name="<?php echo $cbid; ?>8" value="<?php echo $cbid; ?>8">
            <label for="<?php echo $cbid; ?>8"></label>
            <input type="checkbox" id="<?php echo $cbid; ?>9" name="<?php echo $cbid; ?>9" value="<?php echo $cbid; ?>9">
            <label for="<?php echo $cbid; ?>9"></label>
        </div>
        <img src="<?php echo $captcha_image_path; ?>" alt="Captcha image">
    </div>
    <div class="captcha-footer captcha-row-spacebetween">
        <label class="custom-checkbox" for="notarobot">
            <input type="checkbox" name="notarobot" id="notarobot">I'm not a robot</input>
            
        </label>
        <button class="captcha-footer__button" onclick="closeCaptchaOnClick(this)">verify</button>
    </div>
    
</div>