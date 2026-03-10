<?php
include("../config/db_connect.php");

$type = $_GET['type'];

if ($type == "schools") {
    $result = $conn->query("SELECT * FROM partner_schools");
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
}

if ($type == "programs") {
    $result = $conn->query("SELECT * FROM programs");
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
}
?>
