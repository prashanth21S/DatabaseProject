<html>
<body>
<?php
    $servername = "sql12.freemysqlhosting.net";//replace
    $username = "sql12384306";//replace
    $password = "q8Wl7ThEBT";//replace
    $db="sql12384306";//replace

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
</body>
</html>