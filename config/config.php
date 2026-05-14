<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_company_profile";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Tidak dapat akses database" . mysqli_connect_error());
}
