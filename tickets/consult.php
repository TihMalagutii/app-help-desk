<?php

    $index = "../index.php";
    $logo = "../assets/images/logo.png";
    $style = "../assets/styles.css";
    $logout = "../utils/logout.php";

    include_once("../utils/validate-access.php");

    $tickets = [];

    try {
        $databasePath = "../utils/tickets.db";
        $pdo = new PDO("sqlite:" . $databasePath);
        $query = "SELECT * FROM tickets";
        $statement = $pdo->query($query);
        $tickets = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once("../includes/head.php"); ?>

<body>

    <?php include_once("../includes/nav.php"); ?>

    <div class="container">
        <div class="row">

            <div class="card-consult-ticket">

                <div class="card">

                    <div class="card-header">
                        Ticket Consultation
                    </div>

                    <div class="card-body">
                        
                        <?php if(!empty($tickets)) { foreach( $tickets as $ticket ){ ?>

                            <div class="card mb-3 bg-light">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $ticket['title']; ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $ticket['category']; ?></h6>
                                    <p class="card-text"><?php echo $ticket['description']; ?></p>
                                </div>
                            </div>

                        <?php } } else { ?>

                            <div class="card mb-3 bg-light">
                                <div class="card-body">
                                    <h2 class="card-text">0 Tickets</h2>
                                </div>
                            </div>

                        <?php } ?>

                        <div class="row mt-5">
                            <div class="col-6">
                                <a href="../home.php" class="btn btn-lg btn-warning btn-block">
                                    Back
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</body>

</html>