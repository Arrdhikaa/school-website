<?php
session_start();

// ==================================================
// daftar.php
// FORM PPDB FULL (TANPA DATABASE)
// ==================================================

// Variabel pesan
$success = $_SESSION['success'] ?? "";
unset($_SESSION['success']);
$error = "";

// Jika form dikirim
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  // ================================
  // AMBIL & BERSIHKAN DATA INPUT
  // ================================
  function clean($data) {
    return htmlspecialchars(trim($data));
  }

  $nama      = clean($_POST["nama"] ?? "");
  $nisn      = clean($_POST["nisn"] ?? "");
  $tempat_lahir  = clean($_POST["tempat_lahir"] ?? "");
  $tanggal_lahir = clean($_POST["tanggal_lahir"] ?? "");
  $jk        = clean($_POST["jk"] ?? "");
  $asal      = clean($_POST["asal"] ?? "");
  $tahun     = clean($_POST["tahun"] ?? "");
  $email     = clean($_POST["email"] ?? "");
  $hp        = clean($_POST["hp"] ?? "");
  $alamat    = clean($_POST["alamat"] ?? "");
  $jurusan   = clean($_POST["jurusan"] ?? "");

  // ================================
  // VALIDASI DASAR
  // ================================
  if (
    $nama=="" || $nisn=="" || $tempat_lahir=="" ||
    $tanggal_lahir=="" || $jk=="" || $asal=="" ||
    $tahun=="" || $email=="" || $hp=="" ||
    $alamat=="" || $jurusan==""
  ) {
    $error = "Semua field wajib diisi.";
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Format email tidak valid.";
  }
  elseif (!ctype_digit($nisn) || strlen($nisn) != 10) {
    $error = "NISN harus 10 digit angka.";
  }
  else {
    $_SESSION['success'] = "Pendaftaran berhasil! Data <strong>$nama</strong> telah diterima.";
    header("Location: daftar.php");
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>PPDB SMK Penerbang Roket</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="pendaftaran">
  <div class="container">

    <form method="POST" class="form-daftar">

      <h2>PPDB SMK Penerbang Roket</h2>

      <!-- NOTIFIKASI -->
      <?php if ($error): ?>
        <div class="notify error"><?= $error ?></div>
      <?php endif; ?>

      <?php if ($success): ?>
        <div class="notify success"><?= $success ?></div>
      <?php endif; ?>

      <!-- ================= DATA SISWA ================= -->
      <h3>Data Siswa</h3>

      <input type="text" name="nama" placeholder="Nama Lengkap" required>
      <input type="text" name="nisn" placeholder="NISN" required>
      <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
      <input type="date" name="tanggal_lahir" required>
      


      <select name="jk" required>
        <option value="">Jenis Kelamin</option>
        <option>Laki-laki</option>
        <option>Perempuan</option>
      </select>
      <input type="text" name="nama ayah" placeholder="Nama Ayah" required>
      <input type="text" name="nama ibu" placeholder="Nama Ibu" required>
      <input type="text" name="nama ayah" placeholder="Nama Ayah" required>
      <!-- ================= SEKOLAH ASAL ================= -->
      <h3>Data Sekolah</h3>

      <input type="text" name="asal" placeholder="Asal Sekolah" required>
      <input type="text" name="tahun" placeholder="Tahun Lulus" required>

      <!-- ================= KONTAK ================= -->
      <h3>Kontak</h3>

      <input type="email" name="email" placeholder="Email Aktif" required>
      <input type="text" name="hp" placeholder="No HP / WhatsApp" required>
      <textarea name="alamat" placeholder="Alamat Lengkap" required></textarea>

      <!-- ================= JURUSAN ================= -->
      <h3>Pilihan Jurusan</h3>

      <select name="jurusan" required>
        <option value="">Pilih Jurusan</option>
        <option>Teknik Elektronika Penerbangan (Avionik)</option>
        <option>Aeronotika Dasar</option>
        <option>Aeromodelling & UAV (Drone)</option>
      </select>

      <button type="submit">Kirim Pendaftaran</button>

    </form>
  </div>
</section>

</body>
</html>
