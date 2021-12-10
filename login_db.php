<?php
session_start();
include('server.php');
$errors = array();
if (isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $passwords= mysqli_real_escape_string($conn,$_POST['passwords']);

if (empty($username)){
    array_push($errors ,"Username is required");
}
if (empty($passwords)){
    array_push($errors ,"Username is required");
}
if(count($errors)== 0){
$passwordss = md5($passwords);
$query = "SELECT * FROM user WHERE username = '$username' AND passwords ='$passwords'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1){
    $_SESSION['username']= $username;
    $_SESSION['success'] = "You Login";
    header('location: index.php');
}else {
    array_push($errors ,"Wrong Username/pass combination");
    $_SESSION['error'] = "Wrong";
    header('location: Weblogin.php');
}
}
}
?>