📘 Project Website PPDB Sekolah


📌 Deskripsi Project

Project ini merupakan website PPDB (Penerimaan Peserta Didik Baru) sederhana yang dibuat sebagai tugas perkuliahan Web Programming. Website ini menampilkan informasi sekolah serta menyediakan form pendaftaran siswa baru dengan validasi dasar menggunakan HTML, CSS, dan PHP (GET & POST) tanpa database.

Project ini berfokus pada:

Pemahaman alur form (input → validasi → output)

Penerapan desain UI sederhana dan konsisten

Simulasi sistem PPDB secara statis (non-produksi)




🛠️ Teknologi yang Digunakan

HTML5 – Struktur halaman

CSS3 – Tampilan dan layout (Flexbox & Grid)

PHP Native – Proses form & validasi (tanpa framework)

Web Server Lokal – XAMPP / Laragon / localhost




📂 Struktur Folder

/ppdb-project
│── index.html          # Halaman utama website sekolah
│── form_ppdb.php       # Form pendaftaran PPDB
│── hasil_ppdb.php      # Halaman hasil & validasi pendaftaran
│── style.css           # File styling utama
│── /image              # Asset gambar & icon
│── README.md           # Dokumentasi project




🧾 Fitur Utama

Halaman profil sekolah

Informasi program & ekstrakurikuler

Form pendaftaran PPDB

Validasi input wajib

Validasi nilai rapor (minimal 80)

Pembatasan panjang NISN (simulasi database)

Halaman hasil pendaftaran

Desain responsif & modern




📝 Validasi Form

Validasi yang diterapkan:

Semua field wajib diisi

NISN dibatasi maksimal 10 karakter

Nilai Bahasa Indonesia, Matematika, dan IPA minimal 80

Validasi dilakukan di:

HTML (client-side) menggunakan required & min

PHP (server-side) menggunakan kondisi if


> Validasi ini bersifat simulasi untuk keperluan pembelajaran.





🔁 Alur Sistem

1. User membuka halaman website

2. User masuk ke halaman Form PPDB

3. User mengisi data pendaftaran

4. Data dikirim menggunakan metode POST

5. PHP melakukan validasi data

6. Jika data tidak valid → muncul pesan error

7. Jika valid → tampil halaman hasil pendaftaran





⚠️ Catatan Penting

Project tidak menggunakan database

Data tidak disimpan permanen

Digunakan untuk pembelajaran dan tugas kampus, bukan produksi



🎯 Tujuan Pembelajaran

Memahami konsep form submission

Menerapkan validasi input

Menghubungkan CSS eksternal ke PHP

Melatih struktur project web sederhana



👤 Author

Nama  : arrdh
Prodi : sistem infromasi


📄 Lisensi

Project ini dibuat untuk keperluan akademik dan bebas digunakan untuk pembelajaran.
