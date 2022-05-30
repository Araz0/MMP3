<div class="program-container__map__details">
    <div class="program-container__map__details__heading">
        <h3>
            <?php echo $program_map['map_story']; ?>
        </h3>
    </div>
    <div class="program-container__map__details__description">
        <?php
        $index = 1;
        foreach ($program_map['map_locations'] as $location) {
            $index_string = $index < 10 ? '0' . $index : $index;
            print "<div class='program-container__map__details__description__block'>";
            print '<p class="program-container__map__details__block__description__index">' . $index_string . "</p>";
            print '<p class="program-container__map__details__block__description__location">' . $location . "</p>";
            print "</div>";
            $index++;
        }
        ?>
    </div>
    <div class="program-container__map__details__floor-right">
        <h3>
            <?php echo $program_map['map_story']; ?>
        </h3>
    </div>
</div>