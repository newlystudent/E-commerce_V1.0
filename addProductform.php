<?php
    require_once 'includes/header.php';
    require_once 'includes/dbconn.php';
?>
<h1 style="font-size: 39px;margin-top:25px;margin-bottom:45px;font-family: 'Nunito', sans-serif;">Upload Your Product Here!</h1>
<form class="form-1" action="addProduct.php" enctype="multipart/form-data" method="post">

    <div class="form">
        <h3 style="font-family: 'Roboto Mono', monospace;margin: 0 auto;text-decoration:none;">Select image of your product here</h3>
        <input style="margin-bottom:25px;" type="file" name="file" required>
    </div>

    
    <input type="text" name="pr_name" placeholder="Product Name" required>
    <input type="text" name="pr_category" placeholder="Product Category" required>
    <input type="text" name="pr_sub_category" placeholder="Product Sub-category" required>
    <input type="text" name="pr_brand" placeholder="Product Brand" required>
    <input type="text" name="pr_price" placeholder="Product Price" required>
    <input type="text" name="pr_disc" placeholder="Product Discount" required>
    <input type="text" name="pr_stock" placeholder="Product Stock" required>
    <button type="submit" name="upload">Upload</button>

</form>
<?php
        require_once 'includes/footer.php';
    ?>