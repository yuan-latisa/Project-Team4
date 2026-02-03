<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    echo "<script>alert('Anda harus login terlebih dahulu!'); window.location.href='login.php';</script>";
    exit;
}

include "koneksi.php";

if (!isset($_GET['nis'])) {
    echo "<script>alert('NIS tidak ditemukan!'); window.location.href='dashboard.php';</script>";
    exit;
}

$nis = mysqli_real_escape_string($koneksi, $_GET['nis']);
$q = mysqli_query($koneksi, "SELECT * FROM tb_peserta WHERE nis='$nis' LIMIT 1");
$data = mysqli_fetch_assoc($q);

if (!$data) {
    echo "<script>alert('Data peserta tidak ditemukan!'); window.location.href='dashboard.php';</script>";
    exit;
}

$kategori = $data['kategori_lomba'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Peserta | LombaNih</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="edit.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
<header class="header">
  <section id="home">
    <nav>
      <div class="brand">
        <img src="../assets/Logo.png" class="logo" alt="logo">
        <h3>Lomba<span>Nih</span></h3>
      </div>

      <ul class="menu">
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </section>
</header><br>

<div class="container">
  <h2>Edit Data Peserta</h2>
  <p class="subtitle">
    Ubah data peserta lalu klik Update.<br>
    NIS digunakan sebagai identitas data (tidak diubah).
  </p>
</div>

<main>
  <div class="container">
    <form method="POST" action="update.php">

      <div class="form-group">
        <label>NIS</label>
        <input type="text" name="nis" value="<?= htmlspecialchars($data['nis']) ?>" readonly>
      </div><br>

      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required>
      </div><br>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="<?= htmlspecialchars($data['email']) ?>" required>
      </div><br>

      <div class="form-group">
        <label>No Telp</label>
        <input type="text" name="no_telp" value="<?= htmlspecialchars($data['no_telp']) ?>" required>
      </div><br>

      <div class="form-group">
        <label>Kategori Lomba</label>

        <div class="radio-box">
          <?php
          $opsi = ["Game Developer","Web Design","IT Support","Networking","Cyber Security"];
          foreach ($opsi as $op) {
              $checked = ($kategori === $op) ? "checked" : "";
              ?>
              <label class="radio-row">
                <span><?= htmlspecialchars($op) ?></span>
                <input type="radio" name="kategori_lomba" value="<?= htmlspecialchars($op) ?>" <?= $checked ?> required>
              </label>
              <?php
          }
          ?>
        </div>
      </div>

      <div class="form-actions">
        <button type="submit" class="btn-kirim">
          Update <span class="arrow">›</span>
        </button>

        <button type="button" class="btn-kirim" onclick="window.location.href='dashboard.php'">
          <span class="arrow-left">‹</span> Batal
        </button>
      </div>

    </form>
  </div>
</main>

</body>
</html>
