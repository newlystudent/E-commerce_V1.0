<?php 
    require_once 'includes/header.php';
    if($_SESSION["role"] == 'User')
    {
?>

        <form class="form-profile-form" action="accntDataUpdate.php" method="post">
            <h1 style="font-family: 'Roboto', sans-serif;padding:1.2% 0;margin:auto;"><?php echo 'Welcome '. $_SESSION["uid"]."!"; ?></h1>
            <hr>
            <h3>Your Id : </h3><input type="text" placeholder="Create An User ID" maxlength="9" minlength="7" name="userid" value="<?= $_SESSION["uid"]?>" disabled/>
            <h3>Your Name : </h3><input type="text" placeholder="Your Name Here"  maxlength="40" name="username" value="<?= $_SESSION["uname"]?>" disabled/>
            <h3>Your Email : </h3><input type="email" placeholder="Your Email Address Here" maxlength="40"  name="email" value=<?= $_SESSION["email"] ?> required />
            <h3>Your Contact No : </h3><input type="text"  placeholder="Your contact no here" maxlength="13"  name="contact_no" value=<?= $_SESSION["contact_no"] ?> required />
            <button style="width:250px;">Update Profile</button>
        </form>
<?php
    }
    elseif($_SESSION["role"] == 'Seller')
    {
?>
        <form class="form-profile-form" action="accntDataUpdate.php" method="post">
            <h1 style="font-size:1.8rem;text-decoration:none;font-family: 'Roboto', sans-serif;padding:1.2% 0;margin:auto;"><?php echo 'Welcome '. $_SESSION["uid"]."!"; ?></h1>
            <hr>
            <h3>Your Id : </h3><input type="text" placeholder="Create An User ID" maxlength="9" minlength="7" name="userid" value="<?= $_SESSION["uid"]?>" disabled/>
            <h3>Your Name : </h3><input type="text" placeholder="Your Name Here"  maxlength="40" name="username" value="<?= $_SESSION["uname"]?>" disabled/>
            <h3>Your Email : </h3><input type="email" placeholder="Your Email Address Here" maxlength="40"  name="email" value=<?= $_SESSION["email"] ?> required />
            <h3>Your Contact No : </h3><input type="text"  placeholder="Your contact no here" maxlength="13"  name="contact_no" value=<?= $_SESSION["contact_no"] ?> required />
            <button style="width:150px;">Update Profile</button>
        </form>
<?php
    }
?>
<?php
        require_once 'includes/footer.php';
    ?>