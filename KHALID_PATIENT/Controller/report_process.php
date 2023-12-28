<?php 
include '../Model/mydb.php'; // Include the mydb.php file to access its functionality

$db = new mydb();
$db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming form fields have been validated properly
    $rpt = $_POST["rpt"];
    $doctor = $_POST["doctor"];
    $rh = $_POST["rh"];
    

   

// Insert the hashed password into the database
$db->insertReport($rpt,$doctor,$rh);
}

$db->closeCon();
?>