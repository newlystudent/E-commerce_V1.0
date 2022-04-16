<?php
if(!isset($_SESSION["uid"]))
{
    session_start();
}

?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>SHOPAWAY-Your Own Shoping Space. Create Your Own Style at Most Affordable Prices!</title>
        <link rel="stylesheet" href="index.css">
        <script defer src="index.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Poppins:wght@100;200&family=Roboto+Mono&family=Roboto+Slab:wght@500&family=Roboto:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <div class="left"><h1 class="header-logo"><a class="header-logo" href="index.php">SHOPAWAY</a></h1>
            </div>
                <div class="right">
                    <nav>
                        <ul class="nav-list">
                            <?php
                                if(isset($_SESSION["uid"]))
                                {
                                    if($_SESSION["role"] == "User")
                                    {
                                        ?>
                                            <li class="nav-list-item"><a  href="profile.php">Profile</a></li>
                                            <li class="nav-list-item"><a  href="about_us.php">About Us</a></li>
                                            <li class="nav-list-item"><a  href="includes/logout.php">Log Out</a></li>
                                        <?php
                                      }
                                    elseif($_SESSION["role"] == "Seller")
                                    {
                                        ?>    
                                            <li class="nav-list-item"><a  href="profile.php">Profile</a></li>
                                            <li class="nav-list-item"><a  href="addProductform.php">Add Product</a></li>
                                            <li class="nav-list-item"><a  href="about_us.php">About Us</a></li>
                                            <li class="nav-list-item"><a  href="includes/logout.php">Log Out</a></li>
                                        <?php
                                    }
                                }
                                else
                                {   
                                        ?>
                                        <li class="nav-list-item"><a  href="about_us.php">About Us</a></li>
                                        <li class="nav-list-item"><a  href="sign_up.php">Sign Up</a></li>
                                        <li class="nav-list-item"><a  href="log_in.php">Log In</a></li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>