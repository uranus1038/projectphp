<?php 
// หากไม่ได้ login เข้ามาให้เข้าไป login ก่อน
 session_start();
 if (!isset($_SESSION['username'])){
     $_SESSION['msg'] = "You must login first";
     header('location: index.php');
 }
 if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: Weblogin.php');
// ------------------------------------------->    
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>



    <div class="header">
        <h2>Home Page</h2>
    </div>


<div class="content">

<!-- massage -->
<?php if (isset($_SESSION['success'])) : ?>
<div class="success"><h3><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></h3></div>
<?php endif ?>


<?php if(isset($_SESSION['username'])) :?>
<p>Welcom <strong><?php echo $_SESSION['username']; ?></strong></p>
<p><a href="index.php?logout='1'"style="color: red;">Logout</a></p>

<?php endif ?>

</div>

</body>
</html>