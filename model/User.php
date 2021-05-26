<?php
include './config.php';
header( 'Location: http://localhost:8000//view/pages/page2.php' ) ;

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$codemali = $_POST['codemali'];
$phone = $_POST['phone'];
$addres = $_POST['addres'];

//اتصال به دیتابیس

    
    //ساخت جدول و ستون ها
    $sql = "CREATE DATABASE mvcphp2";
    if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully";
    } else {
    // echo "Error creating database: " . $conn->error;
    }
    $sql = "CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    codemali VARCHAR(50) NOT NULL,
    phone VARCHAR(50),
    addres VARCHAR(500),
    status TINYINT(1) DEFAULT 0) 
    ENGINE=MyISAM DEFAULT CHARACTER SET=utf8 COLLATE=utf8_persian_ci";
    $conn->query($sql);
    if(!$conn) {
        // echo "Creating Table tblname: Error! " . $conn->error;
    } else {
        // echo "Creating Table tblname: OK!";
    }

$sql = "INSERT INTO users (firstname, lastname, codemali, phone, addres)
VALUES ('$firstname', '$lastname', '$codemali', '$phone', '$addres')";
if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
  } else {
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

//پایان اتصال
$conn->close();
?>
