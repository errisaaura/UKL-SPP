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
        <form action="proses-login-siswa.php" method="post">
            <div>
                <input type="text" name="nisn" required="" placeholder="NISN">
            </div>
            <div>
                <input type="text" name="nama" required="" placeholder="Nama" class="form-password" >
            </div>
            
            <input type="submit" name="Submit" value="Submit">
            
        </form>
    </div>
</body>
</html>