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
$sql = "SELECT password FROM users WHERE username = '".$loginUser."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["password"]== $loginPass){
        echo "Login Success.";


    }else echo "Wrong Credentails.";
  }
} else {
  echo "Username dose not exists. ";
}
$conn->close();
?>