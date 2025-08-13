<?php
// ========= Hero & Meta (dipakai di header.php) =========
$pageTitle     = "Beranda — Farid Store";
$heroSubtitle  = "Farid Store<br><span>Your Gadget Solution</span>";
$heroTitle     = "Pusat Penjualan<br>Gadget Terbesar<br>Di Pekanbaru";
$heroCardTitle = "Produk Unggulan";
$heroCardText  = "Lihat koleksi smartphone terbaru dengan garansi resmi...";
include 'header.php';
?>

<!-- ============ BEST SELLER / HIGHLIGHT ============ -->
<section class="features-section">
        <div class="container">
            <h2>Mengapa Memilih Kami?</h2>
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up">
                    <i class="fas fa-tools icon"></i>
                    <h3>Teknisi Profesional</h3>
                    <p>Tim ahli kami memiliki pengalaman bertahun-tahun dalam memperbaiki berbagai masalah perangkat.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-shield-alt icon"></i>
                    <h3>Garansi Resmi</h3>
                    <p>Setiap perbaikan disertai dengan garansi, memberikan Anda kemudahan, kenyamanan, dan ketenangan pikiran anda.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-clock icon"></i>
                    <h3>Proses Cepat</h3>
                    <p>Kami berupaya menyelesaikan perbaikan Anda dengan waktu sesingkat mungkin tanpa mengurangi kualitas.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-check-circle icon"></i>
                    <h3>Suku Cadang Asli</h3>
                    <p>Hanya menggunakan suku cadang berkualitas tinggi dan asli untuk hasil terbaik dikelasnya.</p>
                </div>
            </div>
        </div>
    </section>

<!-- ============ PROMO / CTA ============ -->
<?php
// page_banner.php
// File ini hanya berisi fragmen HTML dan JavaScript.
// Tidak ada tag HTML penuh seperti <!DOCTYPE html>, <html>, <head>, <body> di sini,
// karena file ini di-include di dalam struktur HTML utama (services.php).
?>

<div class="slider-control" style="/* display: none; */">
    <label for="leftSectionSize">Ukuran Left Section:</label>
    <input type="range" id="leftSectionSize" min="0" max="100" value="69"> <span id="leftSectionValue">69%</span>
</div>

