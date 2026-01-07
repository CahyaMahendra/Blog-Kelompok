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
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Post</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<h2>Tambah Postingan</h2>

<form method="POST">
    <input type="text" name="judul" placeholder="Judul" required>
    <textarea name="konten" placeholder="Konten" required></textarea>
    <button type="submit" name="submit">Simpan</button>
</form>

<a href="../index.php">Kembali</a>

</body>
</html>
