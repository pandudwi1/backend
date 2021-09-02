<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="kotak_login">
            <p class="tulisan_login">SILAHKAN LOGIN</p>
  
        <form method="post" action="login_action.php">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" name="username" placeholder="Masukan Username">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Masukan Password">
        </div>
        <div class="form-group">
            <input type="submit"  class="btn"  value="LOGIN">
        </div>
        </form>
    </div>
</body>
</html>