<div class="banner-container" id="bannerContainer">
    <div class="left-section" id="leftSection">
        <h1>Bangun Bisnis Gadgetmu Sendiri Sekarang Juga!</h1>
        <p>Ribuan orang dari seluruh Indonesia sudah bergabung bersama kami dan sukses mengembangkan bisnis gadget mereka. Farid Store hadir sebagai wadah edukasi dan menciptakan komunitas yang solid untuk membantu para pengusaha gadget di Indonesia.</p>
        <a href="#" class="button-link">MASIH RAGU? KLIK DISINI SEKARANG JUGA</a>
    </div>

    <div class="right-section" id="rightSection">
        

        <div class="banner-testimonial-card result-card" id="resultCard">
            <span class="dot"></span>
            <h2>The Result.</h2>
            <p>After Join<br>Farid Store Reseller</p>
        </div>

        <div class="banner-testimonial-card testimonial-item" data-id="farid">
            <span class="dot"></span>
            <div class="card-image-container">
                <img class="card-image" src="IMG/user/riddd1.jpg" alt="Farid Siddiq Full Photo" loading="lazy">
                <div class="name-container">
                    <h3>Farid Siddiq</h3>
                </div>
            </div>
            <div class="card-content">
                <p class="stats">100+ Unit sold setelah 7 bulan join Farid Store reseller</p>
            </div>
            <div class="overlay-text">Lihat <br> selengkapnya</div>
        </div>

        <div class="banner-testimonial-card testimonial-item" data-id="gibran">
            <span class="dot"></span>
            <div class="card-image-container">
                <img class="card-image" src="IMG/user/gib.png" alt="Alif Gibran Full Photo" loading="lazy">
                <div class="name-container">
                    <h3>Alif Gibran</h3>
                </div>
            </div>
            <div class="card-content">
                <p class="stats">100+ Unit sold setelah 7 bulan join bersama Farid Store reseller</p>
            </div>
            <div class="overlay-text">Lihat <br> selengkapnya</div>
        </div>

        <div class="banner-testimonial-card testimonial-item" data-id="bobi">
            <span class="dot"></span>
            <div class="card-image-container">
                <img class="card-image" src="IMG/user/bobi.jpg" alt="Bobi Bayu Full Photo" loading="lazy">
                <div class="name-container">
                    <h3>Bobi Bayu</h3>
                </div>
            </div>
            <div class="card-content">
                <p class="stats">100+ Unit sold sejak join Reseller hingga 50 juta pertama</p>
            </div>
            <div class="overlay-text">Lihat <br> selengkapnya</div>
        </div>
    </div>

    <span class="FaridStore-logo">Farid Store</span>
    <span class="reseller-text">RESELLER</span>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const bannerContainer = document.getElementById('bannerContainer');
        const leftSection = document.getElementById('leftSection');
        const rightSection = document.getElementById('rightSection');
        const resultCard = document.getElementById('resultCard');
        const testimonialItems = document.querySelectorAll('.testimonial-item');
        const slider = document.getElementById('leftSectionSize');
        const leftSectionValueSpan = document.getElementById('leftSectionValue');

        // Mengambil nilai awal dari elemen slider HTML itu sendiri
        // Ini memastikan JS selalu sinkron dengan HTML
        const initialLeftWidth = slider ? parseInt(slider.value) : 69; // Ambil dari slider, fallback ke 69
        const clickedLeftWidth = 35; // Berubah menjadi 35% saat diklik

        let isExpanded = false; // Flag untuk menandai apakah section sudah diperluas

        // --- Fungsi untuk mengatur lebar section (digunakan oleh slider dan inisialisasi) ---
        function setSectionWidths(leftPercentage) {
            const rightPercentage = 100 - leftPercentage;
            leftSection.style.flexBasis = leftPercentage + '%';
            rightSection.style.flexBasis = rightPercentage + '%';
            if (slider) { // Update slider value jika slider ada
                slider.value = leftPercentage;
            }
            if (leftSectionValueSpan) { // Update span value jika span ada
                leftSectionValueSpan.textContent = leftPercentage + '%';
            }
        }

        // --- Inisialisasi awal saat DOMContentLoaded ---
        // Atur lebar awal sesuai nilai initialLeftWidth (yang diambil dari HTML slider)
        setSectionWidths(initialLeftWidth);

        // Tambahkan efek blur ke kartu testimonial di awal
        testimonialItems.forEach(card => {
            card.classList.add('blurred');
        });

        // --- Fungsi penanganan klik pada kartu ---
        function handleCardClick() {
            if (!isExpanded) {
                // Animasi lebar section menggunakan setSectionWidths
                setSectionWidths(clickedLeftWidth);

                // Hapus efek blur dari semua kartu testimonial
                testimonialItems.forEach(card => {
                    card.classList.remove('blurred');
                });

                isExpanded = true; // Set flag menjadi true agar aksi ini hanya terjadi sekali
            }
        }

        // --- Tambahkan event listener ke kartu testimoni dan result card ---
        // Delegasikan event listener ke bannerContainer untuk efisiensi
        bannerContainer.addEventListener('click', function(event) {
            let targetCard = event.target.closest('.banner-testimonial-card');
            if (targetCard) {
                // Hanya aktifkan jika bukan slider control atau button-link
                if (!event.target.closest('.slider-control') && !event.target.classList.contains('button-link')) {
                    handleCardClick();
                }
            }
        });

        // --- Slider control (debugging/dev only) ---
        if (slider) {
            slider.addEventListener('input', function() {
                setSectionWidths(parseInt(this.value));
                // Saat slider digunakan, reset animasi ke kondisi awal (tanpa blur)
                isExpanded = false; // Reset flag
                testimonialItems.forEach(card => card.classList.remove('blurred')); // Hapus blur
            });
        }
    });
</script>

<?php include 'footer.php'; ?>
