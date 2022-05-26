<div class="tickets-container__block">
    <div class="tickets-container__block__collapsible">
        <div class="tickets-container__block__collapsible__tickets_text">
            <p>Tickets</p>
        </div>
        <div class="tickets-container__block__collapsible__name">
            <p><?php echo $tickets_block_id; ?>. Filmblock</p>
        </div>
        <div class="tickets-container__block__collapsible__time">
            <p><?php echo $tickets_block_time; ?></p>
        </div>
    </div>
    <div class="tickets-container__block__entry">
        <div class="tickets-container__block__entry__form">
            <form action="tickets.php" method="post" id="tickets-form-<?php echo $tickets_block_id; ?>">
                <div class="tickets-container__block__entry__form__name">
                    <label for="tickets__entry_name">
                        <p>Name</p>
                    </label>
                    <input type="text" name="tickets_entry_name" id="tickets_entry_name" placeholder="Name">
                    <input type="text" name="tickets_entry_name" id="tickets_entry_vorname" placeholder="Vorname">
                </div>
                <div class="tickets-container__block__entry__form__amount">
                    <label for="tickets_entry_amount">
                        <p>Anzahl</p>
                    </label>
                    <input type="number" name="tickets_block_entry_amount" id="tickets_entry_amount" min="1" max="10"
                        value="1">
                </div>
            </form>
        </div>

        <div class="tickets-container__block__entry__details">
            <h3 class="tickets-container__block__entry__details__heading">
                Ticket
                <br>
                <span
                    class="tickets-container__block__entry__details__heading__filmblock"><?php echo $tickets_block_id; ?>.
                    Filmblock</span>

            </h3>
            <p class="tickets-container__block__entry__details__text">
                Sie erhalten ein PDF Ticket, das bei Einlass vorgewiesen werden muss. Freie Platzwahl.
            </p>
            <button type="submit" class="tickets-container__block__entry__details__button"
                form="tickets-form-<?php echo $tickets_block_id; ?>">Reservieren
            </button>
        </div>
    </div>
</div>