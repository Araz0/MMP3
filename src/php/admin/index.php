
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="de">

<?php 
    $pagetitle = "Admin Page"; 
    require '../functions.php';
    require "../components/head.php";

    $user = getUser($_SESSION['fhsUser']);
    $user_id = $user->id;
    $user_projects = new stdClass();
    if(in_array($user->username, $admins)){
        $user_projects = getAllProjects();
        $isAdmin = true;
    }else{
        $user_projects = getUserProjectbyUserId($user_id);
    }
    if (!isset($user_id)) {
        header('Location: /401.php');
    }

    if (isset($_POST['checkin_Ticket'])) {
        checkInTicket($_POST['ticket_id']);
        //echo $_POST['ticket_id'];
    }

    $all_tickets = getTickets();
    $block1tickets = array(); $b1count = 0;
    $block2tickets = array(); $b2count = 0;
    $block3tickets = array(); $b3count = 0;
    $block4tickets = array(); $b4count = 0;
    $block5tickets = array(); $b5count = 0;
    foreach($all_tickets as $i => $ticket){
        if ($ticket->film_block == 1) {
            array_push($block1tickets, $ticket);
            $b1count = $b1count + $ticket->amount;
        }elseif($ticket->film_block == 2) {
            array_push($block2tickets, $ticket);
            $b2count = $b2count + $ticket->amount;
        }elseif($ticket->film_block == 3) {
            array_push($block3tickets, $ticket);
            $b3count = $b3count + $ticket->amount;
        }elseif($ticket->film_block == 4) {
            array_push($block4tickets, $ticket);
            $b4count = $b4count + $ticket->amount;
        }elseif($ticket->film_block == 5) {
            array_push($block5tickets, $ticket);
            $b5count = $b5count + $ticket->amount;
        }
    }

?>

<body>
    <?php require "../components/nav.php"; ?>
    <main>
        <div class="tickets-search__container">
            <h1>Tickets Check-In</h1>
            <input type="search" oninput="filterTickets(this.value)" placeholder="Search In tickets here">
        </div>
        <div class="main-tickets_container">
            <section class="section-tickets_block">
                <div class="section-tickets_block__header">
                    <h2>1.Filmblock</h2>
                    <span><?php echo Count($block1tickets); ?> Tickets - <?php echo $b1count; ?> Seats</span>
                </div>
                <?php 
                    foreach($block1tickets as $i => $ticket) {?>
                        <form class="ticket__continer<?php echo $ticket->checked_in == true ? ' checked-ticket ' : '';?>" action="" method="post">
                            <input type="hidden" name="ticket_id" value="<?php echo $ticket->id; ?>">
                            <h3 class="ticket__continer__holder">#<?php echo $ticket->id; ?> - <?php echo $ticket->last_name; ?> <?php echo $ticket->first_name; ?></h3>
                            <span class="ticket__continer__block"><?php echo $ticket->t_time; ?> - <?php echo $ticket->amount; ?>x seats</span>
                            <button type="submit" name="checkin_Ticket">Check-In</button>
                        </form>
                    <?php }
                ?>
            </section>
            <section class="section-tickets_block">
                <div class="section-tickets_block__header">
                    <h2>2.Filmblock</h2>
                    <span><?php echo Count($block2tickets); ?> Tickets - <?php echo $b2count; ?> Seats</span>
                </div>
                <?php 
                    foreach($block2tickets as $i => $ticket) {?>
                        <form class="ticket__continer" action="" method="post">
                            <input type="hidden" name="ticket_id" value="<?php echo $ticket->id; ?>">
                            <h3 class="ticket__continer__holder">#<?php echo $ticket->id; ?> - <?php echo $ticket->last_name; ?> <?php echo $ticket->first_name; ?></h3>
                            <span class="ticket__continer__block"><?php echo $ticket->t_time; ?> - <?php echo $ticket->amount; ?>x seats</span>
                            <button type="submit" name="checkin_Ticket">Check-In</button>
                        </form>
                    <?php }
                ?>
            </section>
            <section class="section-tickets_block">
                <div class="section-tickets_block__header">
                    <h2>3.Filmblock</h2>
                    <span><?php echo Count($block3tickets); ?> Tickets - <?php echo $b3count; ?> Seats</span>
                </div>
                <?php 
                    foreach($block3tickets as $i => $ticket) {?>
                        <form class="ticket__continer" action="" method="post">
                            <input type="hidden" name="ticket_id" value="<?php echo $ticket->id; ?>">
                            <h3 class="ticket__continer__holder">#<?php echo $ticket->id; ?> - <?php echo $ticket->last_name; ?> <?php echo $ticket->first_name; ?></h3>
                            <span class="ticket__continer__block"><?php echo $ticket->t_time; ?> - <?php echo $ticket->amount; ?>x seats</span>
                            <button type="submit" name="checkin_Ticket">Check-In</button>
                        </form>
                    <?php }
                ?>
            </section>
            <section class="section-tickets_block">
                <div class="section-tickets_block__header">
                    <h2>4.Filmblock</h2>
                    <span><?php echo Count($block4tickets); ?> Tickets - <?php echo $b4count; ?> Seats</span>
                </div>
                <?php 
                    foreach($block4tickets as $i => $ticket) {?>
                        <form class="ticket__continer" action="" method="post">
                            <input type="hidden" name="ticket_id" value="<?php echo $ticket->id; ?>">
                            <h3 class="ticket__continer__holder">#<?php echo $ticket->id; ?> - <?php echo $ticket->last_name; ?> <?php echo $ticket->first_name; ?></h3>
                            <span class="ticket__continer__block"><?php echo $ticket->t_time; ?> - <?php echo $ticket->amount; ?>x seats</span>
                            <button type="submit" name="checkin_Ticket">Check-In</button>
                        </form>
                    <?php }
                ?>
            </section>
            <section class="section-tickets_block">
                <div class="section-tickets_block__header">
                    <h2>5.Filmblock</h2>
                    <span><?php echo Count($block5tickets); ?> Tickets - <?php echo $b5count; ?> Seats</span>
                </div>

                <?php 
                    foreach($block5tickets as $i => $ticket) {?>
                        <form class="ticket__continer" action="" method="post">
                            <input type="hidden" name="ticket_id" value="<?php echo $ticket->id; ?>">
                            <h3 class="ticket__continer__holder">#<?php echo $ticket->id; ?> - <?php echo $ticket->last_name; ?> <?php echo $ticket->first_name; ?></h3>
                            <span class="ticket__continer__block"><?php echo $ticket->t_time; ?> - <?php echo $ticket->amount; ?>x seats</span>
                            <button type="submit" name="checkin_Ticket">Check-In</button>
                        </form>
                    <?php }
                ?>
            </section>
        </div>
    </main>
    <script>
        function filterTickets(input){
            console.log(input);
            let tickets = document.getElementsByClassName("ticket__continer");
            for (let i = 0; i < tickets.length; i++) {
                if (tickets[i].innerHTML.toLowerCase().includes(input.toLowerCase()) == false) {
                    tickets[i].classList.add("hide-ticket");
                }else{
                    tickets[i].classList.remove("hide-ticket");
                }
            }
        }
    </script>
</body>

</html>