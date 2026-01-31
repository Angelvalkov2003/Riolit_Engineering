<?php 
if (!isset($lang)) {
    include_once __DIR__ . '/language.php';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <?php if (!function_exists('__')) { include_once __DIR__ . '/translations.php'; } ?>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : __('site_description_short'); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars(__('meta_keywords')); ?>">
    <meta name="robots" content="<?php echo (basename($_SERVER['PHP_SELF']) === 'kontakti.php' && (isset($_GET['success']) || isset($_GET['error']))) ? 'noindex, nofollow' : 'index, follow'; ?>">
    <title><?php echo isset($page_title) ? $page_title : __('site_name'); ?></title>
    
    <?php
    // Get base URL for social media sharing
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost:8000';
    $base_url = $protocol . '://' . $host;

    // Canonical URL: always include current language as query param (good for sharing and indexing)
    $current_uri = $_SERVER['REQUEST_URI'] ?? '';
    $parsed_uri = parse_url($current_uri);
    $path = $parsed_uri['path'] ?? '/' . (basename($_SERVER['PHP_SELF']) ?: 'index.php');
    $query = [];
    if (!empty($parsed_uri['query'])) {
        parse_str($parsed_uri['query'], $query);
    }
    // Remove non-canonical params
    unset($query['success'], $query['error']);
    // Force language parameter to match current language
    $query['lang'] = $lang;

    $canonical_url = $base_url . $path . '?' . http_build_query($query);
    $current_url = $canonical_url;

    $logo_url = $base_url . '/logo_riolit.jpg';
    $og_image_url = $base_url . '/assets/og-image.png';
    $site_title = isset($page_title) ? $page_title : __('site_name');
    $site_description = isset($page_description) ? $page_description : __('site_description_short');
    $og_locale = $lang === 'bg' ? 'bg_BG' : 'en_US';
    ?>

    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
    <link rel="alternate" hreflang="bg" href="<?php echo htmlspecialchars($base_url . $path . '?' . http_build_query(array_merge($query, ['lang' => 'bg']))); ?>">
    <link rel="alternate" hreflang="en" href="<?php echo htmlspecialchars($base_url . $path . '?' . http_build_query(array_merge($query, ['lang' => 'en']))); ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo htmlspecialchars($base_url . $path . '?' . http_build_query(array_merge($query, ['lang' => 'bg']))); ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($current_url); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($site_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($site_description); ?>">
    <meta property="og:site_name" content="<?php echo htmlspecialchars(__('site_name')); ?>">
    <meta property="og:locale" content="<?php echo htmlspecialchars($og_locale); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image_url); ?>">
    <meta property="og:image:secure_url" content="<?php echo htmlspecialchars($og_image_url); ?>">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars(__('og_image_alt')); ?>">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo htmlspecialchars($current_url); ?>">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($site_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($site_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image_url); ?>">
    <meta name="twitter:image:alt" content="<?php echo htmlspecialchars(__('og_image_alt')); ?>">

    <!-- Structured data -->
    <script type="application/ld+json">
    <?php
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'ConstructionCompany',
        'name' => __('site_name'),
        'url' => $base_url . '/',
        'logo' => $logo_url,
        'image' => $og_image_url,
        'telephone' => ['+359 32 590 271', '+359 895 330885', '+359 896 575351'],
        'email' => 'office@riolit.bg',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => __('footer_address_value'),
            'addressLocality' => 'Plovdiv',
            'postalCode' => '4000',
            'addressCountry' => 'BG',
        ],
        'sameAs' => [
            'https://www.facebook.com/rioliting#'
        ],
    ];
    echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    ?>
    </script>
    
    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="logo_riolit.jpg">
    <link rel="apple-touch-icon" href="logo_riolit.jpg">
    <?php
    $css_path = __DIR__ . '/../assets/css/style.css';
    $css_version = file_exists($css_path) ? filemtime($css_path) : time();
    ?>
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo $css_version; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <a href="index.php">
                        <img src="logo_riolit.jpg" alt="<?php echo htmlspecialchars(__('logo_alt')); ?>" class="logo-img">
                    </a>
                </div>
                <div class="navbar-center">
                    <!-- Desktop menu wrapper - hidden on mobile -->
                </div>
                <ul class="nav-menu">
                    <?php if (!function_exists('__')) { include_once __DIR__ . '/translations.php'; } ?>
                    <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>"><?php echo __('nav_home'); ?></a></li>
                    <li><a href="za-nas.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'za-nas.php' ? 'active' : ''; ?>"><?php echo __('nav_about'); ?></a></li>
                    <li><a href="uslugi.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'uslugi.php' ? 'active' : ''; ?>"><?php echo __('nav_services'); ?></a></li>
                    <li><a href="proekti.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'proekti.php' ? 'active' : ''; ?>"><?php echo __('nav_projects'); ?></a></li>
                    <li><a href="kontakti.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'kontakti.php' ? 'active' : ''; ?>"><?php echo __('nav_contact'); ?></a></li>
                </ul>
                <div class="navbar-right">
                    <div class="language-switcher">
                        <?php
                        $switch_lang = $lang == 'bg' ? 'en' : 'bg';
                        $current_uri = $_SERVER['REQUEST_URI'] ?? '';
                        $parsed = parse_url($current_uri);
                        $path = $parsed['path'] ?? getCurrentPage();
                        $query = [];
                        if (!empty($parsed['query'])) {
                            parse_str($parsed['query'], $query);
                        }
                        $query['lang'] = $switch_lang;
                        $lang_switch_url = $path . '?' . http_build_query($query);
                        ?>
                        <a href="<?php echo htmlspecialchars($lang_switch_url); ?>" class="lang-btn" title="<?php echo $lang == 'bg' ? htmlspecialchars(__('lang_switch_title_to_en')) : htmlspecialchars(__('lang_switch_title_to_bg')); ?>">
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
