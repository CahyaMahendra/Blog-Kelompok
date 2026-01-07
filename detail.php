<?php
include "config/database.php";

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM posts WHERE id=$id");
$post = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $post['judul']; ?> | Blog Pribadi</title>
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
    <div class="post detail-post">
        <h1><?= $post['judul']; ?></h1>
        <small class="post-date"><?= $post['tanggal']; ?></small>

        <div class="post-content">
            <?= nl2br($post['konten']); ?>
        </div>

        <div class="post-actions">
            <a href="index.php" class="btn btn-outline">← Kembali</a>
            <a href="post/edit.php?id=<?= $post['id']; ?>" class="btn btn-outline">Edit</a>
            <a href="post/delete.php?id=<?= $post['id']; ?>" 
               class="btn btn-danger"
               onclick="return confirmDelete()">Hapus</a>
        </div>
    </div>
</main>

<footer>
    © <?= date('Y'); ?> Blog Pribadi
</footer>

</body>
</html>
