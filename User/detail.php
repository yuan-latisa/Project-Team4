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

    <main class="detail-page">
        <a href="Home.php" class="back-link"> ‹ Kembali</a>

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
                <a id="btnDaftar" href="Daftar.php" class="btn-daftar">Daftar <span class="arrow">›</span></a>
            </div>
        </section>
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

    <script>
        const lombaData = {
            web: {
                judul: "Web Design Challenge",
                poster: "../assets/poster1.png",
                jenjang: "SMA/SMK Sederajat",
                peserta: "Individu (1 Orang)",
                tanggal: "10 - 15 Feb 2026",
                harga: "Rp 15.000 per tim",
                lokasi: "Offline (SMKN 1 CIBINONG)",
                deskripsi:
                    "🚀 Saatnya Tunjukkan Kreativitasmu! Pendaftaran Creative Web Design Challenge Telah Dibuka 🌐🎨\n\n" +
                    "✨ Creative Web Design Challenge 2026 ✨\n" +
                    "Creative Web Design Challenge hadir sebagai ajang kompetisi bagi pelajar untuk menunjukkan kemampuan dalam merancang website yang menarik, modern, serta mudah digunakan.\n\n" +
                    "Lomba ini menggabungkan kreativitas visual, fungsi teknis, dan pengalaman pengguna (UI/UX) untuk menciptakan desain web terbaik!\n\n" +
                    "🚀 Ayo buktikan ide dan skill desain web kamu sekarang juga!\n\n" +
                    "📌 Informasi Pendaftaran:\n" +
                    "📅 Tanggal Pendaftaran: 10 – 15 Februari 2025\n\n" +
                    "📄 Syarat & Ketentuan:\n" +
                    "- Peserta merupakan pelajar SMA / SMK\n" +
                    "- Perlombaan dilakukan secara individu (1 orang)\n" +
                    "- Lomba dilaksanakan secara offline\n" +
                    "- Peserta wajib hadir langsung di lokasi lomba\n\n" +
                    "📍 Tempat Lomba:\n" +
                    "SMKN 1 Cibinong\n\n" +
                    "💰 Biaya Registrasi: Rp15.000\n\n" +
                    "🏆 Hadiah Lomba:\n" +
                    "- Juara 1: Rp300.000 + Sertifikat\n" +
                    "- Juara 2: Rp200.000 + Sertifikat\n" +
                    "- Juara 3: Rp100.000 + Sertifikat\n\n" +
                    "📅 Tanggal Pelaksanaan: 20 Februari 2026\n\n" +
                    "🚀 Jangan lewatkan kesempatan ini untuk menjadi Web Designer muda berbakat dan tunjukkan karya terbaikmu!\n\n" +
                    "#WebDesignChallenge #CreativeWebDesign #SMKN1Cibinong #ITCompetition2026",
                daftar: "Daftar.php"
            },

            game: {
                judul: "Game Creation Battle 2026",
                poster: "../assets/poster1.png",
                jenjang: "SMA/SMK Sederajat",
                peserta: "Tim (4 orang)",
                tanggal: "20 - 25 Feb 2026",
                harga: "Rp 20.000 per tim",
                lokasi: "Online",
                deskripsi:
                    "🎮 Saatnya Ciptakan Game Terbaikmu! Pendaftaran Game Creation Battle 2026 Telah Dibuka 🚀🕹️\n\n" +
                    "✨ Game Creation Battle 2026 ✨\n" +
                    "Game Creation Battle adalah ajang kompetisi bagi pelajar untuk berkolaborasi dalam menciptakan sebuah game yang kreatif, seru, dan fungsional.\n\n" +
                    "Lomba ini menguji kemampuan dalam game design, programming, teamwork, serta inovasi dalam dunia pengembangan game!\n\n" +
                    "🚀 Ayo tunjukkan ide game terbaikmu bersama tim!\n\n" +
                    "📌 Informasi Pendaftaran:\n" +
                    "📅 Tanggal Pendaftaran: 20 – 25 Februari 2026\n\n" +
                    "📄 Syarat & Ketentuan:\n" +
                    "- Peserta merupakan pelajar SMA / SMK\n" +
                    "- Perlombaan dilakukan secara tim (4 orang)\n" +
                    "- Lomba dilaksanakan secara online\n" +
                    "- Setiap tim wajib mengumpulkan project game sebelum batas waktu\n\n" +
                    "💰 Biaya Registrasi: Rp20.000 per tim\n\n" +
                    "🏆 Hadiah Lomba:\n" +
                    "- Juara 1: Rp500.000 + Sertifikat\n" +
                    "- Juara 2: Rp300.000 + Sertifikat\n" +
                    "- Juara 3: Rp200.000 + Sertifikat\n\n" +
                    "📅 Tanggal Pengumpulan Project: 10 Maret 2026\n\n" +
                    "🎮 Jangan lewatkan kesempatan untuk menjadi Game Developer muda berbakat dan ciptakan game impianmu!\n\n" +
                    "#GameCreationBattle #GameDevCompetition #ITCompetition2026",
                daftar: "Daftar.php"
            },

            itSupport: {
                judul: "Game Creation Battle 2026",
                poster: "../assets/poster1.png",
                jenjang: "SMA/SMK Sederajat",
                peserta: "Tim (4 orang)",
                tanggal: "20 - 25 Apr 2026",
                harga: "Rp 15.000 per tim",
                lokasi: "Offline (SMKN 1 CIBINONG)",
                deskripsi:
                    "🛠️ Saatnya Uji Skill Teknismu! Pendaftaran IT Support Skills Championship Telah Dibuka 💻🚀\n\n" +
                    "✨ IT Support Skills Championship 2026 ✨\n" +
                    "IT Support Skills Championship adalah ajang kompetisi bagi pelajar untuk menguji kemampuan dalam mengelola, memperbaiki, serta mengamankan infrastruktur teknologi informasi.\n\n" +
                    "Lomba ini mencakup troubleshooting komputer, instalasi sistem operasi, konfigurasi jaringan dasar, serta penanganan masalah teknis secara cepat dan tepat.\n\n" +
                    "🚀 Ayo buktikan kamu siap menjadi IT Support handal!\n\n" +
                    "📌 Informasi Pendaftaran:\n" +
                    "📅 Tanggal Pendaftaran: 20 – 25 April 2026\n\n" +
                    "📄 Syarat & Ketentuan:\n" +
                    "- Peserta merupakan pelajar SMA / SMK\n" +
                    "- Perlombaan dilakukan secara individu (1 orang)\n" +
                    "- Lomba dilaksanakan secara offline\n" +
                    "- Peserta wajib hadir langsung di lokasi lomba\n\n" +
                    "📍 Tempat Lomba:\n" +
                    "SMKN 1 Cibinong\n\n" +
                    "💰 Biaya Registrasi: Rp15.000\n\n" +
                    "🏆 Hadiah Lomba:\n" +
                    "- Juara 1: Rp350.000 + Sertifikat\n" +
                    "- Juara 2: Rp250.000 + Sertifikat\n" +
                    "- Juara 3: Rp150.000 + Sertifikat\n\n" +
                    "📅 Tanggal Pelaksanaan: 30 April 2026\n\n" +
                    "🛠️ Jangan lewatkan kesempatan untuk menjadi IT Support muda yang siap menghadapi tantangan dunia teknologi!\n\n" +
                    "#ITSupportChampionship #TechSupportContest #SMKN1Cibinong #ITCompetition2026",
                daftar: "Daftar.php"
            },

            network: {
                judul: "Network Engineer Contest",
                poster: "../assets/poster1.png",
                jenjang: "SMA/SMK Sederajat",
                peserta: "Tim (2 orang)",
                tanggal: "10 - 15 Feb 2026",
                harga: "Rp 20.000 per tim",
                lokasi: "Offline (SMKN 1 CIBINONG)",
                deskripsi:
                    "📡 Saatnya Bangun Jaringan Terbaikmu! Pendaftaran Network Engineer Contest Telah Dibuka 🌐⚡\n\n" +
                    "✨ Network Engineer Contest 2026 ✨\n" +
                    "Network Engineer Contest adalah kompetisi bagi pelajar untuk menguji kemampuan dalam merancang, membangun, serta mengonfigurasi infrastruktur jaringan komputer.\n\n" +
                    "Lomba ini melatih skill networking seperti pengaturan IP Address, konfigurasi router & switch, hingga memastikan jaringan berjalan stabil dan aman.\n\n" +
                    "🚀 Ayo tunjukkan kemampuanmu menjadi Network Engineer masa depan bersama tim!\n\n" +
                    "📌 Informasi Pendaftaran:\n" +
                    "📅 Tanggal Pendaftaran: 10 – 15 Februari 2025\n\n" +
                    "📄 Syarat & Ketentuan:\n" +
                    "- Peserta merupakan pelajar SMA / SMK\n" +
                    "- Perlombaan dilakukan secara tim (2 orang)\n" +
                    "- Lomba dilaksanakan secara offline\n" +
                    "- Peserta wajib hadir langsung di lokasi lomba\n\n" +
                    "📍 Tempat Lomba:\n" +
                    "SMKN 1 Cibinong\n\n" +
                    "💰 Biaya Registrasi: Rp20.000 per tim\n\n" +
                    "🏆 Hadiah Lomba:\n" +
                    "- Juara 1: Rp400.000 + Sertifikat\n" +
                    "- Juara 2: Rp250.000 + Sertifikat\n" +
                    "- Juara 3: Rp150.000 + Sertifikat\n\n" +
                    "📅 Tanggal Pelaksanaan: 22 Februari 2026\n\n" +
                    "📡 Jangan lewatkan kesempatan untuk menjadi ahli jaringan komputer dan tunjukkan skill networking terbaikmu!\n\n" +
                    "#NetworkingContest #NetworkEngineer #SMKN1Cibinong #ITCompetition2026",
                daftar: "Daftar.php"
            },

            cyber: {
                judul: "Cyber Security Warzone",
                poster: "../assets/poster1.png",
                jenjang: "SMA/SMK Sederajat",
                peserta: "Individu (1 orang)",
                tanggal: "20 - 23 Feb 2026",
                harga: "Gratis",
                lokasi: "Online",
                deskripsi:
                    "🔐 Saatnya Uji Skill Keamanan Siber! Pendaftaran Cyber Security Warzone Telah Dibuka ⚔️💻\n\n" +
                    "✨ Cyber Security Warzone 2026 ✨\n" +
                    "Cyber Security Warzone adalah kompetisi bagi pelajar untuk menguji kemampuan dalam melindungi sistem, menemukan celah keamanan, serta melakukan peretasan secara etis (ethical hacking).\n\n" +
                    "Lomba ini cocok untuk kamu yang tertarik pada dunia cybersecurity, penetration testing, dan digital defense!\n\n" +
                    "🚀 Ayo buktikan kemampuanmu menjadi Cyber Defender masa depan!\n\n" +
                    "📌 Informasi Pendaftaran:\n" +
                    "📅 Tanggal Pendaftaran: 20 – 23 Februari 2026\n\n" +
                    "📄 Syarat & Ketentuan:\n" +
                    "- Peserta merupakan pelajar SMA / SMK\n" +
                    "- Perlombaan dilakukan secara individu (1 orang)\n" +
                    "- Lomba dilaksanakan secara online\n" +
                    "- Peserta wajib mengikuti challenge sesuai jadwal yang ditentukan\n\n" +
                    "💰 Biaya Registrasi: Gratis\n\n" +
                    "🏆 Hadiah Lomba:\n" +
                    "- Juara 1: Rp300.000 + Sertifikat\n" +
                    "- Juara 2: Rp200.000 + Sertifikat\n" +
                    "- Juara 3: Rp100.000 + Sertifikat\n\n" +
                    "📅 Tanggal Pelaksanaan: 5 Maret 2026\n\n" +
                    "🔐 Jangan lewatkan kesempatan untuk menjadi ahli keamanan siber dan tunjukkan skill hacking etismu!\n\n" +
                    "#CyberSecurityWarzone #EthicalHacking #CyberDefense #ITCompetition2026",
                daftar: "Daftar.php"
            },

            ml: {
                judul: "ML Innovation Challenge",
                poster: "../assets/poster1.png",
                jenjang: "SMA/SMK Sederajat",
                peserta: "Tim (3 orang)",
                tanggal: "15 - 25 Feb 2026",
                harga: "Rp 25.000 per tim",
                lokasi: "Online",
                deskripsi:
                    "🤖 Saatnya Berinovasi dengan AI! Pendaftaran ML Innovation Challenge Telah Dibuka 📊🚀\n\n" +
                    "✨ ML Innovation Challenge 2026 ✨\n" +
                    "ML Innovation Challenge adalah kompetisi bagi pelajar untuk mengembangkan solusi berbasis Artificial Intelligence (AI) dan Machine Learning.\n\n" +
                    "Lomba ini menguji kemampuan dalam mengolah data, membangun model machine learning sederhana, serta menciptakan inovasi yang bermanfaat untuk kehidupan nyata.\n\n" +
                    "🚀 Ayo tunjukkan ide dan project AI terbaikmu bersama tim!\n\n" +
                    "📌 Informasi Pendaftaran:\n" +
                    "📅 Tanggal Pendaftaran: 15 – 25 Februari 2026\n\n" +
                    "📄 Syarat & Ketentuan:\n" +
                    "- Peserta merupakan pelajar SMA / SMK\n" +
                    "- Perlombaan dilakukan secara tim (3 orang)\n" +
                    "- Lomba dilaksanakan secara online\n" +
                    "- Setiap tim wajib mengumpulkan project ML sebelum batas waktu\n\n" +
                    "💰 Biaya Registrasi: Rp25.000 per tim\n\n" +
                    "🏆 Hadiah Lomba:\n" +
                    "- Juara 1: Rp600.000 + Sertifikat\n" +
                    "- Juara 2: Rp400.000 + Sertifikat\n" +
                    "- Juara 3: Rp250.000 + Sertifikat\n\n" +
                    "📅 Tanggal Pengumpulan Project: 15 Maret 2026\n\n" +
                    "🤖 Jangan lewatkan kesempatan untuk menjadi inovator AI muda dan tunjukkan karya terbaikmu!\n\n" +
                    "#MLInnovationChallenge #AICompetition #MachineLearning #ITCompetition2026",
                daftar: "Daftar.php"
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
        document.getElementById("deskripsi").innerHTML = data.deskripsi.replace(/\n/g, "<br>");
        document.getElementById("btnDaftar").href = data.daftar;
    </script>

</body>

</html>