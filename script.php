<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK Penerbang Roket</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<!--header/navigation bar-->
  <header>
    <div class="container">
    <!--for left box-->
      <div class="left-box">
        <div class="school_logo"></div>
        <h2>SMK Penerbang Roket</h2>
      </div>
      
    <!--for navigation-->
      <nav>
        <a href="#about">Tentang</a>
        <a href="#programs">Program</a>
        <a href="#fasilitas">Fasilitas</a>
        <a href="#ekstrakurikuler">Ekstrakurikuler</a>
        <a href="form_ppdb.php" id="daftar-button">Daftar PPDB</a>
      </nav>
    </div>
  </header>


<!--section hero-->
  <section class="hero">
    <div class="hero-content">
      <h3>SMK Penerbang Roket</h3>
      <h4>Membentuk Generasi Penerbang dan Inovator Roket Masa Depan</h4>
      <p>Bersama SMK Penerbang Roket, langit bukan lagi batas - melainkan awal dari petualanganmu.</p>
      <a href="form_ppdb.php" class="">Daftar Sekarang</a>
    </div>
  </section>

<!--section about-->
  <section id="about" class="about">
    <div class="container">
      <h2 class="section-title">Tentang Sekolah</h2>
      <p class="tentang-sekolah">SMK Penerbangan Roket adalah sekolah menengah kejuruan berbasis teknologi kedirgantaraan yang dirancang khusus untuk mencetak generasi muda Indonesia yang siap berkarier di dunia penerbangan, permesinan, dan inovasi teknologi roket. Kami hadir sebagai lembaga pendidikan yang berkomitmen memberikan pembelajaran profesional, modern, dan relevan dengan perkembangan industri aviasi global.</p>
    </div>
  </section>

<!--section programs-->
  <section id="programs" class="class">
    <div class="container">
      <div class="card">
        <h3>Teknik Elektronika Penerbangan (Avionik)</h3>
        <p>Mempelajari instrumen pesawat, navigasi, komunikasi, wiring pesawat, sensor kontrol, dan sistem autopilot sederhana</p>
      </div>
      <div class="card">
        <h3>Aeronotika Dasar</h3>
        <p>Dasar-dasar fisika penerbangan, struktur sayap, aerodinamika, gaya-gaya penerbangan, dan prinsip gaya angkat (lift)</p>
      </div>
      <div class="card">
        <h3>Aeromodelling & UAV (Drone)</h3>
        <p>Fokus pada perakitan pesawat mini, kontrol penerbangan, perancangan sayap, sistem kinematika drone, dan uji terbang</p>
      </div>
    </div>
  </section>

<!--section gallery-->
  <section id="fasilitas" class="fasilitas">
    <h2 class="section-title">Fasilitas</h2>
      <div class="grid-gallery">

        <div class="gallery-item">
          <img src="image\WhatsApp Image 2025-12-10 at 20.07.46_dbc336e6.jpg" alt="Laboratorium">
          <span>Laboratorium Praktikum</span>
        </div>

        <div class="gallery-item">
          <img src="image\WhatsApp Image 2025-12-10 at 20.07.37_afd9fe65.jpg" alt="Gym">
          <span>Gym</span>
        </div>

        <div class="gallery-item">
          <img src="image\WhatsApp Image 2025-12-10 at 20.07.47_e107ea12.jpg" alt="Perpustakaan">
          <span>Perpustakaan</span>
        </div>

        <div class="gallery-item">
          <img src="image\WhatsApp Image 2025-12-10 at 20.07.47_81367757.jpg" alt="Pengujian Drone">
          <span>Tempat Pengujian Drone</span>
        </div>

        <div class="gallery-item">
          <img src="image\WhatsApp Image 2025-12-10 at 20.07.42_02faa5f4.jpg" alt="Laboratorium">
          <span>Laboratorium</span>
        </div>

        <div class="gallery-item">
          <img src="image\WhatsApp Image 2025-12-10 at 20.07.39_b1377988.jpg" alt="Perpustakaan">
          <span>Simulasi Penerbangan</span>
        </div>

      </div>
  </section>

<!--section ekstrakurikuler-->
  <section id="ekstrakurikuler" class="ekstrakurikuler">
    <h2 class="section-title">Ekstrakurikuler</h2>

    <div class="grid-ekstra">

      <div class="ekstra-card">
        <img src="image\IMG_6028.JPG" alt="Klub Roket">
        <div class="ekstra-content">
          <h4>Klub Roket</h4>
          <p>Eksperimen roket air & propulsi dasar</p>
        </div>
      </div>

      <div class="ekstra-card">
        <img src="image\IMG_6028.JPG" alt="Drone Club">
        <div class="ekstra-content">
          <h4>Drone Club</h4>
          <p>Penerbangan & perakitan UAV</p>
        </div>
      </div>

      <div class="ekstra-card">
        <img src="image\IMG_5993.JPG" alt="Robotics">
        <div class="ekstra-content">
          <h4>Robotics</h4>
          <p>Otomasi & kontrol dasar</p>
        </div>
      </div>

    </div>
  </section>



<!--footer-->
  <footer class="footer">
  <div class="container footer-grid">

    <!-- Kolom 1: Identitas -->
    <div class="footer-col">
      <h3>SMK Penerbang Roket</h3>
      <p>Membentuk Generasi Penerbang & Inovator Roket Masa Depan</p>

      <div class="social">
        <a href="#">
          <img src="icon\facebook.png" alt="fb">
        </a>
        <a href="#">
          <img src="icon\instagram.png" alt="ig">
        </a>
        <a href="#">
          <img src="icon\youtube.png" alt="yt">
        </a>
      </div>
    </div>

    <!-- Kolom 2: Aplikasi / Link -->
    <div class="footer-col">
      <h4>Link Akademik</h4>
      <ul>
        <li><a href="form_ppdb.php">PPDB Online</a></li>
        <li><a href="#">E-Learning</a></li>
        <li><a href="#">Portal Siswa</a></li>
      </ul>
    </div>

    <!-- Kolom 3: Partner -->
    <div class="footer-col">
      <h4>Partner</h4>
      <ul>
        <li>PT Dirgantara Indonesia</li>
        <li>LAPAN</li>
        <li>BRIN</li>
      </ul>
    </div>

    <!-- Kolom 4: Alamat -->
    <div class="footer-col">
      <h4>Kontak</h4>
      <p>Jl. Berita Angkasa No. 11</p>
      <p>Jakarta, Indonesia</p>
      <p>WA: 0887-7885-9660</p>
      <p>Email: info@smkroket.sch.id</p>
    </div>

  </div>

  <!-- Sub Footer -->
  <div class="footer-bottom">
    <p>© 2025 SMK Penerbang Roket</p>
  </div>
</footer>

</body>
</html>