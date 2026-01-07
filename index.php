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

<h2>Blog Pribadi</h2>
<a href="post/crate.php">+ Tambah Post</a>

<?php while ($row = mysqli_fetch_assoc($data)) : ?>
    <div class="post">
        <h3><?= $row['judul']; ?></h3>
        <small><?= $row['tanggal']; ?></small>
        <p><?= substr($row['konten'], 0, 100); ?>...</p>
        <a href="post/edit.php?id=<?= $row['id']; ?>">Edit</a> |
        <a href="post/delete.php?id=<?= $row['id']; ?>" onclick="return confirmDelete()">Hapus</a>
    </div>
<?php endwhile; ?>

</body>
</html>