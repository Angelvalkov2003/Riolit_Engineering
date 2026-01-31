<?php
include 'includes/translations.php';
$page_title = __('privacy_page_title');
$page_description = __('privacy_page_description');
include 'includes/header.php';
?>

<main>
    <section class="page-content">
        <div class="page-header">
            <h1><?php echo __('privacy_h1'); ?></h1>
            <p><?php echo __('privacy_last_updated'); ?> <?php echo date('d.m.Y'); ?></p>
        </div>

        <div class="about-detail">
            <h2><?php echo __('privacy_s1_title'); ?></h2>
            <p><?php echo __('privacy_s1_p1'); ?></p>
            <p><?php echo __('privacy_s1_p2'); ?></p>

            <h2><?php echo __('privacy_s2_title'); ?></h2>
            <p><?php echo __('privacy_s2_intro'); ?></p>
            <ul style="list-style: disc; padding-left: 2rem; margin: 1rem 0;">
                <li><?php echo __('privacy_s2_li1'); ?></li>
                <li><?php echo __('privacy_s2_li2'); ?></li>
                <li><?php echo __('privacy_s2_li3'); ?></li>
                <li><?php echo __('privacy_s2_li4'); ?></li>
            </ul>

            <h2><?php echo __('privacy_s3_title'); ?></h2>
            <p><?php echo __('privacy_s3_intro'); ?></p>
            <ul style="list-style: disc; padding-left: 2rem; margin: 1rem 0;">
                <li><?php echo __('privacy_s3_li1'); ?></li>
                <li><?php echo __('privacy_s3_li2'); ?></li>
                <li><?php echo __('privacy_s3_li3'); ?></li>
                <li><?php echo __('privacy_s3_li4'); ?></li>
                <li><?php echo __('privacy_s3_li5'); ?></li>
            </ul>

            <h2><?php echo __('privacy_s4_title'); ?></h2>
            <p><?php echo __('privacy_s4_intro'); ?></p>
            <ul style="list-style: disc; padding-left: 2rem; margin: 1rem 0;">
                <li><?php echo __('privacy_s4_li1'); ?></li>
                <li><?php echo __('privacy_s4_li2'); ?></li>
                <li><?php echo __('privacy_s4_li3'); ?></li>
                <li><?php echo __('privacy_s4_li4'); ?></li>
            </ul>

            <h2><?php echo __('privacy_s5_title'); ?></h2>
            <p><?php echo __('privacy_s5_p1'); ?></p>

            <h2><?php echo __('privacy_s6_title'); ?></h2>
            <p><?php echo __('privacy_s6_intro'); ?></p>
            <ul style="list-style: disc; padding-left: 2rem; margin: 1rem 0;">
                <li><?php echo __('privacy_s6_li1'); ?></li>
                <li><?php echo __('privacy_s6_li2'); ?></li>
                <li><?php echo __('privacy_s6_li3'); ?></li>
                <li><?php echo __('privacy_s6_li4'); ?></li>
            </ul>

            <h2><?php echo __('privacy_s7_title'); ?></h2>
            <p><?php echo __('privacy_s7_intro'); ?></p>
            <ul style="list-style: disc; padding-left: 2rem; margin: 1rem 0;">
                <li><?php echo __('privacy_s7_li1'); ?></li>
                <li><?php echo __('privacy_s7_li2'); ?></li>
                <li><?php echo __('privacy_s7_li3'); ?></li>
                <li><?php echo __('privacy_s7_li4'); ?></li>
                <li><?php echo __('privacy_s7_li5'); ?></li>
                <li><?php echo __('privacy_s7_li6'); ?></li>
                <li><?php echo __('privacy_s7_li7'); ?></li>
            </ul>

            <h2><?php echo __('privacy_s8_title'); ?></h2>
            <p><?php echo __('privacy_s8_p1'); ?></p>

            <h2><?php echo __('privacy_s9_title'); ?></h2>
            <p><?php echo __('privacy_s9_p1'); ?></p>

            <h2><?php echo __('privacy_s10_title'); ?></h2>
            <p><?php echo __('privacy_s10_p1'); ?></p>
            <p>
                <strong><?php echo __('privacy_s10_company'); ?></strong><br>
                <?php echo __('privacy_s10_address'); ?><br>
                <?php echo __('privacy_s10_phone'); ?><br>
                <?php echo __('privacy_s10_email'); ?> <a href="mailto:office@riolit.bg" style="color: var(--primary-color);">office@riolit.bg</a>
            </p>

            <h2><?php echo __('privacy_s11_title'); ?></h2>
            <p><?php echo __('privacy_s11_p1'); ?></p>

            <div style="margin-top: 3rem; padding: 2rem; background: var(--bg-light); border-radius: 10px;">
                <p style="color: var(--text-light); line-height: 1.8;">
                    <strong><?php echo __('privacy_note_label'); ?></strong> <?php echo __('privacy_note_text'); ?>
                </p>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
