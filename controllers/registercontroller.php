<?php
session_start();
require "./connection.php";

function customHashPassword($password) {
    $hashedPassword = '';
    for ($i = 0; $i < strlen($password); $i++) {
        $hashedPassword .= chr(ord($password[$i]) + 5);
    }

    return $hashedPassword;
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashedPassword = customHashPassword($password);

    $query = "INSERT INTO users (email, username, password) VALUES (?, ?, ?)";
    $statement = $db->prepare($query);
    $statement->bind_param("sss", $email, $username, $hashedPassword);

    $result = $statement->execute();

    $db->close();

    if ($result) {
        $_SESSION["success_message"] = "Registration Success";
        header("Location: ../login.php");
    } else {
        $_SESSION["error_message"] = "Registration Failed";
        header("Location: ../register.php");
    }

} else {
    header("Location: ../register.php");
}
?>