<?php
include "../config/database.php";
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM posts WHERE id=$id");
$post = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <link rel="stylesheet" href="/asset/css/style.css">
</head>
<body>

<header>
    <div class="container header-flex">
        <div class="logo">Edit Post</div>
        <nav class="nav">
            <a href="/index.php">Home</a>
        </nav>
    </div>
</header>

<main class="container">
    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?= $post['id']; ?>">
        <input type="text" name="judul" value="<?= $post['judul']; ?>" required>
        <textarea name="konten" required><?= $post['konten']; ?></textarea>
        <button class="btn btn-primary">Update</button>
        <a class="btn btn-outline" href="/index.php">Batal</a>
    </form>
</main>

<footer>
    © <?= date('Y'); ?> Blog Pribadi
</footer>

</body>
</html>

