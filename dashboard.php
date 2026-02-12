<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>

<nav>
    <a href="#">Dashboard</a> |
    <a href="#">Categories</a> |
    <a href="#">Products</a> |
    <a href="logout.php">Logout</a>
</nav>

<hr>

<?php
if($_SESSION['role'] == "admin"){
    echo "<h3>Welcome Admin</h3>";
} else {
    echo "<h3>Welcome Encoder</h3>";
}
?>

</body>
</html>
