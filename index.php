<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poster Bicara Pintar - Belajar Asyik Cukup Sentuh Langsung Dengar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e0f2fe 0%, #fae8ff 50%, #fce7f3 100%);
            min-height: 100vh;
        }

        /* Navigation */
        nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1.5rem;
            font-weight: bold;
            color: #1f2937;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #4b5563;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #2563eb;
        }

        /* Hero Section */
        .hero {
            max-width: 1200px;
            margin: 0 auto;
            padding: 5rem 2rem;
            text-align: center;
            position: relative;
        }

        .hero-icon {
            font-size: 8rem;
            margin-bottom: 2rem;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .hero h1 {
            font-size: 3.5rem;
            color: #1f2937;
            margin-bottom: 1.5rem;
        }

        .hero-subtitle {
            font-size: 1.75rem;
            color: #4b5563;
            font-style: italic;
            margin-bottom: 2rem;
            font-weight: 500;
        }

        .hero-badge {
            background: linear-gradient(135deg, #3b82f6 0%, #a855f7 100%);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            display: inline-block;
            font-size: 1.125rem;
            font-weight: 600;
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
        }

        /* About Section */
        .about-section {
            background: linear-gradient(135deg, #fed7aa 0%, #fbcfe8 50%, #ddd6fe 100%);
            padding: 4rem 2rem;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .about-card {
            background: white;
            border-radius: 1.5rem;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .about-card:hover {
            transform: translateY(-5px);
        }

        .about-icon {
            font-size: 4rem;
            text-align: center;
            margin-bottom: 1rem;
        }

        .about-title {
            font-size: 1.5rem;
            color: #1f2937;
            margin-bottom: 1rem;
            text-align: center;
            font-weight: bold;
        }

        .about-highlight {
            font-size: 1.125rem;
            color: #2563eb;
            margin-bottom: 1rem;
            text-align: center;
            font-weight: 600;
        }

        .about-text {
            color: #4b5563;
            line-height: 1.7;
            text-align: center;
        }

        /* Products Section */
        .products-section {
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            font-size: 2.5rem;
            text-align: center;
            color: #1f2937;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .section-subtitle {
            text-align: center;
            color: #6b7280;
            font-size: 1.125rem;
            margin-bottom: 3rem;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .product-card {
            border-radius: 1.5rem;
            padding: 2rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            transition: all 0.3s;
            cursor: pointer;
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }

        .product-card-1 { background: linear-gradient(135deg, #fef3c7 0%, #fed7aa 100%); }
        .product-card-2 { background: linear-gradient(135deg, #bfdbfe 0%, #ddd6fe 100%); }
        .product-card-3 { background: linear-gradient(135deg, #fbcfe8 0%, #fecdd3 100%); }
        .product-card-4 { background: linear-gradient(135deg, #d9f99d 0%, #99f6e4 100%); }
        .product-card-5 { background: linear-gradient(135deg, #c7d2fe 0%, #bfdbfe 100%); }
        .product-card-6 { background: linear-gradient(135deg, #d9f99d 0%, #86efac 100%); }
        .product-card-7 { background: linear-gradient(135deg, #fef08a 0%, #d9f99d 100%); }
        .product-card-8 { background: linear-gradient(135deg, #ddd6fe 0%, #fbcfe8 100%); }

        .product-icon {
            font-size: 4rem;
            text-align: center;
            margin-bottom: 1rem;
        }

        .product-title {
            font-size: 1.125rem;
            color: #1f2937;
            margin-bottom: 0.75rem;
            text-align: center;
            font-weight: bold;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-description {
            color: #4b5563;
            font-size: 0.875rem;
            text-align: center;
            line-height: 1.6;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #9333ea 0%, #ec4899 100%);
            padding: 4rem 2rem;
        }

        .cta-container {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        .cta-title {
            font-size: 2.5rem;
            color: white;
            margin-bottom: 1.5rem;
            font-weight: bold;
        }

        .cta-text {
            color: white;
            font-size: 1.125rem;
            margin-bottom: 1rem;
            line-height: 1.7;
        }

        .cta-emphasis {
            color: white;
            font-size: 1.25rem;
            font-weight: 600;
            margin: 2rem 0;
        }

        .cta-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .pricing-card, .order-card {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .card-title {
            font-size: 1.5rem;
            color: #1f2937;
            margin-bottom: 1.5rem;
            font-weight: bold;
        }

        .price-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }

        .price-item-1 { background: #fef3c7; }
        .price-item-2 { background: #fed7aa; }
        .price-item-3 { background: #fecaca; }

        .price-label {
            font-weight: 600;
            color: #1f2937;
        }

        .price-value {
            font-size: 1.25rem;
            font-weight: bold;
            color: #ea580c;
        }

        .promo-box {
            background: linear-gradient(135deg, #4ade80 0%, #10b981 100%);
            color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-top: 1.5rem;
            text-align: center;
        }

        .promo-title {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .promo-price {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .order-card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .whatsapp-btn {
            background: linear-gradient(135deg, #4ade80 0%, #10b981 100%);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            border: none;
            font-size: 1.125rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
            text-decoration: none;
        }

        .whatsapp-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.4);
        }

        .whatsapp-icon {
            font-size: 2rem;
        }

        .btn-text-small {
            font-size: 0.875rem;
            font-weight: normal;
        }

        .order-note {
            color: #6b7280;
            font-size: 0.875rem;
            font-style: italic;
            margin-top: 1rem;
        }

        /* Footer */
        footer {
            background: #111827;
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .footer-title {
            font-size: 1.125rem;
            margin-bottom: 0.5rem;
        }

        .footer-subtitle {
            color: #9ca3af;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1.25rem;
            }

            .hero-badge {
                font-size: 0.875rem;
                padding: 0.75rem 1.5rem;
            }

            .section-title {
                font-size: 1.75rem;
            }

            .cta-title {
                font-size: 1.75rem;
            }
        }

        .scroll-indicator {
            animation: bounce 2s infinite;
            margin-top: 2rem;
            color: #9ca3af;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="logo">
                <span>📚</span>
                <span>PosterBicaraPintar</span>
            </div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-icon">📖</div>
        
        <h1>POSTER BICARA PINTAR</h1>
        <p class="hero-subtitle">Belajar Asyik Cukup Sentuh Langsung Dengar</p>
        <div class="hero-badge">
            "MENJEMBATANI DUNIA LITERASI DENGAN TEKNOLOGI SUARA YANG MENGINSPIRASI"
        </div>
        <div class="scroll-indicator">▼</div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="about-container">
            <div class="about-card">
                <div class="about-icon">🎯</div>
                <h3 class="about-title">Anak bosan belajar? Butuh waktu screen time yang berkualitas?</h3>
                <p class="about-highlight">Stop gadget!! Kenalkan ini Poster Bicara Pintar</p>
                <p class="about-text">
                    Kami percaya Ayah Bunda selalu memilih yang terbaik. Itu sebabnya Poster Bicara Pintar hadir sebagai guru pengganti yang menyenangkan di rumah. Anak belajar mandiri, Ayah Bunda tenang. Kualitas edukasi terjamin, cukup sentuh, langsung dengar!
                </p>
            </div>
            <div class="about-card">
                <div class="about-icon">✨</div>
                <p class="about-text">
                    Poster Bicara Pintar hadir dengan misi utama untuk merevolusi cara anak-anak dan pelajar berinteraksi dengan konten edukasi, karena kami percaya bahwa informasi lebih mudah diserap ketika mata melihat dan telinga mendengar secara harmonis. Melalui inovasi yang mengintegrasikan teknologi digital ke dalam media cetak, kami menciptakan aksesibilitas belajar yang inklusif sekaligus interaktif. Dengan kualitas visual yang ceria dan penuh warna, poster ini tidak hanya menstimulasi kreativitas sejak dini, tetapi juga bertujuan membangun kepercayaan diri setiap anak agar lebih berani bicara dan tampil pintar melalui pengalaman belajar yang menyenangkan.
                </p>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products-section">
        <h2 class="section-title">SERI POSTER EDUKASI INTERAKTIF!</h2>
        <p class="section-subtitle">Koleksi lengkap untuk pembelajaran yang menyenangkan</p>
        
        <div class="products-grid">
            <div class="product-card product-card-1">
                <div class="product-icon">🎨</div>
                <h3 class="product-title">Poster Mengenal Tokoh dan Profesi</h3>
                <p class="product-description">
                    Poster ini akan membuka wawasan anak tentang berbagai pekerjaan hebat di sekitar kita. Bantu si kecil menemukan cita-citanya sejak dini dengan cara yang seru dan interaktif!
                </p>
            </div>

            <div class="product-card product-card-2">
                <div class="product-icon">📖</div>
                <h3 class="product-title">Langkah Pertama Si Kecil Mencintai Al-Qur'an!</h3>
                <p class="product-description">
                    Poster ini didesain khusus dengan warna-warna ceria agar si kecil semangat belajar mengenal huruf-huruf Allah setiap hari. Bekali mereka ilmu agama sejak dini dengan suasana yang asyik!
                </p>
            </div>

            <div class="product-card product-card-3">
                <div class="product-icon">👨‍⚕️</div>
                <h3 class="product-title">Ayo Jelajahi Dunia Profesi!</h3>
                <p class="product-description">
                    Mengenal berbagai profesi sejak dini membantu anak memahami keberagaman pekerjaan di dunia. Poster interaktif ini mengajarkan profesi dengan cara yang menyenangkan!
                </p>
            </div>

            <div class="product-card product-card-4">
                <div class="product-icon">🕌</div>
                <h3 class="product-title">Mengenal Huruf Hijaiyah</h3>
                <p class="product-description">
                    Dengan gambar yang nyata dan warna yang segar, si kecil jadi lebih mudah mengenal dan menghafal huruf-huruf Hijaiyah. Pembelajaran agama yang fun dan efektif!
                </p>
            </div>

            <div class="product-card product-card-5">
                <div class="product-icon">🎨</div>
                <h3 class="product-title">Main Warna & Bentuk Jadi Lebih Asyik!</h3>
                <p class="product-description">
                    Poster ini dirancang khusus untuk memicu rasa ingin tahu anak dan memperkuat daya ingat mereka. Investasi cerdas untuk tumbuh kembang si buah hati!
                </p>
            </div>

            <div class="product-card product-card-6">
                <div class="product-icon">🍎</div>
                <h3 class="product-title">Mengenal Nama Buah dan Sayur</h3>
                <p class="product-description">
                    Dengan gambar yang nyata dan warna yang segar, si kecil jadi lebih mudah mengenal dan menghafal nama-nama makanan sehat favorit mereka. Tubuh kuat, anak pun pintar!
                </p>
            </div>

            <div class="product-card product-card-7">
                <div class="product-icon">🥗</div>
                <h3 class="product-title">Kenalkan Si Kecil dengan Makanan Sehat Sejak Dini!</h3>
                <p class="product-description">
                    Ajarkan pentingnya makan sehat dengan cara yang menyenangkan. Poster interaktif yang membuat anak excited untuk mencoba makanan bergizi!
                </p>
            </div>

            <div class="product-card product-card-8">
                <div class="product-icon">📚</div>
                <h3 class="product-title">Seri Poster Edukasi Interaktif</h3>
                <p class="product-description">
                    Koleksi lengkap poster edukasi dengan berbagai tema pembelajaran. Investasi terbaik untuk masa depan si kecil yang cemerlang!
                </p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="cta-container">
            <h2 class="cta-title">Terima kasih telah berkunjung ke Toko Poster Edukasi kami!</h2>
            <p class="cta-text">
                Kami percaya bahwa setiap anak memiliki potensi besar, dan media belajar yang tepat adalah kuncinya. Semoga koleksi poster kami dapat menemani tumbuh kembang si kecil dengan penuh keceriaan.
            </p>
            <p class="cta-text">
                Jika ada pertanyaan atau butuh bantuan dalam memilih poster, jangan ragu untuk menyapa kami melalui WhatsApp.
            </p>
            <p class="cta-emphasis">
                Selamat berbelanja<br>Ayah & Bunda hebat!
            </p>

            <div class="cta-grid">
                <div class="pricing-card">
                    <h3 class="card-title">DAFTAR HARGA</h3>
                    <div class="price-item price-item-1">
                        <span class="price-label">Ukuran A3+ (Standar)</span>
                        <span class="price-value">RP15.000</span>
                    </div>
                    <div class="price-item price-item-2">
                        <span class="price-label">Ukuran Jumbo (A2)</span>
                        <span class="price-value">RP30.000</span>
                    </div>
                    <div class="price-item price-item-3">
                        <span class="price-label">Versi Laminasi (Awet)</span>
                        <span class="price-value">+ RP5.000</span>
                    </div>
                    <div class="promo-box">
                        <div class="promo-title">PROMO SPESIAL: BELI 3 POSTER HANYA</div>
                        <div class="promo-price">RP40.000 (HEMAT RP5.000!)</div>
                    </div>
                </div>

                <div class="order-card">
                    <h3 class="card-title">TERTARIK UNTUK MEMESAN?</h3>
                    <p class="about-text" style="margin-bottom: 1.5rem;">
                        Yuk, langsung klik logo WhatsApp di bawah ini untuk pesan cepat!
                    </p>
                    <a href="https://wa.me/6281234567890" class="whatsapp-btn">
                        <span class="whatsapp-icon">💬</span>
                        <div>
                            <div>Beli Sekarang</div>
                            <div class="btn-text-small">via WhatsApp</div>
                        </div>
                    </a>
                    <p class="order-note">Chat otomatis, tinggal klik!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p class="footer-title">© 2025 Poster Bicara Pintar</p>
        <p class="footer-subtitle">Menjembatani Dunia Literasi dengan Teknologi Suara yang Menginspirasi</p>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Product card hover effect
        const productCards = document.querySelectorAll('.product-card');
        productCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05) rotate(2deg)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) rotate(0deg)';
            });
        });
    </script>
</body>
</html>
