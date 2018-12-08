<?php
$userID=$_POST["userID"];
$userName = $_POST["userName"];
$email = $_POST["email"];
$password = md5($_POST["password"]); //Password Encryption
$date = date('Y-m-d H:i:s');
$lastLogin= date('Y-m-d H:i:s');

echo 'New user Added successfully';
//Creating connection with the DATABASE
$connection = new mysqli("localhost","root","","mysitedatabase");

// Check connection
if ($connection->connect_error) {
    die("Connection failed:  $connection->connect_error");
}


  $sql = "INSERT INTO users(`userID`, `UserName`, `Email`, `password`, `registrationDate`, `LastLogIn`)
  VALUES ('$userID', '$userName','$email', '$password',now(),now())";



  if ($connection->query($sql) === TRUE) {
      echo 'New user Added successfully';
  } else {
      echo  $connection->error;
  }




  $connection->close();



?>
