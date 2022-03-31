<?php
if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" initial-scale=1.0">
        <title>SHOPAWAY-Your Own Shoping Space. Create Your Own Style at Most Affordable Prices!</title>
        <link rel="stylesheet" href="index.css">
        <script defer src="index.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto+Slab:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <div class="left"><h1 class="header-logo"><a class="header-logo" href="index_.php">SHOPAWAY</a></h1></div>
                <div class="right">
                    <nav>
                        <ul class="nav-list">
                            <li class="nav-list-item"><a  href="categories.php">Categories</a></li>
                            <li class="nav-list-item"><a  href="about_us.php">About Us</a></li>
                            <?php
                                if(isset($_SESSION["uid"]))
                                {
                                    if($_SESSION["role"] == "User")
                                    {
                                        echo '<li class="nav-list-item"><a  href="profile.php">Profile</a></li>';
                                        echo '<li class="nav-list-item"><a  href="includes/logout.php">Log Out</a></li>';
                                    }
                                    elseif($_SESSION["role"] == "Seller")
                                    {
                                        echo '<li class="nav-list-item"><a  href="profile.php">Profile</a></li>';
                                        echo '<li class="nav-list-item"><a  href="addProduct.php">Add Product</a></li>';
                                        echo '<li class="nav-list-item"><a  href="includes/logout.php">Log Out</a></li>';
                                    }
                                }
                                else
                                {
                                    echo '<li class="nav-list-item"><a  href="sign_up.php">Sign Up</a></li>';
                                    echo '<li class="nav-list-item"><a  href="log_in.php">Log In</a></li>';
                                }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>