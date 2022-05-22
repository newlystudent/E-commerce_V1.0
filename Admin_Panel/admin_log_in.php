<!DOCTYPE html> 
<head>
    <title>E-Commerce DWD ADMIN PANEL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <div class="body">
        <div class="head">
            <h1 style="text-decoration:none;">ADMIN PANEL</h1>
        </div>
                <h1 style="margin-top: 30px;font-family: 'Roboto', sans-serif;font-size:50px;">Admin Log In Panel</h1>    
                <form class="form-1" action="admin_login.php" method="POST">
                        <input type="text" placeholder="Enter your admin id or email" name="userid" maxlength="40" minlength="7"  required />
                        <input type="password" placeholder="Pasword" name="password" minlength="8" maxlength="16"   required />
                        <button >Log In</button>
                    </form>
                </div>
    <div class="footer" style="position: absolute;bottom:0;">
        <h1 style="font-family: 'Roboto-Slab', sans-serif;">
            SHOPAWAY
        </h1>
        <h5 style="font-family: 'Roboto-Mono', sans-serif;">© DWD ADMIN since 2022.</h5>
    </div>    
</body>
