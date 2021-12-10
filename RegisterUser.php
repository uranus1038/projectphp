<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="12tailsnew";

$loginUser = $_POST["loginUser"]; 
$loginPass = $_POST["loginPass"];  

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
#echo "Connected successfully";
$sql = "SELECT username FROM users WHERE username = '".$loginUser."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Username is already taken. ";
  
} else {
  echo "Creating user... ";
  $sql2 = "INSERT INTO users (username,password) VALUES ('".$loginUser."','" .$loginPass."') ";
  if($conn->query($sql2) === TRUE){
   echo "New record";
  }else {
    echo "Error: ". $sql ."<br>" . $conn->error;
  }

}
$conn->close();
?>