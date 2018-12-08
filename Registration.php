<?php

//Connection
$connection =new mysqli("localhost", "Omar",""); // Establishing Connection with Server..

if ($connection->connect_error) {  //Validation for the Connection
    die("Connection failed: " . $connection->connect_error);
  }
  else
  {
  //Creating the DataBase
    $sql = "CREATE DATABASE MySiteDataBase";
    if ($connection->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $connection->error;
    }

//Creating the Table for the Users
$sql = "CREATE TABLE USERS (
  userID int(6) NOT NULL,
  userName VARCHAR(15) NOT NULL,
  password VARCHAR(12) NOT NULL,
  email VARCHAR(30) not null,
  registrationDate TIMESTAMP not null,
  lastLoginDate TIMESTAMP not null,
  )";

  if ($connection->query($sql) === TRUE) {
      echo "Table Users created successfully";
  } else {
      echo "Error creating Table users: " . $connection->error;
  }
}

$connection->close();
//$db = mysql_select_db("OmerDataBase", $connection); // Selecting Database

//$sql = "INSERT INTO $db  VALUES ('John', 'Doe', 'john@example.com')";

?>
