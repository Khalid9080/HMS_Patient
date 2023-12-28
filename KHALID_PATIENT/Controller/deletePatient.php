<?php
include '../Model/mydb.php'; // Include the mydb.php file to access its functionality

$db = new mydb();
$db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];

    $db->deletePatient($id);
}

$db->closeCon();
?>