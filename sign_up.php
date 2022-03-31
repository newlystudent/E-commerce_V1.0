<?php
include'includes/header.php';
?>
           
            <div class="body">
                <form class="form" action="sign.php" method="POST">
                    <h1 class="form-header">___Welcome To Sign Up Panel___</h1>
                    <select name="role" class="sel">
                        <option value=""> Select Your Account Option </option>
                        <option value="User">User</option>
                        <option value="Seller">Seller</option>
                    </select>
                    <input type="text"       placeholder="Create An User ID " maxlength="9" minlength="7" name="userid" required />
                    <input type="text"       placeholder="Your Name Here "  maxlength="40" name="username" required />
                    <input type="password"   placeholder="Password " minlength="8" maxlength="16"  name="password" required />
                    <input type="password"   placeholder="Repeat Password " minlength="8" maxlength="16"  name="rpassword"  required />
                    <input type="email"      placeholder="Your Email Address Here " maxlength="40"  name="email" required />
                    <input type="text"      placeholder="Your contact no here " maxlength="13"  name="contact_no" required />
                    <textarea type="text"   style="height: 35%;"   placeholder="Your Address Here "  maxlength="250" name="address" required ></textarea>
                    <button>Sign Up</button>
                    <a href="log_in.php" style="color: black;margin:auto;font-size:1rem;padding:1.7% 0 0 0;"><p style="display: inline-block;">Already have an account?</p>Log In</a>
                </form>
            </div>