<?php
$page_title = "Контакти - Риолит Инженеринг ЕООД";
$page_description = "Свържете се с Риолит Инженеринг ЕООД за консултации и проектантска подкрепа";
include 'includes/header.php';
?>

<main>
    <section class="page-content">
        <div class="page-header">
            <h1>Свържете се с нас</h1>
            <p>Готови сме да отговорим на вашите въпроси и да предложим решение за вашия проект</p>
        </div>

        <!-- Contact Information - Horizontal -->
        <div class="contact-info-horizontal">
            <h2 style="color: var(--primary-color); margin-bottom: 2rem; text-align: center;">Контактна информация</h2>
            <div class="contact-cards-grid">
                <div class="contact-card contact-card-address">
                    <div class="contact-card-icon">📍</div>
                    <h3>Адрес</h3>
                    <div class="contact-card-content">
                        <p>Пловдив 4000</p>
                        <p>ул. „Елиезер Калев" 2, ет. 2</p>
                    </div>
                </div>

                <div class="contact-card contact-card-phone">
                    <div class="contact-card-icon">📞</div>
                    <h3>Телефон</h3>
                    <div class="contact-card-content">
                        <div class="contact-item">
                            <span class="contact-label">Офис:</span>
                            <a href="tel:+35932590271" class="contact-link">+359 32 590 271</a>
                        </div>
                        <div class="contact-item">
                            <span class="contact-label">GSM:</span>
                            <div class="contact-links">
                                <a href="tel:+359895330885" class="contact-link">+359 895 330885</a>
                                <a href="tel:+359896575351" class="contact-link">+359 896 575351</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-card contact-card-email">
                    <div class="contact-card-icon">📧</div>
                    <h3>Имейл</h3>
                    <div class="contact-card-content">
                        <div class="contact-item">
                            <a href="mailto:office@riolit.bg" class="contact-link contact-link-email">office@riolit.bg</a>
                        </div>
                        <div class="contact-item" style="margin-top: 1rem;">
                            <span class="contact-label">Web:</span>
                            <a href="http://www.riolit.bg" target="_blank" rel="noopener noreferrer" class="contact-link">www.riolit.bg</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google Maps - Full Width -->
        <div class="contact-map-section" style="margin-top: 3rem; margin-bottom: 3rem;">
            <h2 style="color: var(--primary-color); margin-bottom: 2rem; text-align: center;">Нашето местоположение</h2>
            <div class="map-container">
                <iframe 
                    src="https://maps.google.com/maps?q=Plovdiv,+ul.+Eliezer+Kalev+2&hl=bg&z=15&output=embed" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Риолит Инженеринг ЕООД - Пловдив, ул. Елиезер Калев 2">
                </iframe>
            </div>
            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem; text-align: center;">
                <a href="https://www.google.com/maps/search/?api=1&query=Пловдив+ул.+Елиезер+Калев+2" target="_blank" rel="noopener noreferrer" style="color: var(--primary-color); text-decoration: none;">
                    Отвори в Google Maps →
                </a>
            </p>
        </div>

        <div class="contact-form">
            <h2 style="margin-bottom: 1.5rem; color: var(--primary-color);">Изпратете ни съобщение</h2>
            <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
                <div style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 5px; margin-bottom: 1.5rem; border: 1px solid #c3e6cb;">
                    <strong>Успех!</strong> Вашето съобщение е изпратено успешно. Ще се свържем с вас скоро.
                </div>
            <?php endif; ?>
            <?php if (isset($_GET['error'])): ?>
                <div style="background: #f8d7da; color: #721c24; padding: 1rem; border-radius: 5px; margin-bottom: 1.5rem; border: 1px solid #f5c6cb;">
                    <strong>Грешка!</strong> 
                    <?php 
                    if ($_GET['error'] == 'missing_fields') {
                        echo 'Моля, попълнете всички задължителни полета.';
                    } elseif ($_GET['error'] == 'invalid_email') {
                        echo 'Моля, въведете валиден имейл адрес.';
                    } elseif ($_GET['error'] == 'privacy_required') {
                        echo 'Моля, приемете Политиката за поверителност.';
                    } else {
                        echo 'Възникна грешка при изпращането на съобщението.';
                    }
                    ?>
                </div>
            <?php endif; ?>
            <form action="contact-handler.php" method="POST">
                <div class="form-group">
                    <label for="name">Име *</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Имейл *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Телефон</label>
                    <input type="tel" id="phone" name="phone">
                </div>

                <div class="form-group">
                    <label for="message">Съобщение *</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <div class="form-group">
                    <label class="privacy-checkbox">
                        <input type="checkbox" name="privacy" required>
                        <span>Съгласен съм с <a href="privacy-policy.php" target="_blank" style="color: var(--primary-color); text-decoration: underline;">Политика за поверителност</a> *</span>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary btn-large">Изпрати съобщение</button>
            </form>
        </div>

        <div style="margin-top: 3rem; padding: 2rem; background: var(--bg-light); border-radius: 10px;">
            <h2 style="margin-bottom: 1rem; color: var(--primary-color);">Нашите услуги</h2>
            <p style="color: var(--text-light); line-height: 1.8; margin-bottom: 1rem;">
                Ние предлагаме безплатни консултации и проектантска подкрепа за всички ваши проекти. Нашият екип е готов да ви помогне с:
            </p>
            <ul style="list-style: none; padding-left: 0;">
                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--text-light);">
                    <span style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;">✓</span>
                    Консултации по проекти
                </li>
                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--text-light);">
                    <span style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;">✓</span>
                    Проектантска подкрепа
                </li>
                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--text-light);">
                    <span style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;">✓</span>
                    Иновативни решения
                </li>
                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative; color: var(--text-light);">
                    <span style="position: absolute; left: 0; color: var(--primary-color); font-weight: bold;">✓</span>
                    Технически съвети
                </li>
            </ul>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
