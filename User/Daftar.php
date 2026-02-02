<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Form Pendaftaran Lomba IT</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="daftar.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
<header class="header">
        <section id="home">
            <nav>
                <div class="brand">
                    <img src="../assets/Logo.png" class="logo">
                    <h3>Lomba<span>Nih</span></h3>
                </div>
                <ul>
                    <li><a href="Home.php#home">Home</a></li>
                    <li><a href="Home.php#lomba">Lomba</a></li>
                    <li><a href="Home.php#panduan">Panduan</a></li>
                </ul>
            </nav>
        </section>
    </header><br>

<div class="container">
    <h2>Form Pendaftaran Lomba IT</h2>
    <p class="subtitle">
        Alamat Acara: SMKN 1 CIBINONG, Bogor, Jawa Barat<br>
        Hubungi Kami : 0812-3456-7890 atau your@email.com
    </p>
</div>

<main>
  <div class="container">
    <form>

      <div class="form-group">
        <label>Nama</label>
        <input type="text" placeholder="Jawaban Anda">
      </div><br>

      <div class="form-group">
        <label>Nomor</label>
        <input type="text" placeholder="Jawaban Anda">
      </div><br>

      <div class="form-group">
        <label>Email</label>
        <input type="email" placeholder="Jawaban Anda">
      </div><br>

      <div class="form-group">
        <label>No Telp</label>
        <input type="text" placeholder="Jawaban Anda">
      </div><br>

      <div class="form-group">
        <label>Kategori Lomba</label>

        <div class="radio-box">
          <label class="radio-row">
            <span>Game Developer</span>
            <input type="radio" name="kategori" value="game">
          </label>

          <label class="radio-row">
            <span>Web Design</span>
            <input type="radio" name="kategori" value="web">
          </label>

          <label class="radio-row">
            <span>IT Support</span>
            <input type="radio" name="kategori" value="it">
          </label>

          <label class="radio-row">
            <span>Networking</span>
            <input type="radio" name="kategori" value="network">
          </label>

          <label class="radio-row">
            <span>Cyber Security</span>
            <input type="radio" name="kategori" value="cyber">
          </label>
        </div>
      </div>

      <div class="form-actions">
        <button type="submit" class="btn-kirim">
          Kirim <span class="arrow">›</span>
        </button>
      </div>

    </form>
  </div>
</main>

<footer class="footer">
        <div class="footer-container">

            <div class="footer-left">
                <div class="footer-brand">
                    <img src="../assets/Logo.png" class="footer-logo" alt="logo">
                    <div>
                        <h3>LombaNih</h3>
                        <p>Portal info &<br>pendaftaran lomba IT</p>
                    </div>
                </div>
            </div>

            <div class="footer-right">
  <h4>Kontak</h4>
  <div class="footer-contact">
    <a href="https://wa.me/6285718583295?text=Halo%20saya%20ingin%20bertanya%20tentang%20lomba" target="_blank">
      <img src="../assets/wa.png" alt="wa">
      <span>0857-1858-3295</span>
    </a>
  </div>
  <div class="footer-contact">
    <a href="https://www.instagram.com/lomba.nih?igsh=MTd3MzY0ZjlhOTA5aQ==" target="_blank">
      <img src="../assets/ig.png" alt="ig">
      <span>@lombanih</span>
    </a>
  </div>
  <div class="footer-contact">
    <a href="mailto:lombanih@gmail.com">
      <img src="../assets/email.png" alt="email">
      <span>lombanih@gmail.com</span>
    </a>
  </div>
</div>

        </div>
        <hr class="footer-line">
        <p class="footer-copy">&#169; 2026 LombaNih — SMKN 1 Cibinong</p>
    </footer>

</body>
</html>
