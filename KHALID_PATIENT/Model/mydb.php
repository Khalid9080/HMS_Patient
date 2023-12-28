<?php

class mydb {
    public $conn;

    function openCon() {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "";
        $dbname = "patient1"; // Use the correct database name

        $this->conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        
    }
//registration---
   function insertPatient($uname, $email, $pass, $dob, $gender, $bg, $add) {
    $sql = "INSERT INTO ptable (username, email, Password, dob, Gender, bg, `add`) 
            VALUES ('$uname', '$email', '$pass', '$dob', '$gender', '$bg', '$add')";

    if ($this->conn->query($sql) === TRUE) {
        echo "Data successfully inserted";
    } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
    }
}


function deletePatient($id) {
    $sql = "DELETE FROM ptable WHERE id = $id";

    if ($this->conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $this->conn->error;
    }
}



function updatePatient($id, $uname, $email, $pass) {
    $sql = "UPDATE ptable SET username='$uname', email='$email', Password='$pass'";

    if ($this->conn->query($sql) === TRUE) {
        echo "Data successfully updated";
    } else {
        echo "Error updating record: " . $this->conn->error;
    }
}

//reporting--
function insertReport($rpt , $doctor, $rh) {
    $sql = "INSERT INTO report (`Reporting Time`, `Doctor`, `Report History`) 
        VALUES ('$rpt','$doctor', '$rh')";


    if ($this->conn->query($sql) === TRUE) {
        echo "Report successfully inserted";
    } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
    }
}



function deleteReport($id) {
    $sql = "DELETE FROM report WHERE id = $id";

    if ($this->conn->query($sql) === TRUE) {
        echo "Report deleted successfully";
    } else {
        echo "Error deleting report: " . $this->conn->error;
    }
}



function updateReport($id, $rpt, $doctor, $rh) {
    $sql = "UPDATE report SET `Reporting Time`='$rpt', `Doctor`='$doctor', `Report History`='$rh' WHERE id=$id";

    if ($this->conn->query($sql) === TRUE) {
        echo "Data successfully updated";
    } else {
        echo "Error updating record: " . $this->conn->error;
    }
}




    function closeCon() {
        $this->conn->close();
    }
}


?>