<?php 
    require_once '../includes/dbconn.php';
    if(isset($_POST['stat']))
    {
        $user = $_POST['uid'];
        $query = "SELECT * FROM `accounts` WHERE `user_id` = '$user'";
        $res = mysqli_query($con,$query);
        $row = mysqli_fetch_array($res);
        $active_status = $row['active_status'];
        echo $active_status;
        echo $user;
        if($active_status == 1)
        {
            $query = "UPDATE `accounts` SET `active_status` = '0' WHERE `user_id` = '$user'";
            $res = mysqli_query($con,$query);
            header("location:index.php?error=user%blocked");
           
        }
        else
        {
            $query = "UPDATE `accounts` SET `active_status` = '1' WHERE `user_id` = '$user'";
            $res = mysqli_query($con,$query);
            header("location:index.php?error=user%unblocked");
        }
    }
    else
    {
        header("location:index.php?error=no%user%selected!");
    }
?>