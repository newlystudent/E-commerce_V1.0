<?php
include'includes/header.php';
?>
            <div class="body">
            <h1 style="margin-top: 30px;font-family: 'Roboto', sans-serif;font-size:50px;">Log In</h1>    
            <form class="form-1" action="login.php" method="POST" style="margin-bottom: 120px;">
                
                    <input type="text"       placeholder="Enter your user id or email" maxlength="40" minlength="7" name="userid_or_email" required />
                    <input type="password"   placeholder="Pasword" minlength="8" maxlength="16"  name="password" required />
                    <button >Log In</button>
                    <a href="sign_up.php" style="color: black;margin:auto;font-size:1rem;padding:1.7% 0 0 0;"><p style="display: inline-block;">Don't have an account?</p>Sign Up</a>
                </form>
            </div>
<div class="footer" style="position: relative;bottom:0;">
    <h1 style="font-family: 'Roboto-Slab', sans-serif;">
        SHOPAWAY
    </h1>
    <h5 style="font-family: 'Roboto-Mono', sans-serif;">© SHOPAWAY since 2022.</h5>
</div>