<?php
include '../Model/mydb.php'; // Include the mydb.php file to access its functionality

$db = new mydb();
$db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['report_id'])) {
    $id = $_POST['report_id'];

    $db->deleteReport($id);
}

$db->closeCon();
?>