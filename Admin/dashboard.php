<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    echo "<script>alert('Anda harus login terlebih dahulu!'); window.location.href='login.php';</script>";
    exit;
}

include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard | LombaNih</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
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
    </header>
    <br>

    <main class="page">
        <h1 class="title">REKAP DATA PENDAFTAR</h1>

        <section class="card">
            <div class="table-wrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width:70px;">No</th>
                            <th style="width:160px;">NIS</th>
                            <th style="width:170px;">Nama</th>
                            <th>Email</th>
                            <th style="width:170px;">No Telepon</th>
                            <th style="width:170px;">Kategori Lomba</th>
                            <th style="width:90px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $q = mysqli_query($koneksi, "SELECT nis, nama, email, no_telp, kategori_lomba FROM tb_peserta ORDER BY nis DESC");
                        if ($q && mysqli_num_rows($q) > 0) {
                            while ($d = mysqli_fetch_assoc($q)) {
                                $nis_safe = urlencode($d['nis']);
                                ?>
                                <tr>
                                    <td class="td-center"><?= $no ?>.</td>
                                    <td><?= htmlspecialchars($d['nis']) ?></td>
                                    <td><?= htmlspecialchars($d['nama']) ?></td>
                                    <td><?= htmlspecialchars($d['email']) ?></td>
                                    <td><?= htmlspecialchars($d['no_telp']) ?></td>
                                    <td><?= htmlspecialchars($d['kategori_lomba']) ?></td>
                                    <td class="td-actions">
                                        <a class="action-link" href="edit.php?nis=<?= $nis_safe ?>">Edit</a>
                                        <a class="action-link danger" href="hapus.php?nis=<?= $nis_safe ?>"
                                            onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                            }
                        } else { ?>
                            <tr>
                                <td colspan="7" class="empty">Belum ada data pendaftar.</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

</body>

</html>