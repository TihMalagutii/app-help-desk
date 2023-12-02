<?php

    $logo = "./assets/images/logo.png";
    $style = "./assets/styles.css";
    
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once("./includes/head.php"); ?>

<body>

    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">
                <img src="<?= $logo ?>" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                App Help Desk
            </a>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">

            <div class="card-login">
            
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">

                    <?php if(isset($_GET["login"]) && $_GET["login"] == "error") { ?>
                        
                        <div class='alert alert-danger' role='alert'>
                            Invalid username or password
                        </div>

                    <?php } ?>

                    <?php if(isset($_GET["auth"]) && $_GET["auth"] == "error") { ?>
                        
                        <div class='alert alert-danger' role='alert'>
                            Please log in before visiting the page
                        </div>

                    <?php } ?>

                    <form action="./utils/validate-login.php" method="POST">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group mt-3">
                            <input name="password" type="password" class="form-control" placeholder="Password">
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