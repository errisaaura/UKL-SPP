<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="log in.css">
    
</head>
<body>
    <div class="main">
        <h2>LOG IN</h2>
        
        <div class="border"></div>
        <form action="proses-login-admin.php" method="post">
            <div>
                <input type="text" name="username" required="" placeholder="Username">
            </div>
            <div>
                <input type="password" name="password" required="" placeholder="Password" class="form-password" >
            </div>
            
            <input type="submit" name="Submit" value="Submit">
            <!-- <p style="text-align: center; color: grey; font-size: 13px ">Belum punya akun? ayo <a href="sign up.php">Daftar</a></p> -->
        </form>
    </div>
</body>
</html>