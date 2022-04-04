<?php 
    require_once 'includes/header.php';
    require_once 'includes/dbconn.php';
    require_once 'includes/date_time.php';
    require_once 'includes/ipadd.php';
?>

    <div class="display">
            <?php
            $q= "SELECT DISTINCT `category` FROM `products`";
            $rs = mysqli_query($con,$q);
            while ($row = mysqli_fetch_array($rs))
            {
                ?>
                <div class="form-category">
                    <h2 class="form-category" style="margin:60px 0 70px 0;font-family: 'Nunito', sans-serif;"><?php echo $row['category'];?></h2>
                    <?php
                    $temp = $row['category'];
                    $q = "SELECT DISTINCT sub_category FROM products WHERE category = '$temp';";
                    $res=mysqli_query($con,$q);
                    while ($row = mysqli_fetch_array($res))
                    {
                        ?>
                        <h4><?php echo $row['sub_category']."   ".$temp;?></h4>
                        <div class="form-sub-category">
                            <?php
                            $subtemp = $row['sub_category'];
                            $q = "SELECT DISTINCT * FROM products WHERE category = '$temp' AND sub_category = '$subtemp' LIMIT 8;";
                            $result=mysqli_query($con,$q);
                            while ($row = mysqli_fetch_array($result))
                            {
                                
                                ?>
                                    <div class="form-product">
                                        <form action="products.php" method="post">
                                                <div class="product-image">
                                                <button style="background-color:#fff;border:0;box-shadow:none;height:auto;width:95%;height:auto;"><a><img src='<?php echo $row['image']; ?>' alt="product image" style="width:90%;"></a></button>
                                                </div>
                                                <div class="form product-data">
                                                    <input type="text" value=<?= $row['product_id']?> style="display:none;" name="pro_id">
                                                    <button style="color:#000;background-color:#fff;border:0;box-shadow:none;width:150px;font-size:14px;"><div class="product-name"><?php echo $row['product_name']?></div></button>
                                                    <button style="color:#000;background-color:#fff;border:0;box-shadow:none;margin:10px auto 0 auto;font-size:14px"><?php echo $row['price']." ₹"?></button>
                                                </div>
                                        </form>
                                    </div>
                                <?php
                                echo "<br><br><br>";
                            }
                            ?>
                            <div class="form form-product-more" style="display:flex;width:auto;padding:10px;height:auto;text-align:center;">           
                                <form action="categories.php" method="post" class="category-redirect" style="width:auto;margin:auto;text-align:center;">
                                    <input type="text"  value=<?php echo $temp;?> style="display:none;" name ="cat">
                                        <input type="text"  value=<?php echo $subtemp;?> style="display:none;" name = "subcat">
                                    <button class="more_sub_cat" style="font-size:19px;text-decoration:underline;border:none;width: 150px;margin:10px ;color:#000;background-color:#fff;box-shadow:none;">See more</button>
                                </form>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            
?>
    </div>
    <?php
        require_once 'includes/footer.php';
    ?>
