<?php
include "config/database.php";
$data = mysqli_query($conn, "SELECT * FROM posts ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Pribadi</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
