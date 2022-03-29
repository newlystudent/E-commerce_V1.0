<?php
include'includes/header.php';
?>
            <div class="body">
                <form class="form" action="sign.php" method="POST">
                    <select name="role">
                        <option value="">--Select Your Account Option--</option>
                        <option value="user">User</option>
                        <option value="seller">Seller</option>
                    </select>
                    <input type="text"       placeholder="Your First Name Here--"   name="fname" required> 
                    <input type="text"       placeholder="Your Last Name Here--"   name="lname" required>
                    <input type="password"   placeholder="Password--"   name="password" required>
                    <input type="password"   placeholder="Repeat Password--"   name="rpassword"  required>
                    <input type="email"      placeholder="Your Email Address Here--"   name="email" required>
                    <input type="text"      placeholder="Your Address Here--"   name="address" required>
                    <button >Sign Up</button>
                </form>
            </div>