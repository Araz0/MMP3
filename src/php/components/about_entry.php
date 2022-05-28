<div class="about-container__block about-container__block-<?php echo $bg_dir; ?>">
    <div class="about-container__block__media about-container__block-<?php echo $bg_dir; ?>__media">
        <img loading=lazy src="<?php echo $person_videolink; ?>" alt="Portrait of <?php echo $person_name; ?>">
    </div>

    <div class="about-container__block__details about-container__block-<?php echo $bg_dir; ?>__details">
        <div class="about-container__block__details__name">
            <p><?php echo $person_name; ?></p>
        </div>
        <div class="about-container__block__details__role">
            <p><?php echo $person_role; ?></p>
        </div>
    </div>
    <div class="about-container__block__filler about-container__block-<?php echo $bg_dir; ?>__filler">
        <?php
        $popup_title = "Instagram";
        $popup_message = $insta_handle;
        include 'components/popup.php';
        ?>

    </div>
</div>