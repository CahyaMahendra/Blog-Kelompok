<?php
include "../config/database.php";

if (isset($_POST['submit'])) {
    $judul  = mysqli_real_escape_string($conn, $_POST['judul']);
    $konten = mysqli_real_escape_string($conn, $_POST['konten']);

    if ($judul != "" && $konten != "") {
        mysqli_query($conn, "INSERT INTO posts (judul, konten) VALUES ('$judul', '$konten')");
        header("Location: ../index.php");
    }
}
?>