<?php
// FORM PENDAFTARAN PPDB 
// File : form_ppdb.php
// Method : POST
// Tanpa Database
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form PPDB</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="ppdb-section">
  <div class="container">

    <div class="section-title">
      <h2>Form Pendaftaran PPDB</h2>
      <p>Silakan isi data dengan benar</p>
    </div>

    <form action="hasil_ppbd.php" method="POST" class="ppdb-form">

      <h3>Data Pribadi Siswa</h3>

      <label>NISN</label>
      <input type="number" name="nisn">

      <label>Nama Lengkap</label>
      <input type="text" name="nama">

      <label>Tempat Lahir</label>
      <input type="text" name="tempat_lahir">

      <label>Tanggal Lahir</label>
      <input type="date" name="tanggal_lahir">

      <label>Jenis Kelamin</label>
      <select name="jk">
        <option value="">-- Pilih --</option>
        <option>Laki-laki</option>
        <option>Perempuan</option>
      </select>

      <label>Alamat</label>
      <textarea name="alamat"></textarea>

      <h3>Data Asal Sekolah</h3>

      <label>Nama Sekolah</label>
      <input type="text" name="sekolah">

      <label>Alamat Sekolah</label>
      <textarea name="alamat_sekolah"></textarea>

      <h3>Data Nilai</h3>

      <label>Nilai Bahasa Indonesia</label>
      <small class="hint">Minimal nilai 80</small>
      <input type="number" step="0.01" name="indo">

      <label>Nilai Matematika</label>
      <small class="hint">Minimal nilai 80</small>
      <input type="number" step="0.01" name="mtk">

      <label>Nilai IPA</label>
      <small class="hint">Minimal nilai 80</small>
      <input type="number" step="0.01" name="ipa">

      <h3>Data Orang Tua</h3>

      <label>Nama Ayah</label>
      <input type="text" name="ayah">

      <label>Nama Ibu</label>
      <input type="text" name="ibu">

      <div class="btn-wrapper">
        <button type="submit" class="btn-primary">
            Kirim Pendaftaran
        </button>

        <a href="index.html" class="btn-secondary">
            Kembali ke Beranda
        </a>
      </div>
 

    </form>

  </div>
</section>


</body>
</html>
