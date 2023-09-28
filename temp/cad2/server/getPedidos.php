<?php

include("_Database.php");

$query = "SELECT * FROM pedidos limit 15";
$result = $db->query($query);

$rows = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($rows);
?>