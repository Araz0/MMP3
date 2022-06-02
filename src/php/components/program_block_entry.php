<div class="program-container__table__entry">
    <div class="program-container__table__entry__time">
        <h3><?php echo $program_block_entry_time;?></h3>
    </div>
    <div class="program-container__table__entry__title">
        <h3><?php echo $program_block_entry_title;?></h3>
    </div>
    <div class="program-container__table__entry__filler-r">
        <?php
        if ($program_block_entry_rfiller) {
            echo '<img class="filler-pixels" src="/media/px-bg-trans.png" alt="pixlated background image filler">';
        }
        ?>
    </div>
    <div class="program-container__table__entry__filler-l"></div>
    <div class="program-container__table__entry__slots">
        <?php 
        if (isset($entry_items)) {
            foreach ($entry_items as $ei => $item) {
            ?>
                <div class="program-container__table__entry__slots__item">
                    <div class="program-container__table__entry__slots__item__title">
                        <p><?php echo $item[0];?></p>
                    </div>
                    <?php if ($item[1] != "") {?>
                    <div class="program-container__table__entry__slots__item__link">
                        <a href="<?php echo $item[1];?>">mehr zum Film</a>
                        <img src="/media/icon-dropup.png" alt="arrow to another link">
                    </div>
                    <?php } ?>
                </div>
            <?php 
            }
        }
        ?>
        
    </div>
</div>