<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Lomba IT - SMKN 1 Cibinong</title>
    <link rel="stylesheet" href="detail.css">
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
                    <img src="../assets/logo.jpg" class="logo">
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
    <main class="detail-page">
        <a href="home.php" class="back-link"> ← Kembali</a>

        <section class="detail-grid">
            <div class="detail-left">
                <img id="poster" src="" alt="Poster" class="detail-poster">
            </div>

            <div class="detail-right">
                <h1 id="judul" class="detail-title">Judul</h1>
                <div class="detail-line"></div>

                <p class="detail-subtitle">Syarat &amp; Ketentuan</p>

                <div class="detail-meta">
                    <div class="detail-item">
                        <img src="../assets/school.png" class="detail-icon" alt="">
                        <span id="jenjang">-</span>
                    </div>
                    <div class="detail-item">
                        <img src="../assets/people.png" class="detail-icon" alt="">
                        <span id="peserta">-</span>
                    </div>
                    <div class="detail-item">
                        <img src="../assets/date.png" class="detail-icon" alt="">
                        <span id="tanggal">-</span>
                    </div>
                    <div class="detail-item">
                        <img src="../assets/price.png" class="detail-icon" alt="">
                        <span id="harga">-</span>
                    </div>
                    <div class="detail-item">
                        <img src="../assets/location.png" class="detail-icon" alt="">
                        <span id="lokasi">-</span>
                    </div>
                </div>
                <div class="detail-desc">
                    <strong>Informasi</strong>
                    <p id="deskripsi">-</p>
                </div>
                <a id="btnDaftar" href="#" class="btn-daftar">Daftar <span class="arrow">›</span></a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-container">

            <div class="footer-left">
                <div class="footer-brand">
                    <img src="../assets/logo.jpg" class="footer-logo" alt="logo">
                    <div>
                        <h3>LombaNih</h3>
                        <p>Portal info &<br>pendaftaran lomba IT</p>
                    </div>
                </div>
            </div>

            <div class="footer-right">
                <h4>Kontak</h4>
                <div class="footer-contact">
                    <img src="../assets/wa.png" alt="wa">
                    <span>08xx-xxxx-xxxx</span>
                </div>
                <div class="footer-contact">
                    <img src="../assets/ig.png" alt="ig">
                    <span>@lombanih</span>
                </div>
                <div class="footer-contact">
                    <img src="../assets/email.png" alt="email">
                    <span>lombanih@smkn1.sch.id</span>
                </div>
            </div>
        </div>
        <hr class="footer-line">
        <p class="footer-copy">&#169; 2026 LombaNih — SMKN 1 Cibinong</p>
    </footer>

    <script>
        const lombaData = {
            game: {
                judul: "Lomba Game",
                poster: "../assets/poster1.png",
                jenjang: "SMA/SMK Sederajat",
                peserta: "1 Orang",
                tanggal: "10 - 15 Feb 2025",
                harga: "Gratis",
                lokasi: "SMKN 1 CIBINONG",
                deskripsi: "Ini deskripsi lomba game. Aturan, hadiah, timeline, dll.",
                daftar: "daftar.html?id=game"
            },
            itsupport: {
                judul: "IT Support Competition",
                poster: "assets/poster-it-support.png",
                jenjang: "SMA/SMK Sederajat",
                peserta: "Tim",
                tanggal: "20 - 25 Feb 2025",
                harga: "Rp 50.000",
                lokasi: "Online",
                deskripsi: "Ini deskripsi lomba IT Support. Syarat, ketentuan, dll.",
                daftar: "daftar.html?id=itsupport"
            }
        };

        const params = new URLSearchParams(window.location.search);
        const id = params.get("id");
        const data = lombaData[id] || lombaData["game"];

        document.getElementById("judul").textContent = data.judul;
        document.getElementById("poster").src = data.poster;
        document.getElementById("jenjang").textContent = data.jenjang;
        document.getElementById("peserta").textContent = data.peserta;
        document.getElementById("tanggal").textContent = data.tanggal;
        document.getElementById("harga").textContent = data.harga;
        document.getElementById("lokasi").textContent = data.lokasi;
        document.getElementById("deskripsi").textContent = data.deskripsi;
        document.getElementById("btnDaftar").href = data.daftar;
    </script>

</body>

</html>