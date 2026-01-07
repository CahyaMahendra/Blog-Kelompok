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
