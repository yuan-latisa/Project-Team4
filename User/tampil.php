<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Lomba IT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tampil.css">
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
    </header>

    <main class="bukti-page">
        <h1 class="bukti-title">BUKTI PENDAFTARAN</h1>

        <div class="bukti-card">
            <table class="bukti-table">
                <tr>
                    <td>NISN :</td>
                    <td id="outNisn">-</td>
                </tr>
                <tr>
                    <td>Nama :</td>
                    <td id="outNama">-</td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td id="outEmail">-</td>
                </tr>
                <tr>
                    <td>No Telepon :</td>
                    <td id="outTelp">-</td>
                </tr>
                <tr>
                    <td>Kategori Lomba :</td>
                    <td id="outKategori">-</td>
                </tr>
            </table>

            <button class="btn-cetak" onclick="window.print()">Cetak Pendaftaran</button>
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
                    <a href="https://wa.me/6285718583295?text=Halo%20saya%20ingin%20bertanya%20tentang%20lomba"
                        target="_blank">
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