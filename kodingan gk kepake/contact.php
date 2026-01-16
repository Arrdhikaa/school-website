<?php
// contact.php
// --------------------------------------------------
// Script sederhana untuk menerima dan memvalidasi form contact.
// - Menerima: nama, email, pesan
// - Validasi dasar: required, email valid
// - Menampilkan pesan sukses / error
// - Tidak menggunakan library eksternal
// --------------------------------------------------

// Inisialisasi variabel
$errors = [];
$success = '';
$nama = '';
$email = '';
$pesan = '';

// Cek apakah request method POST (form dikirim)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Ambil input dan sanitasi dasar
    // trim() untuk menghapus spasi di awal/akhir
    // strip_tags() untuk menghindari HTML injection
    $nama  = isset($_POST['nama']) ? trim(strip_tags($_POST['nama'])) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $pesan = isset($_POST['pesan']) ? trim(strip_tags($_POST['pesan'])) : '';

    // VALIDASI: required
    if ($nama === '') {
        $errors[] = 'Nama harus diisi.';
    } elseif (mb_strlen($nama) < 2) {
        // validasi tambahan: minimal 2 karakter agar bukan input kosong sembunyi
        $errors[] = 'Nama terlalu pendek.';
    }

    if ($email === '') {
        $errors[] = 'Email harus diisi.';
    } else {
        // VALIDASI: format email menggunakan filter_var
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Format email tidak valid.';
        }
    }

    if ($pesan === '') {
        $errors[] = 'Pesan tidak boleh kosong.';
    } elseif (mb_strlen($pesan) < 6) {
        $errors[] = 'Pesan terlalu singkat.';
    }

    // Jika tidak ada error, proses (misal: simpan ke DB atau kirim email)
    if (empty($errors)) {
        // ------------------------------------------------------------------
        // NOTE:
        // - Pada environment production, di sini biasanya kita:
        //   1) Menyimpan data ke database (MySQL/SQLite)
        //   2) Mengirim email notifikasi (menggunakan mail() atau SMTP)
        // - Karena tidak boleh mengandalkan konfigurasi server tertentu di sini,
        //   contoh ini hanya mencoba mengirim email dengan mail() jika tersedia,
        //   dan selalu menampilkan pesan sukses pada akhirnya.
        // ------------------------------------------------------------------

        $to      = 'admin@sekolah.local'; // Ganti dengan email tujuan jika mau
        $subject = 'Pesan dari website - ' . ($nama ?: 'Pengunjung');
        $body    = "Nama: $nama\nEmail: $email\n\nPesan:\n$pesan\n";
        $headers = "From: {$nama} <{$email}>\r\n";
        $headers .= "Reply-To: {$email}\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Cek apakah fungsi mail tersedia di server
        $mail_sent = false;
        if (function_exists('mail')) {
            // Coba kirim email (jika server mendukung)
            // Jika gagal, kita tetap anggap data telah diterima (tapi bisa beri catatan)
            $mail_sent = @mail($to, $subject, $body, $headers);
        }

        // Format nama & pesan aman untuk ditampilkan kembali ke user
        $safe_name = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');

        if ($mail_sent) {
            $success = "Terima kasih, <strong>{$safe_name}</strong>! Pesanmu berhasil dikirim. Kami akan menghubungi via email.";
        } else {
            // Jika mail() tidak tersedia atau gagal, tetap tampilkan sukses
            // tetapi beri catatan bahwa email mungkin tidak terkirim.
            $success = "Terima kasih, <strong>{$safe_name}</strong>! Pesanmu berhasil diterima. (Catatan: pengiriman email otomatis tidak tersedia pada server ini.)";
        }

        // Reset form fields setelah sukses (opsional)
        $nama = $email = $pesan = '';
    }
}

// Fungsi bantu kecil untuk menampilkan value input lama dengan aman
function old($value) {
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

// Sederhana output HTML; style sudah ada di style.css yang lo pakai.
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Kontak - SMK Penerbang Roket</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Sedikit style lokal untuk tampilan pesan agar tidak bergantung penuh pada stylesheet */
    .wrap {
      max-width: 760px;
      margin: 2rem auto;
      padding: 1rem;
    }
  </style>
</head>
<body>
  <div class="wrap">
    <h2 class="text-center">Hasil Pengiriman Pesan</h2>

    <?php if (!empty($errors)): ?>
      <div class="notify error mt-2">
        <strong>Ada error:</strong>
        <ul style="margin-top:8px;">
          <?php foreach ($errors as $err): ?>
            <li><?= htmlspecialchars($err, ENT_QUOTES, 'UTF-8') ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Tampilkan kembali form agar user bisa perbaiki -->
      <div style="margin-top:1rem;">
        <form action="contact.php" method="POST">
          <input type="text" name="nama" placeholder="Nama Lengkap" required value="<?= old($nama) ?>">
          <input type="email" name="email" placeholder="Email" required value="<?= old($email) ?>">
          <textarea name="pesan" placeholder="Pesan atau pertanyaan..." required><?= old($pesan) ?></textarea>
          <button type="submit" class="btn-primary">Kirim Ulang</button>
        </form>
      </div>

    <?php else: ?>

      <?php if ($success): ?>
        <div class="notify success">
          <?= $success ?>
        </div>
      <?php else: ?>
        <div class="notify success">
          Tidak ada data yang dikirim.
        </div>
      <?php endif; ?>

      <div style="margin-top:1rem;">
        <a href="script.php" class="btn-primary" style="text-decoration:none; padding:0.6rem 0.9rem; display:inline-block;">Kembali ke Beranda</a>
      </div>

    <?php endif; ?>
  </div>
</body>
</html>
