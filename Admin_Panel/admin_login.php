<?php 
    require_once '../includes/dbconn.php';
    require_once '../includes/date_time.php';
    require_once '../includes/func.php';


    $userid = $_POST['userid'];
    $password = $_POST['password'];

    $inpArray = array("$userid","$password");
    $empt_stat = emptyCheck($inpArray);

    if($empt_stat == 0){
        header("location:admin_log_in.php?error=no%credentials%given!");
    }

    else
    {
        $q= "SELECT * FROM `admin` WHERE `admin_id`='$userid';";
        $res = mysqli_query($con,$q);
        $row = Null;
        $row = mysqli_fetch_array($res);


            if($row == NULL)
            {
                header("location:admin_log_in.php?acccount%not%found");
            }
            else
            {
                $strd_pass = $row['password'];
                $stat = passCheck($password,$strd_pass);
            }
            
            if($stat == 0)
            {
                header("location:admin_log_in.php?error=wrong%username%or%password!");
            }

            else
            {
                
                session_start();
                if($row != NULL)
                {
                    $_SESSION["admin_uid"]=$row['admin_id'];
                    $_SESSION["contact_no"]=$row['contact no'];
                }
                header("location:index.php?stat=welcome%admin!");
               
            }
    }
?>