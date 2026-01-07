function confirmDelete() {
    return confirm("Apakah kamu yakin ingin menghapus postingan ini?");
}

document.addEventListener("DOMContentLoaded", function () {
    const title = document.querySelector("input[name='judul']");
    if (title) title.focus();
});
