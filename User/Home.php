<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Lomba IT - SMKN 1 Cibinong</title>
    <link rel="stylesheet" href="home.css">
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
                    <li><a href="#home">Home</a></li>
                    <li><a href="#lomba">Lomba</a></li>
                    <li><a href="#panduan">Panduan</a></li>
                </ul>
            </nav>
            <div class="judul">
                <p class="judul-small">Portal Lomba IT</p>
                <h1 class="judul-title"><span>SMKN 1 Cibinong</span></h1>
                <p class="judul-desc">Ayo temukan lomba IT dan tunjukkan skill-mu!</p>
            </div>
            <div class="search-box">
                <img src="../assets/search.png" class="search-icon">
                <input type="search" id="searchInput" placeholder="Cari lomba...">
            </div>
            <div class="filter">
                <button class="chip" data-filter="gratis">Gratis</button>
                <button class="chip" data-filter="berbayar">Berbayar</button>
                <button class="chip" data-filter="tim">Tim</button>
                <button class="chip" data-filter="individu">Individu</button>
            </div>

        </section>
    </header>

    <main>
        <section class="lomba-section" id="lomba">
            <h2 class="section-title">List Data Lomba</h2>

            <div class="grid-lomba">

                <!-- Card 1 -->
                <div class="lomba-card-xxl" data-filter="individu berbayar">
                    <div class="lomba-poster">
                        <img src="../assets/poster1.png">
                    </div>

                    <div class="lomba-info">
                        <h3 class="lomba-title">Creative Web Design Challenge</h3>
                        <div class="lomba-line"></div>

                        <div class="lomba-meta">
                            <div class="meta-item">
                                <img src="../assets/people.png" class="meta-icon">
                                <span>Individu (1 orang)</span>
                            </div>

                            <div class="meta-item">
                                <img src="../assets/location.png" class="meta-icon">
                                <span>Offline (SMKN 1 CIBINONG)</span>
                            </div>

                            <div class="meta-item">
                                <img src="../assets/date.png" class="meta-icon">
                                <span>10 - 15 Feb 2026</span>
                            </div>
                        </div>

                        <a href="detail.php?id=web" class="btn-lihat">Lihat detail <span class="arrow">›</span></a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="lomba-card-xxl" data-filter="tim berbayar">
                    <div class="lomba-poster">
                        <img src="../assets/poster2.png">
                    </div>

                    <div class="lomba-info">
                        <h3 class="lomba-title">Game Creation Battle 2026</h3>
                        <div class="lomba-line"></div>

                        <div class="lomba-meta">
                            <div class="meta-item">
                                <img src="../assets/people.png" class="meta-icon">
                                <span>Tim (4 orang)</span>
                            </div>

                            <div class="meta-item">
                                <img src="../assets/location.png" class="meta-icon">
                                <span>Online</span>
                            </div>

                            <div class="meta-item">
                                <img src="../assets/date.png" class="meta-icon">
                                <span>20 - 25 Feb 2026</span>
                            </div>
                        </div>

                        <a href="detail.php?id=game" class="btn-lihat">Lihat detail <span class="arrow">›</span></a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="lomba-card-xxl" data-filter="tim berbayar">
                    <div class="lomba-poster">
                        <img src="../assets/poster3.png">
                    </div>

                    <div class="lomba-info">
                        <h3 class="lomba-title">IT Support Skills Championship</h3>
                        <div class="lomba-line"></div>

                        <div class="lomba-meta">
                            <div class="meta-item">
                                <img src="../assets/people.png" class="meta-icon">
                                <span>Tim (4 orang)</span>
                            </div>

                            <div class="meta-item">
                                <img src="../assets/location.png" class="meta-icon">
                                <span>Offline (SMKN 1 CIBINONG)</span>
                            </div>

                            <div class="meta-item">
                                <img src="../assets/date.png" class="meta-icon">
                                <span>20 - 25 Apr 2026</span>
                            </div>
                        </div>

                        <a href="detail.php?id=itSupport" class="btn-lihat">Lihat detail <span
                                class="arrow">›</span></a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="lomba-card-xxl" data-filter="tim berbayar">
                    <div class="lomba-poster">
                        <img src="../assets/poster4.png">
                    </div>

                    <div class="lomba-info">
                        <h3 class="lomba-title">Network Engineer Contest</h3>
                        <div class="lomba-line"></div>

                        <div class="lomba-meta">
                            <div class="meta-item">
                                <img src="../assets/people.png" class="meta-icon">
                                <span>Tim (2 orang)</span>
                            </div>

                            <div class="meta-item">
                                <img src="../assets/location.png" class="meta-icon">
                                <span>Offline (SMKN 1 CIBINONG)</span>
                            </div>

                            <div class="meta-item">
                                <img src="../assets/date.png" class="meta-icon">
                                <span>10 - 15 Feb 2026</span>
                            </div>
                        </div>

                        <a href="detail.php?id=network" class="btn-lihat">Lihat detail <span class="arrow">›</span></a>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="lomba-card-xxl" data-filter="individu gratis">
                    <div class="lomba-poster">
                        <img src="../assets/poster6.png">
                    </div>

                    <div class="lomba-info">
                        <h3 class="lomba-title">Cyber Security Warzone</h3>
                        <div class="lomba-line"></div>

                        <div class="lomba-meta">
                            <div class="meta-item">
                                <img src="../assets/people.png" class="meta-icon">
                                <span>Individu (1 orang)</span>
                            </div>

                            <div class="meta-item">
                                <img src="../assets/location.png" class="meta-icon">
                                <span>Online</span>
                            </div>

                            <div class="meta-item">
                                <img src="../assets/date.png" class="meta-icon">
                                <span>20 - 23 Feb 2026</span>
                            </div>
                        </div>

                        <a href="detail.php?id=cyber" class="btn-lihat">Lihat detail <span class="arrow">›</span></a>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="lomba-card-xxl" data-filter="tim berbayar">
                    <div class="lomba-poster">
                        <img src="../assets/poster5.png">
                    </div>

                    <div class="lomba-info">
                        <h3 class="lomba-title">ML Innovation Challenge</h3>
                        <div class="lomba-line"></div>

                        <div class="lomba-meta">
                            <div class="meta-item">
                                <img src="../assets/people.png" class="meta-icon">
                                <span>Tim (3 orang)</span>
                            </div>

                            <div class="meta-item">
                                <img src="../assets/location.png" class="meta-icon">
                                <span>Online</span>
                            </div>

                            <div class="meta-item">
                                <img src="../assets/date.png" class="meta-icon">
                                <span>15 - 25 Feb 2026</span>
                            </div>
                        </div>

                        <a href="detail.php?id=ml" class="btn-lihat">Lihat detail <span class="arrow">›</span></a>
                    </div>
                </div>
            </div>

            <p id="noResult" class="no-result">Tidak ada lomba ditemukan.</p>

        </section>

        <section class="panduan" id="panduan">
            <h2>Langkah Mudah Daftar Lomba</h2>
            <div class="langkah-grid">
                <div class="langkah-card">
                    <span class="step">1</span>
                    <img src="../assets/panduan1.png" alt="cari lomba">
                    <h3>Cari Lomba</h3>
                    <p>Temukan lomba IT yang kamu minati dengan mencari dan melihat daftar lomba yang tersedia.</p>
                </div>
                <div class="langkah-card">
                    <span class="step">2</span>
                    <img src="../assets/panduan2.png" alt="lihat detail lomba">
                    <h3>Lihat Detail Lomba</h3>
                    <p>Klik "Lihat Detail" pada lomba yang kamu pilih untuk melihat informasi lebih lengkap.</p>
                </div>
                <div class="langkah-card">
                    <span class="step">3</span>
                    <img src="../assets/panduan3.png" alt="isi formulir">
                    <h3>Isi Formulir</h3>
                    <p>Isi formulir pendaftaran dengan data diri sendiri maupun anggota tim dengan lengkap dan benar.
                    </p>
                </div>
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
        const searchInput = document.getElementById("searchInput");
        const cards = document.querySelectorAll(".lomba-card-xxl");
        const chips = document.querySelectorAll(".chip");

        let activeFilters = [];

        function applyFilter() {
            const keyword = searchInput.value.trim().toLowerCase();
            let visibleCount = 0;

            cards.forEach(card => {
                const title = card.querySelector(".lomba-title").textContent.toLowerCase();
                const tags = (card.dataset.filter || "").toLowerCase();
                const matchSearch = title.includes(keyword);
                let matchChip = true;
                if (activeFilters.length > 0) {
                    matchChip = activeFilters.every(f => tags.includes(f));
                }
                if (matchSearch && matchChip) {
                    card.style.display = "flex";
                    visibleCount++;
                } else {
                    card.style.display = "none";
                }
            });

            const noResult = document.getElementById("noResult");
            if (visibleCount === 0) {
                noResult.style.display = "block";
            } else {
                noResult.style.display = "none";
            }
        }

        searchInput.addEventListener("input", applyFilter);
        chips.forEach(chip => {
            chip.addEventListener("click", () => {
                const f = chip.dataset.filter;
                if (activeFilters.includes(f)) {
                    activeFilters = activeFilters.filter(x => x !== f);
                    chip.classList.remove("active");
                } else {
                    activeFilters.push(f);
                    chip.classList.add("active");
                }
                applyFilter();
            });
        });
    </script>

</body>

</html>