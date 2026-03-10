<?php
include("../config/db_connect.php");

$school = $_POST['school_name'];
$file = $_FILES['logo']['name'];
$tmp  = $_FILES['logo']['tmp_name'];

$path = "../uploads/logos/" . time() . $file;
move_uploaded_file($tmp, $path);

$sql = "INSERT INTO partner_schools (school_name, logo)
        VALUES ('$school', '$path')";

$conn->query($sql);
echo "uploaded";
?>
