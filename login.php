<?php 
    require_once 'includes/dbconn.php';
    require_once 'includes/ipadd.php';
    require_once 'includes/date_time.php';
    require_once 'includes/func.php';


    $userid = $_POST['userid_or_email'];
    $email = $userid;
    $password = $_POST['password'];

    $inpArray = array("$userid","$password");
    $empt_stat = emptyCheck($inpArray);

    if($empt_stat == 0){
        header("location:log_in.php?error=no%input%given!");
    }

    else
    {
        $q= "SELECT * FROM `accounts` WHERE user_id='$userid'";
        $res = mysqli_query($con,$q);
        $row = Null;
        $row = mysqli_fetch_array($res);

        $q= "SELECT * FROM `accounts` WHERE email='$email'";
        $res1 = mysqli_query($con,$q);
        $row1 = Null;
        $row1 = mysqli_fetch_array($res1);


        if($row == NULL && $row1 == NULL)
        {
            header("location:log_in.php?error=account%not%found!");
        }
        else
        {
            if($row !=NULL)
            {
                $strd_pass = $row['password'];
                $stat = passCheck($password,$strd_pass);
            }
            elseif($row1 != NULL)
            {
                $strd_pass = $row1['password'];
                $stat = passCheck($password,$strd_pass);
            }   
            
            if($stat == 0)
            {
                header("location:log_in.php?error=wrong%username%or%password!");
            }

            else
            {

                
                if($row != NULL && $row['active_status'])
                {
                    session_start();
                    $_SESSION["uid"]=$row['user_id'];
                    $_SESSION["uname"]=$row['username'];
                    $_SESSION["email"]=$row['email'];
                    $_SESSION["role"]=$row['role'];
                    $_SESSION["contact_no"]=$row['contact_no'];
                    $_SESSION["min"]=$min;
                    header("location:index.php?stat=welcome!");
                }
                
                elseif($row1 != NULL && $row1['active_status'])
                {
                    session_start();
                    $_SESSION["uid"]=$row1['user_id'];
                    $_SESSION["uname"]=$row1['username'];
                    $_SESSION["email"]=$row1['email'];
                    $_SESSION["role"]=$row1['role'];
                    $_SESSION["contact_no"]=$row1['contact_no'];
                    $_SESSION["min"]=$min;
                    header("location:index.php?stat=welcome!");
                }
                else
                {
                    header('location:index.php?error=user%blocked');
                }
                
            }
        }
    }
?>