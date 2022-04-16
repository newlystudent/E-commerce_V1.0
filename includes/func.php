<?php
    function passCheck($pass,$stored){
        if($pass == $stored)
        {
            return 1;
        }
        else{
            return 0;
        }
    }
    function emptyCheck($inpArray)
    {
        foreach($inpArray as $item)
        {
            $count = 0;
            if(isset($item)!=1)
            {
                return 0;
            }
            else
            {
                $count ++;
            }
        }
        return $count;
    }
    function chkPass($pass1,$pass2)
    {
        if($pass1 !== $pass2){
            header("location:sign_up.php?error=password%did%not%match");
            exit();
        }
    }
    function chkUser($id,$name)
    {
        if($id == $name){
            header("location:sign_up.php?error=user%id%and%name%cannot%be%same");
            exit();
        }
    }
    function chkEmail()
    {
            header("location:sign_up.php?error=email%already%taken");
    }
    function chkNum()
    {
            header("location:sign_up.php?error=contact%no%already%taken%for%another%account");
    }
    function chkemailProf($inp)
    {
        if($inp['user_id'] != $_SESSION["uid"])
        {
            header('location:profile.php?error=email%already%used%by%another%account'.$inp['user_id']."?".$_SESSION["uid"]);
            exit();
        }
        else{
            return 0;
        }
    }
    function chkcontProf($inp)
    {
        if($inp['user_id'] != $_SESSION["uid"])
        {
            header('location:profile.php?error=contact%no%already%used%by%another%account'.$inp['user_id']."?".$_SESSION["uid"]);
            exit();
        }
        else{
            return 0;
        }
    }   
    function profUpdtchk($inp)
    {  
        $count = 0;
        if($inp[0] == $_SESSION["uname"])
        {
            $count++;
            if($inp[1] == $_SESSION["email"])
            {
                $count++;
                if($_SESSION["contact_no"])
                {
                    $count++;
                }
                else
                {
                    return $count;
                }
            }
            else
            {
                return $count;
            }
            
        }
        else
        {
            return $count;
        }
    }
?>