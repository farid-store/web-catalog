<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? $pageTitle : 'Katalog HP'; ?></title>
    <link rel="stylesheet" href="katalog.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="banner.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!-- ===== HEADER ===== -->
<header>
    <div class="container header-container">
        <div class="logo">
            <h1>Farid Store</h1>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="katalog.php">ANDROID</a></li>
                <li><a href="#">IPHONE</a></li>
                <li><a href="#">LAPTOP</a></li>
                <li><a href="#">PREMIUM APP</a></li>
                <li><a href="#">SERVICE</a></li>
                <li><a href="about.php" class="<?= ($pageTitle == 'About') ? 'active' : '' ?>">ABOUT</a></li>
                <li><a href="contact.php" class="<?= ($pageTitle == 'Contact') ? 'active' : '' ?>">CONTACT</a></li>
            </ul>
        </nav>
        <div class="header-icons">
            <a href="#"><i class="fas fa-shopping-bag"></i></a>
            <a href="#"><i class="fas fa-user-circle"></i></a>
        </div>
    </div>
</header>

<!-- ===== HERO SECTION ===== -->
<section class="hero-section">
    <div class="container hero-content">
        <div class="hero-left">
            <div class="lookbook-card">
                <img src="images.png" alt="Katalog HP">
                <p><?= isset($heroSubtitle) ? $heroSubtitle : 'Katalog Handphone Terbaru'; ?></p>
            </div>
            <h2><?= isset($heroTitle) ? $heroTitle : 'Temukan Produk<br>Terbaik Dengan<br>Harga Terjangkau'; ?></h2>
        </div>
        <div class="hero-right">
            <div class="featured-card">
                <h4><?= isset($heroCardTitle) ? $heroCardTitle : 'Produk Unggulan'; ?></h4>
                <p><?= isset($heroCardText) ? $heroCardText : 'Lihat koleksi smartphone terbaru dengan garansi resmi...'; ?></p>
            <a href="#" class="btn-primary">Lihat Sekarang</a>
            </div>
        </div>
    </div>
</section>
