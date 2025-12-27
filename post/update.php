<?php
include "../config/database.php";

$id     = $_POST['id'];
$judul  = mysqli_real_escape_string($conn, $_POST['judul']);
$konten = mysqli_real_escape_string($conn, $_POST['konten']);

mysqli_query($conn, "UPDATE posts SET judul='$judul', konten='$konten' WHERE id=$id");

header("Location: ../index.php");
?>
