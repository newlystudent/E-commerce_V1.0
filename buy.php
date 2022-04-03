<?php 
    require_once 'includes/header.php';
    require_once 'includes/dbconn.php';
    require_once 'includes/ipadd.php';
    require_once 'includes/date_time.php';

    if(isset($_SESSION["uid"]))
    {
        $userid = $_SESSION["uid"];
        $productid =$_POST['product_id'];

        $q="SELECT product_name FROM `products` WHERE product_id='$productid'";
        $res = mysqli_query($con,$q);
        $row = mysqli_fetch_array($res);

        $productname = $row['product_name'];

        $q = "INSERT INTO `purchase` (`product_id`, `product_name`, `buyer_id`, `ip`, `date`, `time`) VALUES ('$productid', '$productname', '$userid', '$ip', '$date', '$time');";
        $res = mysqli_query($con,$q);
        ?><div class="form-1" style="text-align: center;color:#000;font-family: 'Roboto Slab', sans-serif;margin:50px auto 50px auto;">
                <h2 style="padding:1.8%;text-align: center;font-size:35px;margin-top:30px;">
                    purchase Successfull!
                </h2>
                    <button style="margin-bottom: 35px;"><a class="sign2log" href="index_.php">Shop More</a></button>
                </h2>
        </div>
        <?php
    }
    else
    {
        header('location:log_in.php?error=log%in%before%purchaase');
    }
    

?>
<div class="footer" style="position: absolute;">
        <h1>
            SHOPAWAY
        </h1>
    <h5>© SHOPAWAY since 2022.</h5>
</div>