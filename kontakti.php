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

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
            <div class="service-card">
                <div class="service-icon">📍</div>
                <h3>Адрес</h3>
                <p>Пловдив 4000<br>ул. „Елиезер Калев" 2, ет. 2</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📞</div>
                <h3>Телефон</h3>
                <p><strong>Офис:</strong><br>+359 32 590 271</p>
                <p><strong>GSM:</strong><br>+359 895 330885<br>+359 896 575351</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📧</div>
                <h3>Имейл</h3>
                <p>office@riolit.bg</p>
                <p style="margin-top: 1rem;"><strong>Web:</strong><br>www.riolit.bg</p>
            </div>
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
                    <label for="subject">Тема *</label>
                    <input type="text" id="subject" name="subject" required>
                </div>

                <div class="form-group">
                    <label for="message">Съобщение *</label>
                    <textarea id="message" name="message" required></textarea>
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
