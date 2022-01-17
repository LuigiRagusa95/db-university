<?php
require_once __DIR__ . '/connection.php';

$query = "SELECT * FROM `departments`";
$result = $connection->query($query);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $departments[] = $row;
    }
} else {
    echo "no result found!";
}

mysqli_close($connection);
