<?php

    $index = "../index.php";
    $logo = "../assets/images/logo.png";
    $style = "../assets/styles.css";

    include_once("../utils/validate-access.php");
    
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

                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Ticket Title...</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Category</h6>
                                <p class="card-text">Ticket Description...</p>

                            </div>
                        </div>

                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Ticket Title...</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Category</h6>
                                <p class="card-text">Ticket Description...</p>

                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-6">
                                <button class="btn btn-lg btn-warning btn-block" type="submit">Back</button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</body>

</html>