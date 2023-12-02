<?php

    session_start();

    if(!isset($_SESSION["isAuth"]) || $_SESSION["isAuth"] != true) {
        header("Location: index.php?auth=error");
    }

    $logo = "./assets/images/logo.png";
    $style = "./assets/styles.css";
    
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
                                <img src="./assets/images/form_open_tickets.png" width="70" height="70">
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <img src="./assets/images/form_consult_tickets.png" width="70" height="70">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>