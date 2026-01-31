    <footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <?php if (!function_exists('__')) { include_once __DIR__ . '/translations.php'; } ?>
                    <h3><?php echo __('footer_about_title'); ?></h3>
                    <p><?php echo __('footer_about_text'); ?></p>
                </div>
                <div class="footer-section">
                    <h4><?php echo __('footer_quick_links'); ?></h4>
                    <ul>
                        <li><a href="index.php"><?php echo __('nav_home'); ?></a></li>
                        <li><a href="za-nas.php"><?php echo __('nav_about'); ?></a></li>
                        <li><a href="uslugi.php"><?php echo __('nav_services'); ?></a></li>
                        <li><a href="proekti.php"><?php echo __('nav_projects'); ?></a></li>
                        <li><a href="kontakti.php"><?php echo __('nav_contact'); ?></a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4><?php echo __('footer_services_title'); ?></h4>
                    <ul>
                        <li><?php echo __('service_excavation'); ?></li>
                        <li><?php echo __('service_installation'); ?></li>
                        <li><?php echo __('service_water'); ?></li>
                        <li><?php echo __('service_road'); ?></li>
                        <li><?php echo __('service_telecom'); ?></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4><?php echo __('footer_contacts_title'); ?></h4>
                    <p><strong><?php echo __('footer_address_label'); ?></strong><br><?php echo __('footer_address_value'); ?></p>
                    <p><strong><?php echo __('footer_phone_label'); ?></strong><br>+359 32 590 271</p>
                    <p><strong><?php echo __('footer_gsm_label'); ?></strong><br>+359 895 330885<br>+359 896 575351</p>
                    <p><strong><?php echo __('footer_email_label'); ?></strong><br>office@riolit.bg</p>
                    <p><strong><?php echo __('footer_web_label'); ?></strong><br>www.riolit.bg</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php echo __('site_name'); ?>. <?php echo __('footer_rights_reserved'); ?></p>
            </div>
        </div>
    </footer>

    <?php
    $js_path = __DIR__ . '/../assets/js/main.js';
    $js_version = file_exists($js_path) ? filemtime($js_path) : time();
    ?>
    <script src="assets/js/main.js?v=<?php echo $js_version; ?>"></script>
</body>
</html>
