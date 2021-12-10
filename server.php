<?php

 $serevrname ="localhost";
 $username ="root";
 $password ="";
 $dbname="testregister";

 $conn =mysqli_connect($serevrname,$username,$password,$dbname);

 if (!$conn){
     die ("Connection failed". mysqli_connect_error()); }
//  else{
// echo "Connected successfully";

//  }

?>