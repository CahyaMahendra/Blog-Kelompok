<?php
include "config/database.php";
$data = mysqli_query($conn, "SELECT * FROM posts ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Pribadi</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="asset/js/script.js"></script>
</head>
<body>

<header>
    <div class="container header-flex">
        <div class="logo">Blog Pribadi</div>
        <nav class="nav">
            <a href="index.php">Home</a>
            <a href="post/crate.php" class="btn btn-primary">+ Post</a>
        </nav>
    </div>
</header>

<main class="container">
<?php while ($row = mysqli_fetch_assoc($data)) : ?>
    <div class="post">
        <h3><?= $row['judul']; ?></h3>
        <small><?= $row['tanggal']; ?></small>
        <p><?= substr($row['konten'], 0, 120); ?>...</p>

        <a class="btn btn-outline" href="detail.php?id=<?= $row['id']; ?>">Detail</a>
        <a class="btn btn-outline" href="post/edit.php?id=<?= $row['id']; ?>">Edit</a>
        <a class="btn btn-danger" href="post/delete.php?id=<?= $row['id']; ?>" onclick="return confirmDelete()">Hapus</a>
    </div>
<?php endwhile; ?>

<footer>
    © <?= date('Y'); ?> Blog Pribadi
</footer>