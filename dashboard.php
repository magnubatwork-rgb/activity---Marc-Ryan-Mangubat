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
// Display user's name
echo "<h3>Welcome, " . htmlspecialchars($_SESSION['user']) . "</h3>";

// Optional: Still show role
if($_SESSION['role'] == "admin"){
    echo "<p>You are logged in as Admin</p>";
} else {
    echo "<p>You are logged in as Encoder</p>";
}
?>

</body>
</html>
