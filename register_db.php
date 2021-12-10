<?php
session_start();
include('server.php');
$errors = array();
if (isset($_POST['btn_user'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $passwords_1 = mysqli_real_escape_string($conn,$_POST['passwords_1']);
    $passwords_2 = mysqli_real_escape_string($conn,$_POST['passwords_2']);
    if (empty($username)){
        array_push($errors ,"Username is required");
    }
    if (empty($passwords_1)){
        array_push($errors ,"pass is required");
    }
    if ($passwords_1 != $passwords_2){
        array_push($errors ,"pass e");
    }
    $user_check = "SELECT * FROM user WHERE username = '$username' ";
    $query = mysqli_query($conn , $user_check);
    $result = mysqli_fetch_assoc($query);
    if ($result){
        if ($result['username']=== $username){
        array_push($errors ,"SQ");}
    }
    if(count($errors)==0){
        $password = md5($passwords_1);
        $sql = "INSERT INTO user (username, passwords) VALUES ('$username','$password')";
        mysqli_query($conn,$sql);

        $_SESSION['username'] = $username;
        $_SESSION['success'] ="You login";
        header('location: index.php');
    }else{
        array_push($errors ,"Wrong Username/pass combination");
        $_SESSION['error'] = "Wrong";
        header('location: WebRegister.php');


    }

}
?>