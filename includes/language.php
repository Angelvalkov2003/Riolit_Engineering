<?php
// Language management
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// Available languages
$available_languages = ['bg' => 'Български', 'en' => 'English'];

// Get language from session or default to Bulgarian
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'bg';
}

// Handle language switch
if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $available_languages)) {
    $_SESSION['lang'] = $_GET['lang'];
    // No redirect: keep ?lang= in URL for sharing/SEO and to preserve other query params.
}

$lang = $_SESSION['lang'];

// Language strings
$translations = [
    'bg' => [
        'nav_home' => 'Начало',
        'nav_about' => 'За нас',
        'nav_services' => 'Услуги',
        'nav_projects' => 'Проекти',
        'nav_contact' => 'Контакти',
        'lang_switch' => 'EN',
    ],
    'en' => [
        'nav_home' => 'Home',
        'nav_about' => 'About Us',
        'nav_services' => 'Services',
        'nav_projects' => 'Projects',
        'nav_contact' => 'Contact',
        'lang_switch' => 'BG',
    ]
];

if (!function_exists('t')) {
    function t($key) {
        global $translations, $lang;
        return isset($translations[$lang][$key]) ? $translations[$lang][$key] : $key;
    }
}

// Get current page name for language switching
if (!function_exists('getCurrentPage')) {
    function getCurrentPage() {
        return basename($_SERVER['PHP_SELF']);
    }
}
?>
