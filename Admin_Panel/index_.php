<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "shop_away";
    $con = mysqli_connect($host,$user,$pass,$db);
    $test = "Connecting Successfully";
    if (mysqli_connect_errno()) {
?>
        <h1 style="margin:auto;text-align:center;">Connection Failed!! </h1>
<?php echo '' . mysqli_connect_error();
        exit();
    }                        
?>
<!DOCTYPE html> 
<head>
    <title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<script src="index.js"></script>
</head>
<body>


    
    <div class="wrapper">
        <div class="head">
            <h1>Admin Panel</h1>
            <span style="font-size:30px;cursor:pointer;padding:10px;" id="burg" onclick="openNav()">&#9776;</span>
        </div>
        <div class="body">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#users">Users</a>
                <a href="#sellers">Sellers</a>
                <a href="#products">Products</a>
            </div>

            <div id="main">
                <h1 id="users">USERS</h1>
                <div class="info" id="users">
                    <div class="data-table" style="padding:20px 0">
                        <?php 
                            $q="SELECT * FROM `accounts` WHERE role='User'";
                            $res = mysqli_query($con,$q);
                            ?>
                            
                            <div class="row" style="margin:-30px 0 10px 0;position:sticky;top:0px;background-color:#000;color:#fff;padding:7px 2px;z-index:1;">
                                <div class="row-data" style="font-size: 24px;" >User_id</div>
                                <div class="row-data" style="font-size: 24px;" >User_Name</div>
                                <div class="row-data" style="font-size: 24px;" >Email_Address</div>
                                <div class="row-data" style="font-size: 24px;" >Address</div>
                                <div class="row-data" style="font-size: 24px;" >Contact_No</div>
                                <div class="row-data" style="font-size: 24px;" >Date Account Created</div>
                                <div class="row-data" style="font-size: 24px;" >Time</div>
                                <div class="row-data" style="font-size: 24px;" >Ip Address</div>
                            </div>
                            <?php
                            while($row = mysqli_fetch_array($res))
                            {
                            ?>
                            <div class="row">
                                <div class="row-data"><?php echo  $row['user_id']; ?></div>
                                <div class="row-data"><?php echo $row['username']; ?></div>
                                <div class="row-data"><?php echo $row['email']; ?></div>
                                <div class="row-data"><?php echo $row['address']; ?></div>
                                <div class="row-data"><?php echo $row['contact_no']; ?></div>
                                <div class="row-data"><?php echo $row['date']; ?></div>
                                <div class="row-data"><?php echo $row['time']; ?></div>
                                <div class="row-data"><?php echo $row['ip']; ?></div>
                            </div>
                            <?php
                            }
                        ?>
                    </div>
                </div>
                <h1 id="sellers">SELLERS</h1>
                <div class="info" id="sellers">
                    <div class="data-table" style="padding:20px 0">
                        <?php 
                            $q = "SELECT DISTINCT seller_id FROM `products`";
                            $res = mysqli_query($con,$q);
                            $num = mysqli_num_rows($res);
                            $q="SELECT * FROM `accounts` WHERE role='Seller'";
                            $res = mysqli_query($con,$q);
                            ?>
                            
                            <div class="row" style="margin:-30px 0 10px 0;position:sticky;top:0px;background-color:#000;color:#fff;padding:7px 2px;">
                                <div class="row-data" style="font-size: 24px;" >Seller Id</div>
                                <div class="row-data" style="font-size: 24px;" >Seller Name</div>
                                <div class="row-data" style="font-size: 24px;" >Email Address</div>
                                <div class="row-data" style="font-size: 24px;" >Address</div>
                                <div class="row-data" style="font-size: 24px;" >Contact No</div>
                                <div class="row-data" style="font-size: 24px;" >Date Account Created</div>
                                <div class="row-data" style="font-size: 24px;" >Time</div>
                                <div class="row-data" style="font-size: 24px;" >Ip Address</div>
                            </div>
                            <?php
                            while($row = mysqli_fetch_array($res))
                            {
                            ?>
                            <div class="row">
                                <div class="row-data"><?php echo  $row['user_id']; ?></div>
                                <div class="row-data"><?php echo $row['username']; ?></div>
                                <div class="row-data"><?php echo $row['email']; ?></div>
                                <div class="row-data"><?php echo $row['address']; ?></div>
                                <div class="row-data"><?php echo $row['contact_no']; ?></div>
                                <div class="row-data"><?php echo $row['date']; ?></div>
                                <div class="row-data"><?php echo $row['time']; ?></div>
                                <div class="row-data"><?php echo $row['ip']; ?></div>
                            </div>
                            <?php
                            }
                        ?>
                    </div>
                </div>
                <h1 id="products">PRODUCTS</h1>
                <div class="info" id="products">
                    <div class="data-table" style="padding:20px 0">
                        <?php 
                            $q="SELECT * FROM `products`";
                            $res = mysqli_query($con,$q);
                            ?>
                            
                            <div class="row" style="margin:-30px 0 10px 0;position:sticky;top:0px;background-color:#000;color:#fff;padding:7px 2px;">
                                <div class="row-data" style="font-size: 24px;" >Product Name</div>
                                <div class="row-data" style="font-size: 24px;" >Category</div>
                                <div class="row-data" style="font-size: 24px;" >Sub category</div>
                                <div class="row-data" style="font-size: 24px;" >Brand</div>
                                <div class="row-data" style="font-size: 24px;" >Price</div>
                                <div class="row-data" style="font-size: 24px;" >Discount</div>
                                <div class="row-data" style="font-size: 24px;" >Seller ID</div>
                                <div class="row-data" style="font-size: 24px;" >Ip Address</div>
                                <div class="row-data" style="font-size: 24px;" >Date</div>
                                <div class="row-data" style="font-size: 24px;" >Time</div>
                                <div class="row-data" style="font-size: 24px;" >Stock</div>
                            </div>
                            <?php
                            while($row = mysqli_fetch_array($res))
                            {
                            ?>
                            <div class="row">
                                <div class="row-data"><?php echo  $row['product_name']; ?></div>
                                <div class="row-data"><?php echo $row['category']; ?></div>
                                <div class="row-data"><?php echo $row['sub_category']; ?></div>
                                <div class="row-data"><?php echo $row['brand']; ?></div>
                                <div class="row-data"><?php echo $row['price']; ?></div>
                                <div class="row-data"><?php echo $row['discount']."%"; ?></div>
                                <div class="row-data"><?php echo $row['seller_id']; ?></div>
                                <div class="row-data"><?php echo $row['ip']; ?></div>
                                <div class="row-data"><?php echo $row['date']; ?></div>
                                <div class="row-data"><?php echo $row['time']; ?></div>
                                <div class="row-data"><?php echo $row['stock']; ?></div>
                            </div>
                            <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
            
    </div>


</body>
<div class="footer">
                    <h1>
                        ADMINPaneL
                    </h1>
                    <h5>© SHOPAWAY since 2022.</h5>
            </div>

</html>
</html> 