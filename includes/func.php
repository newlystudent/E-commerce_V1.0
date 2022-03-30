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
    function emptyCheck($inpArray){
        foreach($inpArray as $item)
        {
            $count = 0;
            if(empty($item))
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
    function chkEmail($email1,$email2)
    {
        if($email1 == $email2)
        {
            header("location:sign_up?error=email%already%taken");
        }
    }
    function chkNum($num1,$num2)
    {
        if($num1 == $num2)
        {
            header("location:sign_up?error=contact%no%already%taken");
        }
    }
?>