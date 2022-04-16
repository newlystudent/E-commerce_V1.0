<?php 
    require_once 'includes/header.php';
    require_once 'includes/dbconn.php';
    require_once 'includes/ipadd.php';
    require_once 'includes/date_time.php';

    if(isset($_SESSION["uid"]))
    {
        $userid = $_SESSION["uid"];
        $productid =$_POST['product_id'];
        $_SESSION["prod_id"] = $productid;
        $q="SELECT product_name FROM `products` WHERE product_id='$productid'";
        $res = mysqli_query($con,$q);
        $row = mysqli_fetch_array($res);

        $productname = $row['product_name'];

        $q = "INSERT INTO `purchase` (`product_id`, `product_name`, `buyer_id`, `ip`, `date`, `time`) VALUES ('$productid', '$productname', '$userid', '$ip', '$date', '$time');";
        $res = mysqli_query($con,$q);
        $q = "SELECT * FROM `products` WHERE `product_id` = '$productid'";
        $res = mysqli_query($con,$q);
        $row = mysqli_fetch_array($res);
        $stock = $row['stock'];
        $stockUpdate = $stock-1;
        $q = "UPDATE `products` SET `stock` = '$stockUpdate' WHERE `product_id` = '$productid'";
        $res = mysqli_query($con,$q);
        header("location:index.php?status=purchased%successfully!");
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