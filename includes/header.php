<?php 
if (!isset($lang)) {
    include_once 'language.php';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Риолит Инженеринг ЕООД - професионални строително-монтажни услуги'; ?>">
    <title><?php echo isset($page_title) ? $page_title : 'Риолит Инженеринг ЕООД'; ?></title>
    
    <?php
    // Get base URL for social media sharing
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost:8000';
    $base_url = $protocol . '://' . $host;
    $current_url = $base_url . $_SERVER['REQUEST_URI'];
    $logo_url = $base_url . '/logo_riolit.jpg';
    $site_title = isset($page_title) ? $page_title : 'Риолит Инженеринг ЕООД';
    $site_description = isset($page_description) ? $page_description : 'Риолит Инженеринг ЕООД - професионални строително-монтажни услуги';
    ?>
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($site_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($site_description); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($logo_url); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Риолит Инженеринг ЕООД - Лого">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo htmlspecialchars($current_url); ?>">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($site_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($site_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($logo_url); ?>">
    <meta name="twitter:image:alt" content="Риолит Инженеринг ЕООД - Лого">
    
    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="logo_riolit.jpg">
    <link rel="apple-touch-icon" href="logo_riolit.jpg">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <a href="index.php">
                        <img src="logo_riolit.jpg" alt="Риолит Инженеринг ЕООД" class="logo-img">
                        <div class="logo-text-wrapper">
                            <span class="logo-text">Риолит Инженеринг</span>
                            <span class="logo-subtitle">ЕООД</span>
                        </div>
                    </a>
                </div>
                <div class="navbar-center">
                    <!-- Desktop menu wrapper - hidden on mobile -->
                </div>
                <ul class="nav-menu">
                    <?php if (!function_exists('__')) { include 'translations.php'; } ?>
                    <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>"><?php echo __('nav_home'); ?></a></li>
                    <li><a href="za-nas.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'za-nas.php' ? 'active' : ''; ?>"><?php echo __('nav_about'); ?></a></li>
                    <li><a href="uslugi.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'uslugi.php' ? 'active' : ''; ?>"><?php echo __('nav_services'); ?></a></li>
                    <li><a href="proekti.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'proekti.php' ? 'active' : ''; ?>"><?php echo __('nav_projects'); ?></a></li>
                    <li><a href="kontakti.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'kontakti.php' ? 'active' : ''; ?>"><?php echo __('nav_contact'); ?></a></li>
                </ul>
                <div class="navbar-right">
                    <div class="language-switcher">
                        <a href="?lang=<?php echo $lang == 'bg' ? 'en' : 'bg'; ?>" class="lang-btn" title="<?php echo $lang == 'bg' ? 'Switch to English' : 'Превключи на Български'; ?>">
                            <?php echo $lang == 'bg' ? 'EN' : 'BG'; ?>
                        </a>
                    </div>
                    <button class="mobile-menu-toggle" aria-label="Toggle menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="mobile-menu-overlay"></div>
            </nav>
        </div>
    </header>
