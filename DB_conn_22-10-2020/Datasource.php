<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "wp2_temp";
   // Create connection
   $conn = mysqli_connect($servername, $username, $password,$dbname);

   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

   /*$sql = "CREATE TABLE signup (
    Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Firstname VARCHAR(30),
    Lastname VARCHAR(30),
    Username VARCHAR(30) NOT NULL,
    Email VARCHAR(50),
    Gender varchar(1),
    Mobile VARCHAR(10),
    DOB date,
    Pwd varchar(8) NOT NULL,
    Reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table Signup created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }*/

?>
