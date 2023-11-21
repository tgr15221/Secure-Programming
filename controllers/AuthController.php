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
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashedPassword = customHashPassword($password);

    $query = "SELECT * FROM users WHERE username=? AND password=?;";
    $statement = $db->prepare($query);
    $statement->bind_param("ss", $username, $hashedPassword);

    $statement->execute();

    $result = $statement->get_result();  // Use get_result() to get the result set

    $db->close();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        $_SESSION["success_message"] = "Login Success";
        $_SESSION["id"] = $row['id'];
        $_SESSION['login'] = true;
        $_SESSION['username'] = $row['username'];

        header("Location: ../doctorlist.php");
        exit();  // Ensure no further code execution after redirection
    } else {
        $_SESSION["error_message"] = "Login Failed";

        header("Location: ../login.php");
        exit();  // Ensure no further code execution after redirection
    }
}
?>