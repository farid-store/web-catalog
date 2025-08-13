<?php
$pageTitle = "Katalog Android Terbaru";
$heroSubtitle = "Katalog Android Terbaru<br><span>Priode Juli - Agustus 2025</span>";
$heroTitle = "Temukan Produk<br>Terbaik Dengan<br>Harga Terjangkau";
$heroCardTitle = "Produk Unggulan";
$heroCardText = "Lihat koleksi smartphone terbaru dengan garansi resmi...";
include 'header.php';
?>

    

    <section class="collection-section">
        <div class="container collection-container">
            <div class="collection-header">
                <h3>📱 Katalog Handphone Terbaru</h3>
                <div class="collection-nav">
                    <button class="nav-arrow left-arrow"><i class="fas fa-arrow-left"></i></button>
                    <button class="nav-arrow right-arrow"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>

            <!-- ===== Produk Handphone ===== -->
             <?php
                include 'produk.php';
             ?>
            <!-- ===== End ===== -->


<?php
include 'footer.php';
?>
