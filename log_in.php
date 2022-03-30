<?php
include'includes/header.php';
?>
            <div class="body">
                <form class="form" action="login.php" method="POST">
                <h1 class="form-header">___Welcome To Log In Panel___</h1>
                    <input type="text"       placeholder="Enter your user id or email" maxlength="40" minlength="7" name="userid_or_email" required />
                    <input type="password"   placeholder="Pasword" minlength="8" maxlength="16"  name="password" required />
                    <button >Log In</button>
                    <a href="sign_up.php" style="color: black;margin:auto;font-size:1rem;padding:1.7% 0 0 0;"><p style="display: inline-block;">Don't have an account?</p>Sign Up</a>
                </form>
            </div>