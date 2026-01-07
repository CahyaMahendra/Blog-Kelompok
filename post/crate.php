<?php
include "../config/database.php";

if (isset($_POST['submit'])) {
    $judul  = mysqli_real_escape_string($conn, $_POST['judul']);
    $konten = mysqli_real_escape_string($conn, $_POST['konten']);

    if ($judul && $konten) {
        mysqli_query($conn, "INSERT INTO posts (judul, konten) VALUES ('$judul','$konten')");
        header("Location: ../index.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Post</title>
    <link rel="stylesheet" href="/asset/css/style.css">
    <script src="/asset/js/script.js"></script>
</head>
<body>

<!-- HEADER SAMA DENGAN INDEX -->
<header>
    <div class="container header-flex">
        <div class="logo">Blog Pribadi</div>
        <nav class="nav">
            <a href="/index.php">Home</a>
        </nav>
    </div>
</header>

<!-- MAIN -->
<main class="container">

    <!-- CARD POST -->
    <div class="post">
        <h3>Tambah Post Baru</h3>
        <p style="color: var(--muted); margin-bottom: 15px;">
            Silakan tulis konten blog kamu di bawah ini.
        </p>

<form method="POST">
            <input type="text" name="judul" placeholder="Judul Post" required>
            <textarea name="konten" placeholder="Tulis konten..." required></textarea>

            <button name="submit" class="btn btn-primary">Simpan</button>
            <a href="/index.php" class="btn btn-outline">Batal</a>
</form>
    </div>

</main>

<!-- FOOTER SAMA -->
<footer>
    © <?= date('Y'); ?> Blog Pribadi
</footer>

</body>
</html>
