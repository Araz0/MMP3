<div class="program-container__table__entry-3">
    <div class="program-container__table__entry__time">
        <h3><?php echo $program_block_entry_time;?></h3>
    </div>
    <div class="program-container__table__entry__title">
        <h3><?php echo $program_block_entry_title;?></h3>
    </div>
    <span class="program-container__table__entry__span"></span>
    <div class="program-container__table__entry__desc">
        <p><?php echo $program_block_entry_text;?></p>
    </div>

    <div class="program-container__table__entry__btns">
        <?php 
        if (isset($entry_items)) {
            foreach ($entry_items as $ei => $item) {
            ?>
                <a class="keep-label" href="<?php echo $item[1];?>">
                    <div class="program-container__table__entry__slots__item__link">
                        <p class="keep-label"><?php echo $item[0];?></p>
                        <img src="/media/icon-dropup.png" alt="arrow to another link">
                    </div>
                </a>
            <?php 
            }
        }
        ?>
        
    </div>
</div>