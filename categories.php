<?php 
    require_once 'includes/header.php';
    require_once 'includes/dbconn.php';
    require_once 'includes/func.php'; 
    
    $category =  $_POST["cat"];
    $sub_category =  $_POST["subcat"];



    $arr = [$category,$sub_category];
    $count = emptyCheck($arr);
    if($count == 0)
    {
        header('location:index_.php?error=no%category%selected');
    }
    else
    {
        echo "<h1 style='margin-top:40px;text-decoration:none;font-size:45px;'>$sub_category    $category</h1>";
        $q = "SELECT DISTINCT * FROM products WHERE category = '$category' AND sub_category = '$sub_category';";
                            $result=mysqli_query($con,$q);
                            ?>
                            <div class="form-sub-category">
                                <?php
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
                                                    <button style="color:#000;background-color:#fff;border:0;box-shadow:none;width:245px;font-size:18px;"><div class="product-name"><?php echo $row['product_name']?></div></button>
                                                    <button style="color:#000;background-color:#fff;border:0;box-shadow:none;margin:10px auto 0 auto;"><?php echo $row['price']." ₹"?></button>
                                                </div>
                                            </form>
                                        </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
    }
?>
<?php
        require_once 'includes/footer.php';
?>