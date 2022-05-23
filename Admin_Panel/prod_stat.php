<?php
    require_once '../includes/dbconn.php';
    if(isset($_POST['prod']))
    {
        $product_id =  $_POST['pr_id'];
        
        //Updating approval of admin
        $query = "UPDATE `waiting_list` SET `admin_approval` = '1' WHERE `waiting_list`.`product_id` = '$product_id'";
        $res = mysqli_query($con,$query);
        
        //Fetching updated record
        $query = "SELECT * FROM `waiting_list` WHERE `product_id` = '$product_id' AND `admin_approval` = '1'";
        $res = mysqli_query($con,$query);
        $row = mysqli_fetch_array($res);
        
        //Extracting data From waiting list table
        $prname = $row['product_name'];
        $prcat = $row['category'];
        $prsubcat = $row['sub_category'];
        $pr_brand = $row['brand'];
        $filedestination = $row['image'];
        $prprice = $row['price'];
        $prdisc = $row['discount'];
        $uid = $row['seller_id'];
        $ip = $row['ip'];
        $date = $row['date'];
        $time = $row['time'];
        $prstock = $row['stock'];

        //Updating product table
        $query = "INSERT INTO `products` (`product_id`, `product_name`, `category`, `sub_category`, `brand`, `image`, `price`, `discount`,`seller_id`,`ip`,`date`,`time`,`stock`) 
        VALUES ('$product_id', ' $prname', '$prcat', '$prsubcat', '$pr_brand', '$filedestination', '$prprice','$prdisc','$uid','$ip','$date','$time','$prstock')";
        $res = mysqli_query($con,$query);
        header("location:index.php?error=product%uploaded");
    }
?>