<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="12tailsnew";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
#echo "Connected successfully";
$sql = "SELECT username FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "username: " . $row["username"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>