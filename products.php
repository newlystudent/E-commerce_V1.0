<?php 
    require_once 'includes/header.php';
    require_once 'includes/dbconn.php';
    require_once 'includes/func.php'; 
    
    $productid =  $_POST["pro_id"];
    if(isset($productid)!=1)
    {
        header('location:index_.php?error=no%product%selected');
    }
    else
    {
        $q = "SELECT * FROM `products` WHERE product_id='$productid'";
        $res = mysqli_query($con,$q);
        $row = mysqli_fetch_array($res);
        ?>
    <div class="product-body">
        <div class="prod-img">
            <img src='<?php echo $row['image']; ?>' alt="product image" style="height:100%;width:100%;object-fit:cover;" />
        </div>
        <div class="prod-data" style="width:90%;">
            <h1><?php echo $row['product_name'] ?></h1>
            <hr>
            <div class="prod-details">
            <h2>Price : <?php echo $row['price']; ?></h2>
            <h2>Discount : <?php echo $row['discount']."%"; ?></h2>
            <h2>Items-left : <?php echo $row['stock']." only"; ?></h2>
            </div>
            <h4><form action="buy.php" method="post"><input type="text" value="<?php echo $productid?>" style="display:none;" name='product_id' /><button>BUY NOW</button></form></h4>
        </div>
    </div>
    <?php
    }
    ?>
    <?php
        require_once 'includes/footer.php';
    ?>
    
    

