<?php 
    require_once 'includes/dbconn.php';
    require_once 'includes/ipadd.php';
    require_once 'includes/date_time.php';
    require_once 'includes/func.php';


    $userid = $_POST['userid_or_email'];
    $email = $userid;
    $password = $_POST['password'];

    $inpArray = [$userid,$password];
    $empt_stat = emptyCheck($inpArray);

    if($empt_stat == 0){
        header("location:log_in.php?error=no%input%given!");
    }

    else
    {
        $q= "SELECT * FROM `accounts` WHERE user_id='$userid' OR email = '$email';";
        $res = mysqli_query($con,$q);
        $row = Null;
        $row = mysqli_fetch_array($res);


        if($row == NULL)
        {
            header("location:log_in?error=account%not%found!");
        }

        else
        {
            $strd_pass = $row['password'];
            $stat = passCheck($password,$strd_pass);
            
            if($stat == 0)
            {
                header("location:log_in.php?error=wrong%username%or%password!");
            }

            else
            {
                session_start();
                $_SESSION["uid"]=$row['user_id'];
                $_SESSION["min"]=$min;
                header('location:index_.php');
            }
        }
    }
?>