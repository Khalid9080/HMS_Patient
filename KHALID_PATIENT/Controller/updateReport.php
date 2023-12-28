<?php
include '../Model/mydb.php';

$db = new mydb();
$db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $rpt = $_POST["rpt"];
        $doctor = $_POST["doctor"];
        $rh = $_POST["rh"];

        $db->updateReport( $id,$rpt,$doctor,$rh);
    }
}

$db->closeCon();
?>