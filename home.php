<?php

    $index = "./index.php";
    $logo = "./assets/images/logo.png";
    $style = "./assets/styles.css";
    $logout = "./utils/logout.php";

    include_once("./utils/validate-access.php");
    
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once("./includes/head.php"); ?>
    
<body>

    <?php include_once("./includes/nav.php"); ?>

    <div class="container">    
        <div class="row">

            <div class="card-home">
                <div class="card">
                    <div class="card-header">
                        Menu
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="./tickets/open.php">
                                    <img src="./assets/images/form_open_tickets.png" width="70" height="70">
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="./tickets/consult.php">
                                    <img src="./assets/images/form_consult_tickets.png" width="70" height="70">
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