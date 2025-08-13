<?php
$pageTitle = "Contact";
$heroSubtitle = "Hubungi Kami<br><span>Kami siap membantu Anda</span>";
$heroTitle = "Punya Pertanyaan?<br>Silakan Hubungi Kami";
$heroCardTitle = "Layanan Pelanggan";
$heroCardText = "Tim kami siap melayani Anda setiap hari kerja 09:00 – 21:00 WIB.";
include 'header.php';
?>

<!-- ===== CONTACT SECTION ===== -->
<section class="contact-section">
    <div class="container contact-container">
        <!-- Info Kontak -->
        <div class="contact-info">
            <h3>Informasi Kontak</h3>
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <p>Jl. Contoh No.123, Jakarta, Indonesia</p>
            </div>
            <div class="info-item">
                <i class="fas fa-phone"></i>
                <p>+62 812-3456-7890</p>
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <p>support@kataloghp.com</p>
            </div>
            <div class="info-item">
                <i class="fab fa-whatsapp"></i>
                <p>+62 811-9876-5432</p>
            </div>
        </div>

        <!-- Form Kontak -->
        <div class="contact-form">
            <h4>Kirim Pesan</h4>
            <form action="#" method="POST">
                <input type="text" name="name" placeholder="Nama Lengkap" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="subject" placeholder="Subjek" required>
                <textarea name="message" placeholder="Pesan Anda..." required></textarea>
                <button type="submit" class="btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
