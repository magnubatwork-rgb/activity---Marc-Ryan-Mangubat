<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){

        $row = $result->fetch_assoc();

        if(password_verify($password, $row['password'])){

            $_SESSION['user'] = $row['username'];
            $_SESSION['role'] = $row['role'];

            header("Location: dashboard.php");
        } else {
            echo "Invalid password";
        }

    } else {
        echo "User not found";
    }
}
?>
