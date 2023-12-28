<?php 
include '../Model/mydb.php'; // Include the mydb.php file to access its functionality

$db = new mydb();
$db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming form fields have been validated properly
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $dob = $_POST["dob"];
    if(isset($_POST["gender"])){
      $gender = $_POST["gender"];
    }
    $bg = $_POST["bg"];
    $add = $_POST["add"];

    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

// Insert the hashed password into the database
$db->insertPatient($uname, $email, $hashedPassword, $dob, $gender, $bg, $add);
}

$db->closeCon();
?>