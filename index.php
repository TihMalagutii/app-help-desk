<?php
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

            <div class="card-login">
            
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <button class="btn btn-md btn-info mt-3" type="submit">Login</button>
                    </form>
                </div>
            </div>

            </div>

        </div>
    </div>

</body>
</html>