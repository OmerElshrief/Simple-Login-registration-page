<?php
$userID=$_POST["userID"];
$password = md5($_POST["password"]); //Password Encryption
$time = date('Y-m-d H:i:s');
$connection = mysqli_connect("localhost","root","","mysitedatabase");

// Check connection
if ($connection->connect_error)
{
    die("Connection failed: " . $connection->connect_error);
}

$sql= "SELECT  * FROM users WHERE userID='$userID' AND password = '$password'";


$result = mysqli_query($connection,$sql);
if(mysqli_num_rows($result)==0)
echo "Wrong User ID or wrong Password";
else {
$sql = "UPDATE users SET LastLogIn= now() WHERE userID='$userID' ";
  echo "Welcome You are logged in";
}
