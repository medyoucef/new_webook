<?php
$servername = "localhost";
$username = "u290663640_qatar";
$password = "c>F^7/|bX0";
$dbname = "u290663640_qatar";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
