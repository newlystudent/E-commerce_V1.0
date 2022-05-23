<?php
session_start();
if(isset($_SESSION["admin_uid"]) == 1)
{
    require_once '../includes/dbconn.php';
?>
                <!DOCTYPE html> 
                <head>
                    <title>E-Commerce DWD ADMIN PANEL</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="styles.css">
                <script src="index.js"></script>
                </head>
                <body>
                    
                    <div class="wrapper">
                        <div class="head">
                            <h1>ADMIN PANEL</h1>
                            <span style="font-size:30px;cursor:pointer;padding:10px;" id="burg" onclick="openNav()">&#9776;</span>
                        </div>
                    <div class="body">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#users">Users</a>
                    <a href="#sellers">Sellers</a>
                    <a href="#products">Products</a>
                    <a href="#waiting_list">Waiting List</a>
                    <a href="#purchase">Purchase</a>
                    <a href="#users">BackToTop</a>
                    <a href="admin_logout.php">Log out</a>
                </div>
                
                <div id="main">
                <h1 style="text-decoration: underline;font-size:50px;">Welcome To DWD Admin!</h1>
                    <h1 id="users" style="padding:120px 0 30px 0;">USERS</h1>
                    <div class="info" id="users-block">
                        <div class="data-table" style="padding:20px 0">
                            <?php 
                                $q="SELECT * FROM `accounts` WHERE role='User'";
                                $res = mysqli_query($con,$q);
                                ?>
                                
                                <div class="row" style="margin:-31px 0 10px 0;position:sticky;top:0px;background-color:#000;color:#fff;padding:7px 2px;z-index:1;">
                                    <div class="row-data" style="font-size: 24px;" >User_id</div>
                                    <div class="row-data" style="font-size: 24px;" >User_Name</div>
                                    <div class="row-data" style="font-size: 24px;" >Email_Address</div>
                                    <div class="row-data" style="font-size: 24px;" >Address</div>
                                    <div class="row-data" style="font-size: 24px;" >Contact_No</div>
                                    <div class="row-data" style="font-size: 24px;" >Date Account Created</div>
                                    <div class="row-data" style="font-size: 24px;" >Time</div>
                                    <div class="row-data" style="font-size: 24px;" >Ip Address</div>
                                    <div class="row-data" style="font-size: 24px;" >Block/Unblock user</div>
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
                                    <div class="row-data-button"><form action="accnt_stat.php" method="post"><input type="text" name="uid" value="<?php echo  $row['user_id'];?>" style="display:none;" /><button name="stat"><?php if($row['active_status'] == 1){?>Block<?php }else{ ?>Unblock<?php }?></button></form></div>

                                </div>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
                    <h1 id="sellers" style="padding:120px 0 30px 0;">SELLERS</h1>
                    <div class="info" id="sellers-block">
                        <div class="data-table" style="padding:20px 0">
                            <?php 
                                $q="SELECT * FROM `accounts` WHERE role='Seller'";
                                $res = mysqli_query($con,$q);
                                ?>
                                
                                <div class="row" style="margin:-31px 0 10px 0;position:sticky;top:0px;background-color:#000;color:#fff;padding:7px 2px;">
                                    <div class="row-data" style="font-size: 24px;" >Seller Id</div>
                                    <div class="row-data" style="font-size: 24px;" >Seller Name</div>
                                    <div class="row-data" style="font-size: 24px;" >Email Address</div>
                                    <div class="row-data" style="font-size: 24px;" >Address</div>
                                    <div class="row-data" style="font-size: 24px;" >Contact No</div>
                                    <div class="row-data" style="font-size: 24px;" >Date Account Created</div>
                                    <div class="row-data" style="font-size: 24px;" >Time</div>
                                    <div class="row-data" style="font-size: 24px;" >Ip Address</div>
                                    <div class="row-data" style="font-size: 24px;" >Block/Unblock seller</div>
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
                                    <div class="row-data-button"><form action="accnt_stat.php" method="post"><input type="text" name="uid" value="<?php echo  $row['user_id'];?>" style="display:none;" /><button name="stat"><?php if($row['active_status'] == 1){?>Block<?php }else{ ?>Unblock<?php }?></button></form></div>
                                </div>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
                    <h1 id="products" style="padding:120px 0 30px 0;">PRODUCTS</h1>
                    <div class="info" id="products-block">
                        <div class="data-table" style="padding:20px 0">
                            <?php 
                                $q="SELECT * FROM `products`";
                                $res = mysqli_query($con,$q);
                                ?>
                                
                                <div class="row" style="margin:-31px 0 10px 0;position:sticky;top:0px;background-color:#000;color:#fff;padding:7px 2px;">
                                    <div class="row-data" style="font-size: 24px;" >Product Name</div>
                                    <div class="row-data" style="font-size: 24px;" >product image</div>
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
                                <div class="row" style="padding-bottom:200px;">
                                    <div class="row-data"><?php echo  $row['product_name']; ?></div>
                                    <div class="row-data"><img src="../<?php echo $row['image']; ?>" alt="product image" height="150px" width="150px" style="margin-left:5px;border:none;object-fit: contain;border-radius:9px; box-shadow:1px 1px 6px #000,-1px -1px 6px #000;"></div>
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
                    <h1 id="waiting_list" style="padding:120px 0 30px 0;">PRODUCTS In Waiting List</h1>
                    <div class="info" id="products-block" style="height: 430px; width:90%;">
                        <div class="data-table" style="padding:20px 0">
                            <?php 
                                $q="SELECT * FROM `waiting_list` WHERE `admin_approval` = '0'";
                                $res = mysqli_query($con,$q); 
                                if(mysqli_fetch_array($res) != null)
                                {
                                    //echo '<center><h2>No items present in waiting list currently!</h2></center>';
                                    ?>
                                    <div class="row" style="margin:-31px 0 10px 0;position:sticky;top:0px;background-color:#000;color:#fff;padding:7px 2px;">
                                        <div class="row-data" style="font-size: 24px;" >Product Name</div>
                                        <div class="row-data" style="font-size: 24px;" >product image</div>
                                        <div class="row-data" style="font-size: 24px;" >Category</div>
                                        <div class="row-data" style="font-size: 24px;" >Sub category</div>
                                        <div class="row-data" style="font-size: 24px;" >Brand</div>
                                        <div class="row-data" style="font-size: 24px;" >Price</div>
                                        <div class="row-data" style="font-size: 24px;" >Discount</div>
                                        <div class="row-data" style="font-size: 24px;" >Seller ID</div>
                                        <div class="row-data" style="font-size: 24px;" >Ip Address</div>
                                        <div class="row-data" style="font-size: 24px;" >Date</div>
                                        <div class="row-data" style="font-size: 24px;" >Time</div>
                                        <div class="row-data" style="font-size: 24px;" >product left in stock</div>
                                        <div class="row-data" style="font-size: 24px;" >Approval</div>
                                    </div>
                                    <?php
                                    $q="SELECT * FROM `waiting_list` WHERE `admin_approval` = '0'";
                                    $res = mysqli_query($con,$q);
                                    while($row = mysqli_fetch_array($res))
                                    {
                                    ?>
                                    <div class="row" style="padding-bottom:200px;">
                                        <div class="row-data"><?php echo $row['product_name']; ?></div>
                                        <div class="row-data"><img src="../<?php echo $row['image']; ?>" alt="product image" height="150px" width="auto" style="margin-left:5px;border:none;object-fit: contain;border-radius:9px; box-shadow:1px 1px 6px #000,-1px -1px 6px #000;"></div>
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
                                        <div class="row-data-button"><form action="prod_stat.php" method="post"><input type="text" name="pr_id" value="<?php echo  $row['product_id'];?>" style="display:none;" /><button name="prod" style="margin:0 0 0 48px ;"><?php if($row['admin_approval'] == 0){?>Approve <?php }?></button></form></div>
                                    </div>
                                    <?php
                                    }
                                }
                                else
                                {
                                    echo '<center><h2>No items present in waiting list currently!</h2></center>';
                                }
                            ?>
                        </div>
                    </div>
                    <h1 id="purchase" style="padding:120px 0 30px 0;">PURCHASE</h1>
                    <div class="info" id="purchase-block">
                        <div class="data-table" style="padding:20px 0">
                            <?php 
                                $q="SELECT * FROM `purchase`";
                                $res = mysqli_query($con,$q);
                                ?>
                                
                                <div class="row" style="margin:-31px 0 10px 0;position:sticky;top:0px;background-color:#000;color:#fff;padding:7px 2px;">
                                    <div class="row-data" style="font-size: 24px;" >Serial number</div>
                                    <div class="row-data" style="font-size: 24px;" >Product id</div>
                                    <div class="row-data" style="font-size: 24px;" >Product Name</div>
                                    <div class="row-data" style="font-size: 24px;" >Buyer Id</div>
                                    <div class="row-data" style="font-size: 24px;" >Ip Address</div>
                                    <div class="row-data" style="font-size: 24px;" >Date</div>
                                    <div class="row-data" style="font-size: 24px;" >Time</div>
                                </div>
                                <?php
                                while($row = mysqli_fetch_array($res))
                                {
                                ?>
                                <div class="row">
                                    <div class="row-data"><?php echo  $row['s_no']; ?></div>
                                    <div class="row-data"><?php echo $row['product_id']; ?></div>
                                    <div class="row-data"><?php echo $row['product_name']; ?></div>
                                    <div class="row-data"><?php echo $row['buyer_id']; ?></div>
                                    <div class="row-data"><?php echo $row['ip']; ?></div>
                                    <div class="row-data"><?php echo $row['date']; ?></div>
                                    <div class="row-data"><?php echo $row['time']; ?></div>
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
                            ADMIN PANEL
                        </h1>
                        <h5>© SHOPAWAY since 2022.</h5>
                </div>

    </html>
<?php            
                
}
else
{
    header("location:admin_log_in.php");
    }
?>
            
