<!DOCTYPE html>
<html data-ng-app="">
 <head>
 <title>Title</title>
 <meta charset="UTF-8" />
<?php
$servername = "id10198986_yochana";
$username = "id10198986_yochanachandra";
$password = "sowmichandhu";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully","\n";
// Create database
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }
$conn->close();
?>
</body>

</html>