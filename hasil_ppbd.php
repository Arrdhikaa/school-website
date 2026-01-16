<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil PPDB</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// Ambil data dari form (POST)
$nisn    = $_POST['nisn'] ?? '';
$nama     = $_POST['nama'] ?? '';
$sekolah  = $_POST['sekolah'] ?? '';

// VALIDASI MINIMAL 
if (empty($nisn) || empty($nama)) {
?>
  <section class="ppdb-section">
    <div class="ppdb-form text-center">
      <h2>⚠️ Peringatan</h2>
      <p>Data wajib tidak boleh kosong.</p>

      <div class="btn-wrapper">
        <a href="form_ppdb.php" class="btn-primary">⬅ Kembali ke Form</a>
      </div>
    </div>
  </section>
</body>
</html>
<?php
  exit;
}
?>

<section class="ppdb-section">
  <div class="ppdb-form">

    <h2 class="section-title">Data Pendaftaran PPDB</h2>

    <div class="ppdb-result">
      <p><strong>NISN:</strong> <?= htmlspecialchars($nisn) ?></p>
      <p><strong>Nama:</strong> <?= htmlspecialchars($nama) ?></p>
      <p><strong>Tempat Lahir:</strong> <?= $_POST['tempat_lahir'] ?? '-' ?></p>
      <p><strong>Tanggal Lahir:</strong> <?= $_POST['tanggal_lahir'] ?? '-' ?></p>
      <p><strong>Jenis Kelamin:</strong> <?= $_POST['jk'] ?? '-' ?></p>
      <p><strong>Alamat:</strong> <?= $_POST['alamat'] ?? '-' ?></p>

      <hr>

      <p><strong>Asal Sekolah:</strong> <?= $sekolah ?: '-' ?></p>
      <p><strong>Alamat Sekolah:</strong> <?= $_POST['alamat_sekolah'] ?? '-' ?></p>

      <hr>

      <p><strong>Nilai Bahasa Indonesia:</strong> <?= $_POST['indo'] ?? '-' ?></p>
      <p><strong>Nilai Matematika:</strong> <?= $_POST['mtk'] ?? '-' ?></p>
      <p><strong>Nilai IPA:</strong> <?= $_POST['ipa'] ?? '-' ?></p>

      <hr>

      <p><strong>Nama Ayah:</strong> <?= $_POST['ayah'] ?? '-' ?></p>
      <p><strong>Nama Ibu:</strong> <?= $_POST['ibu'] ?? '-' ?></p>
    </div>

    <div class="btn-wrapper">
      <a href="form_ppdb.php" class="btn-primary">⬅ Kembali ke Form</a>
      <a href="index.html" class="btn-secondary">🏠 Beranda</a>
    </div>

  </div>
</section>

</body>
</html>
