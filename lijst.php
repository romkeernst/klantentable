<?php
$dbhost = "localhost";
$user = "root";
$pass = "";
$dbname = "trash";

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $user, $pass);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$stmt = $conn->query("SELECT * FROM mytable");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;
?>