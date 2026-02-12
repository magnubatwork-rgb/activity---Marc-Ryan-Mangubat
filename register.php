<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Register</h2>

<form action="register.php" method="POST">
    Username:<br>
    <input type="text" name="username" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    Role:<br>
    <select name="role" required>
        <option value="encoder">Encoder</option>
        <option value="admin">Admin</option>
    </select><br><br>

    <button type="submit" name="register">Register</button>
</form>

</body>
</html>

<?php
if(isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $date = date("Y-m-d");

    $sql = "INSERT INTO users(username,password,role,date_access)
            VALUES('$username','$password','$role','$date')";

    if($conn->query($sql)){
        echo "Registered successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
