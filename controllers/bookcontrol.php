<?php
    session_start();
    require("./connection.php");
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numpost = $_POST['number'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
        $messege = $_POST['messege'];
        $patient_id = $_SESSION['id'];

        $query = "INSERT INTO patientreport (id, numpost, dob, age, messege) VALUES('$patient_id', '$numpost', '$dob', '$age', '$messege')";
        $result = $db->query($query);
        $db->close();

        if($result){
            header("Location: ../bookpage.php");
        }else{
            echo"Not Sent";
        }

    }else{
        header("Location: ../doctorlists.php");
    }