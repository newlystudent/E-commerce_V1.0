<?php
require_once 'includes/header.php';
require_once 'includes/dbconn.php';
require_once 'includes/ipadd.php';
require_once 'includes/date_time.php';
require_once 'includes/func.php';

$userid = $_POST['userid'];


$inpArray = [$userid];
$empt_stat = emptyCheck($inpArray);

if($empt_stat == 0){
    header("location:sign_up.php?error=input%not%given!");
}

    else
    {
        $role = $_POST['role'];
        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rpassword = $_POST['rpassword'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];
        $address = $_POST['address'];
        
          
        chkUser($userid,$username);
        chkPass($password,$rpassword);
        
        
        $q= "SELECT * FROM `accounts` WHERE email='$email';";
        $res = mysqli_query($con,$q);
        $row = Null;
        $row = mysqli_fetch_array($res);

        if($row != NULL)
        {
            chkEmail();                       
        } 
        
        
        
        $q= "SELECT * FROM `accounts` WHERE contact_no='$contact_no';";
        $res = mysqli_query($con,$q);
        $row = Null;
        $row = mysqli_fetch_array($res);
        
        
        if($row != NULL)
        {
            chkNum();
        }

        
        $q= "SELECT * FROM `accounts` WHERE user_id='$userid';";
        $res = mysqli_query($con,$q);
        $row = Null;
        $row = mysqli_fetch_array($res);

        if($row != NULL)
        {
            header("location:sign_up.php?error=userid%already%exists");                        
        }        
        
        
        else
        {
            $q = "INSERT INTO `accounts` (`user_id`, `username`, `password`, `email`, `address`, `role`, `ip`, `date`, `time`,`contact_no`) VALUES ('$userid', '$username', '$password', '$email', '$address', '$role', '$ip', '$date', '$time','$contact_no');";
            $res = mysqli_query($con,$q);
        }
        
        ?>
        <style>
            .sign2log{
                text-decoration:none;width:26%;margin:6.5% 3.5% 0 3.5%;font-size:19px;
            }
        </style>
        <div class="form-1" style="text-align: center;color:#000;font-family: 'Roboto Slab', sans-serif;margin:17px auto;">
                <h2 style="padding:1.8%;text-align: center;">
                    Account Created Successfully!
                </h2>
                    <button><a class="sign2log" href="log_in.php">Log In</a></button>
                </h2>
        </div>
<?php
}
?>
<?php
        require_once 'includes/footer.php';
?>
