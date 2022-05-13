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
                <div class="program-container__table__entry__slots__item__link">
                    <a href="<?php echo $item[1];?>"><?php echo $item[0];?></a>
                    <img src="/media/icon-dropup.png" alt="arrow to another link">
                </div>
            <?php 
            }
        }
        ?>
        
    </div>
</div>