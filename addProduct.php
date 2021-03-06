<?php
if(!isset($_SESSION["uid"]))
{
    session_start();
}
    require_once 'includes/dbconn.php';
    require_once 'includes/date_time.php';
    require_once 'includes/ipadd.php';
    require_once 'includes/func.php';
    if(isset($_POST['upload']))
    {
        $prname = $_POST['pr_name'];
        $prcat = $_POST['pr_category'];
        $prsubcat = $_POST['pr_sub_category'];
        $pr_brand = $_POST['pr_brand'];
        $prprice = $_POST['pr_price'];
        $prdisc = $_POST['pr_disc'];
        $prstock = $_POST['pr_stock'];
        $file = $_FILES['file'];

        $inpArray = array("$prname","$prcat","$prsubcat","$pr_brand","$prprice","$prdisc","$file");
        $empt_stat = emptyCheck($inpArray);
        echo $empt_stat;
        if($empt_stat == 0)
        {
            header("location:addProductform.php?error=input%not%given!");
        }
        else
        {
            $uid = $_SESSION["uid"];
            
            $filename=$_FILES['file']['name'];
            $filetmpname=$_FILES['file']['tmp_name'];
            $filesize=$_FILES['file']['size'];
            $fileerror=$_FILES['file']['error'];
            $filetype=$_FILES['file']['type'];
            $filetxt=explode('.',$filename);
            $fileext=strtolower(end($filetxt));
            $filealowed=array('jpg','jpeg','png','webp');

            if(in_array($fileext,$filealowed))
            {
                if($fileerror===0)
                {
                    if($filesize<1048576)
                    {
                        $fileid = "prod".uniqid('',true);
                        $filenewname=uniqid('',true).".".$fileext;
                        $filedestination='uploaded/'.$filenewname;
                        move_uploaded_file($filetmpname,$filedestination);
                        $q="INSERT INTO `waiting_list` (`product_id`, `product_name`, `category`, `sub_category`, `brand`, `image`, `price`, `discount`,`seller_id`,`ip`,`date`,`time`,`stock`)
                        VALUES 
                        ('$fileid', ' $prname', '$prcat', '$prsubcat', '$pr_brand', '$filedestination', '$prprice','$prdisc','$uid','$ip','$date','$time','$prstock')";
                        $rs=mysqli_query($con,$q);
                        header("location:addProductform.php?stat=product%uploaded!");
                    }
                    else
                    {
                        header("location:addProductform.php?error=file%size%is%too%much");
                    }
                }
                else
                {
                    header("location:addProductform.php?error=file%error");    
                }
            }
            else
            {
                header("location:addProductform.php?error=file%extention%not%supported");
            }
        }
        
    }
    else
    {
        header("location:addProductform.php?error=no%products%selected!");
    }
?>
