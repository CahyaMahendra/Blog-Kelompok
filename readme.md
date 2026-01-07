# Blog Pribadi - PHP Native

## Deskripsi Singkat
Website ini adalah **blog pribadi berbasis PHP Native dan MySQL** yang memungkinkan pengguna untuk:
- Membuat postingan baru (Create)
- Melihat daftar postingan (Read)
- Mengedit postingan (Update)
- Menghapus postingan (Delete)

Front-end menggunakan **HTML, CSS, dan JavaScript** untuk interaksi yang lebih baik. Website ini dirancang sederhana, rapi, dan mudah digunakan.

---

## Daftar Anggota
| Nama | NIM | GitHub |
|------|-----|--------|
| [CAHYA MAHENDRA] | [240030004] | [CahyaMahendra] |
| [RADIT GEDE BAGUS DWI PUTRA] | [240030047] | [De-Dit] |
| [I KADEK DARMAWAN NANDHIKA PUTRA] | [240030069] | [] |
| [I PUTU AGUS RISNATA SUASTAWAN] | [240030416] | [agusrisnata] |

---

## Lingkungan Pengembangan
- **Bahasa Pemrograman:** PHP 8.x (Native) 
- **Database:** MySQL / MariaDB 
- **Server Lokal:** Built-in web server bawaan PHP
- **Editor:** Visual Studio Code atau sejenisnya  
- **Browser:** Chrome / Firefox  

---

## Struktur Folder

Blog-Kelompok/
│
├── config/
│ └── database.php # File koneksi database
│
├── post/
│ ├── create.php # Halaman untuk menambah post
│ ├── edit.php # Halaman untuk mengedit post
│ ├── update.php # Proses update post
│ └── delete.php # Proses hapus post
│
├── assets/
│ ├── css/
│ │ └── style.css # Styling front-end
│ └── js/
│ └── script.js # Script JS untuk aksi hapus
│
├── index.php # Halaman utama menampilkan semua post
├── detail.php # Halaman detail post
└── README.md # File dokumentasi ini


---

## Cara Instalasi dan Menjalankan Aplikasi

1. **Clone repository** ke folder lokal:
   ```bash
   git clone [URL_REPOSITORY]

2. **Import database**:
  a. Buka phpMyAdmin atau MySQL client
	b. Buat database blog_db
	c. Import file SQL berikut:
	
```
CREATE TABLE posts (
	id INT AUTO_INCREMENT PRIMARY KEY,
	judul VARCHAR(200) NOT NULL,
	konten TEXT NOT NULL,
	tanggal DATETIME DEFAULT CURRENT_TIMESTAMP
);
```
	
3. **Atur koneksi database** di config/database.php sesuai user, password, dan host lokal:
```
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db   = "blog_db";
```

4. **Jalankan server lokal**:
`  php -S localhost:8000`
	
## Cara Menggunakan Website

1. **Halaman utama**
   a. Menampilkan daftar semua post
	 b. Tombol Detail, Edit, dan Hapus tersedia di setiap postingan
	 c. Tombol + Post di header untuk membuat postingan baru
	
2. **Menambahkan postingan baru**
   a. Klik tombol + Post
	 b. Isi Judul dan Konten
	 c. Klik Simpan
	 
3. **Melihat Detail Postingan**
   a. Klik tombol Detail pada postingan
	 b. Menampilkan konten lengkap di dalam border rapi
	 c. Tombol Kembali, Edit, Hapus tersedia
	 
4. **Mengedit Postingan**
   a. Klik tombol Edit
	 b. Ubah judul atau konten
	 c. Klik Update untuk menyimpan
	 
5. **Menghapus Postingan**
   a. Klik tombol Hapus
	 b. Konfirmasi muncul sebelum benar-benar dihapus
	 
## Fitur Tambahan
1. Konfirmasi penghapusan menggunakan JavaScript
2. Tampilan rapi dengan border dan padding agar teks tidak keluar dari layout
3. Responsif sederhana untuk desktop dan tablet
4. Word-wrap dan overflow handling agar teks panjang tidak merusak layout

## Catatan
 1. Pastikan PHP dan MySQL sudah berjalan sebelum mengakses website
 2. Gunakan browser modern untuk tampilan yang optimal
 3. Selalu backup database sebelum melakukan pengujian penghapusan