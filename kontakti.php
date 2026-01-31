<?php
include 'includes/translations.php';
$page_title = getPageTitle('contact');
$page_description = getPageDescription('contact');
include 'includes/header.php';
?>

<main>
    <section class="page-content">
        <div class="page-header">
            <h1><?php echo __('contact_title'); ?></h1>
            <p><?php echo __('contact_subtitle'); ?></p>
        </div>

        <!-- Contact Information - Horizontal -->
        <div class="contact-info-horizontal">
            <h2 style="color: var(--primary-color); margin-bottom: 2rem; text-align: center;"><?php echo __('contact_info_title'); ?></h2>
            <div class="contact-cards-grid">
                <div class="contact-card contact-card-phone">
                    <div class="contact-card-icon">📞</div>
                    <h3><?php echo __('contact_phone'); ?></h3>
                    <div class="contact-card-content">
                        <div class="contact-item">
                            <span class="contact-label"><?php echo __('contact_office'); ?></span>
                            <a href="tel:+35932590271" class="contact-link">+359 32 590 271</a>
                        </div>
                        <div class="contact-item">
                            <span class="contact-label"><?php echo __('contact_gsm'); ?></span>
                            <div class="contact-links">
                                <a href="tel:+359895330885" class="contact-link">+359 895 330885</a>
                                <a href="tel:+359896575351" class="contact-link">+359 896 575351</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-card contact-card-email">
                    <div class="contact-card-icon">📧</div>
                    <h3><?php echo __('contact_email'); ?></h3>
                    <div class="contact-card-content">
                        <div class="contact-item">
                            <a href="mailto:office@riolit.bg" class="contact-link contact-link-email">office@riolit.bg</a>
                        </div>
                        <div class="contact-item" style="margin-top: 1rem;">
                            <span class="contact-label"><?php echo __('contact_web'); ?></span>
                            <a href="http://www.riolit.bg" target="_blank" rel="noopener noreferrer" class="contact-link">www.riolit.bg</a>
                        </div>
                    </div>
                </div>

                <div class="contact-card contact-card-facebook">
                    <div class="contact-card-icon facebook-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="48" height="48">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </div>
                    <h3><?php echo __('contact_facebook'); ?></h3>
                    <div class="contact-card-content">
                        <div class="contact-item" style="margin-bottom: 0.5rem;">
                            <p style="color: var(--text-medium); font-weight: 600; margin: 0;"><?php echo __('contact_facebook_name'); ?></p>
                        </div>
                        <div class="contact-item">
                            <a href="https://www.facebook.com/rioliting#" target="_blank" rel="noopener noreferrer" class="contact-link facebook-link">
                                <span><?php echo __('contact_facebook_link'); ?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16" style="margin-left: 0.5rem; vertical-align: middle;">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-form-wrapper" id="contact-form">
            <div class="contact-form-header">
                <h2><?php echo __('contact_form_title'); ?></h2>
                <p><?php echo __('contact_form_subtitle'); ?></p>
            </div>

            <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
                <!-- Success overlay/toast -->
                <div class="contact-success-overlay is-visible" id="contact-success-overlay" aria-live="polite" aria-atomic="true">
                    <div class="contact-success-card">
                        <div class="contact-success-check">
                            <svg viewBox="0 0 52 52" width="52" height="52" aria-hidden="true">
                                <circle class="check-circle" cx="26" cy="26" r="25" fill="none"></circle>
                                <path class="check-mark" fill="none" d="M14 27 L22 35 L38 18"></path>
                            </svg>
                        </div>
                        <div class="contact-success-text">
                            <div class="contact-success-title"><?php echo __('contact_form_success'); ?></div>
                            <div class="contact-success-subtitle"><?php echo __('contact_form_success_msg'); ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (isset($_GET['error'])): ?>
                <div class="form-message form-message-error">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="24" height="24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                    <div>
                        <strong><?php echo __('contact_form_error'); ?></strong>
                        <p>
                            <?php 
                            if ($_GET['error'] == 'missing_fields') {
                                echo __('contact_form_error_missing');
                            } elseif ($_GET['error'] == 'invalid_email') {
                                echo __('contact_form_error_email');
                            } elseif ($_GET['error'] == 'privacy_required') {
                                echo __('contact_form_error_privacy');
                            } elseif ($_GET['error'] == 'send_failed') {
                                echo __('contact_form_error_general');
                            } else {
                                echo __('contact_form_error_general');
                            }
                            ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>

            <form action="contact-handler.php" method="POST" class="contact-form-modern">
                <div class="form-row">
                    <div class="form-group-modern">
                        <label for="name">
                            <span class="label-text"><?php echo __('contact_form_name'); ?></span>
                            <span class="label-required">*</span>
                        </label>
                        <div class="input-wrapper">
                            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <input type="text" id="name" name="name" placeholder="<?php echo __('contact_name_placeholder'); ?>" required>
                        </div>
                    </div>

                    <div class="form-group-modern">
                        <label for="email">
                            <span class="label-text"><?php echo __('contact_form_email'); ?></span>
                            <span class="label-required">*</span>
                        </label>
                        <div class="input-wrapper">
                            <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <input type="email" id="email" name="email" placeholder="<?php echo __('contact_email_placeholder'); ?>" required>
                        </div>
                    </div>
                </div>

                <div class="form-group-modern">
                    <label for="phone">
                        <span class="label-text"><?php echo __('contact_form_phone'); ?></span>
                    </label>
                    <div class="input-wrapper">
                        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <input type="tel" id="phone" name="phone" placeholder="<?php echo __('contact_phone_placeholder'); ?>">
                    </div>
                </div>

                <div class="form-group-modern">
                    <label for="message">
                        <span class="label-text"><?php echo __('contact_form_message'); ?></span>
                        <span class="label-required">*</span>
                    </label>
                    <div class="textarea-wrapper">
                        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <textarea id="message" name="message" placeholder="<?php echo __('contact_message_placeholder'); ?>" required></textarea>
                    </div>
                </div>

                <div class="form-group-modern checkbox-group">
                    <label class="privacy-checkbox-modern">
                        <input type="checkbox" name="privacy" required>
                        <span class="checkbox-custom"></span>
                        <span class="checkbox-text"><?php echo __('contact_form_privacy'); ?> <a href="privacy-policy.php" target="_blank"><?php echo __('contact_form_privacy_link'); ?></a> <span class="label-required">*</span></span>
                    </label>
                </div>

                <button type="submit" class="btn-submit-modern">
                    <span><?php echo __('contact_form_submit'); ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                        <line x1="22" y1="2" x2="11" y2="13"></line>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>
                </button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
