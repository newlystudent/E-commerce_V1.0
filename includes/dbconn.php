<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "shop_away";
    $res = mysqli_connect($host,$user,$pass,$db);
    $test = "Connecting Successfully";
    if (mysqli_connect_errno()) {
        echo '' 
        ?>
        <h1 style="margin:auto;text-align:center;">Connection Failed!! </h1>
        <?php '' . mysqli_connect_error();
        exit();
      }
?>