<?php 
session_start();
include('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
<div class="error"><h3><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></h3></div>
<?php endif ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="passwords_1">PassWord</label>
            <input type="password" name="passwords_1">
        </div>
        <div class="input-group">
            <label for="passwords_2">Confirm Password</label>
            <input type="password" name="passwords_2">
        </div>
        <div class="input-group">
            <button type="submit" name="btn_user" class = "btn">Register</button>
        </div>
        <p>Already a member? <a href="Weblogin.php">Sign in</a></p>
    </form>
</body>
</html>