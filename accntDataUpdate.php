<?php
    require_once 'includes/header.php';
    require_once 'includes/dbconn.php';
    require_once 'includes/func.php';

    
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];


    $inpArray = [$email,$contact_no];
    $empt_stat = emptyCheck($inpArray);

    if($empt_stat == 0){
        header("location:log_in.php?error=user%not%logged%in!");
    }

    else
    {
        if($email == $_SESSION["email"] && $contact_no != $_SESSION["contact_no"])
        {

            $q= "SELECT * FROM `accounts` WHERE contact_no='$contact_no';";
            $res = mysqli_query($con,$q);
            $row = Null;
            $row = mysqli_fetch_array($res);
                
            if($row != Null)
            {chkcontProf($row);}

            $uid = $_SESSION["uid"];

            $q = "UPDATE `accounts` SET `contact_no` = '$contact_no' WHERE `accounts`.`user_id` = '$uid';";
            mysqli_query($con,$q);

            $_SESSION["contact_no"] = $contact_no;
        }

        elseif($email != $_SESSION["email"] && $contact_no == $_SESSION["contact_no"])
        {

            $q= "SELECT * FROM `accounts` WHERE email='$email';";
            $res = mysqli_query($con,$q);
            $row = Null;
            $row = mysqli_fetch_array($res);
                
            if($row != Null)
            {chkemailProf($row);}

            $uid = $_SESSION["uid"];

            $q = "UPDATE `accounts` SET `email` = '$email' WHERE `accounts`.`user_id` = '$uid';";
            mysqli_query($con,$q);

            $_SESSION["email"] = $email;
        }

        elseif($email == $_SESSION["email"] && $contact_no == $_SESSION["contact_no"])
        {
            header('location:profile.php?error=no%change%in%email%or%contact%no');
            exit();
        }
?>      
        
    <form class="form" action="profile.php" style="text-align: center;color:#000;font-family: 'Roboto Slab', sans-serif;width:35%;">
        <h2 style="padding:1.8%;">
<?php
    echo 'Profile Updated Successfully';
?>
        </h2>
        <button style="width: 25%;margin-top:5%;">Go back to Profile</button>      
    </form>
    </div>
<?php
}
?>
