<?php
include 'includes/translations.php';
$page_title = getPageTitle('home');
$page_description = getPageDescription('home');
include 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title"><?php echo __('hero_title'); ?></h1>
            <p class="hero-subtitle"><?php echo __('hero_subtitle'); ?></p>
            <div class="hero-buttons">
                <a href="uslugi.php" class="btn btn-primary"><?php echo __('btn_our_services'); ?></a>
                <a href="kontakti.php" class="btn btn-secondary"><?php echo __('btn_contact_us'); ?></a>
            </div>
        </div>
        <div class="hero-overlay"></div>
    </section>

    <!-- Services Overview -->
    <section class="services-overview">
        <div class="container">
            <h2 class="section-title"><?php echo __('section_main_activities'); ?></h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <img src="https://earthmovingauckland.co.nz/wp-content/uploads/2019/01/excavationtippersaukland.jpg" alt="<?php echo __('service_excavation'); ?>" loading="lazy">
                    </div>
                    <h3><?php echo __('service_excavation'); ?></h3>
                    <p><?php echo __('service_excavation_desc'); ?></p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="https://www.buildmyinfra.com/img/services/mep.jpg" alt="<?php echo __('service_installation'); ?>" loading="lazy">
                    </div>
                    <h3><?php echo __('service_installation'); ?></h3>
                    <p><?php echo __('service_installation_desc'); ?></p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="https://insideclimatenews.org/wp-content/uploads/2023/09/Watermainbreak-scaled.jpeg" alt="<?php echo __('service_water'); ?>" loading="lazy">
                    </div>
                    <h3><?php echo __('service_water'); ?></h3>
                    <p><?php echo __('service_water_desc'); ?></p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="https://blog.tealpot.com/wp-content/uploads/2025/01/a-worker-pours-liquid-asphalt-molten-bitumen-from-2024-08-08-08-02-52-utc.webp" alt="<?php echo __('service_road'); ?>" loading="lazy">
                    </div>
                    <h3><?php echo __('service_road'); ?></h3>
                    <p><?php echo __('service_road_desc'); ?></p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="https://www.ecmag.com/images/default-source/bonotom/ec-2023/ec2312-december-2023/fiberoptics_adobestock_263095138.tmb-art-detail.jpg?Culture=en&sfvrsn=a0b87dba_1" alt="<?php echo __('service_telecom'); ?>" loading="lazy">
                    </div>
                    <h3><?php echo __('service_telecom'); ?></h3>
                    <p><?php echo __('service_telecom_desc'); ?></p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="https://cdn.prod.website-files.com/645093d78f71463ec2300eb0/66a80c91ef1ee66ab6ee47f5_shutterstock_1562046478.jpg" alt="<?php echo __('service_irrigation'); ?>" loading="lazy">
                    </div>
                    <h3><?php echo __('service_irrigation'); ?></h3>
                    <p><?php echo __('service_irrigation_desc'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-preview">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2><?php echo __('section_about'); ?></h2>
                    <p><?php echo __('about_text1'); ?></p>
                    <p><?php echo __('about_text2'); ?></p>
                    <a href="za-nas.php" class="btn btn-outline"><?php echo __('btn_learn_more'); ?></a>
                </div>
                <div class="about-features">
                    <div class="feature-item">
                        <span class="feature-number">30+</span>
                        <span class="feature-label"><?php echo __('stat_projects'); ?></span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-number">21</span>
                        <span class="feature-label"><?php echo __('stat_equipment'); ?></span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-number">100%</span>
                        <span class="feature-label"><?php echo __('stat_quality'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Section -->
    <section class="quality-section">
        <div class="container">
            <h2 class="section-title"><?php echo __('section_why_choose'); ?></h2>
            <div class="quality-grid">
                <div class="quality-item">
                    <h3><?php echo __('quality_materials'); ?></h3>
                    <p><?php echo __('quality_materials_desc'); ?></p>
                </div>
                <div class="quality-item">
                    <h3><?php echo __('quality_team'); ?></h3>
                    <p><?php echo __('quality_team_desc'); ?></p>
                </div>
                <div class="quality-item">
                    <h3><?php echo __('quality_innovative'); ?></h3>
                    <p><?php echo __('quality_innovative_desc'); ?></p>
                </div>
                <div class="quality-item">
                    <h3><?php echo __('quality_european'); ?></h3>
                    <p><?php echo __('quality_european_desc'); ?></p>
                </div>
                <div class="quality-item">
                    <h3><?php echo __('quality_representative'); ?></h3>
                    <p><?php echo __('quality_representative_desc'); ?></p>
                </div>
                <div class="quality-item">
                    <h3><?php echo __('quality_chamber'); ?></h3>
                    <img src="medal.jpg" alt="Член на КАМАРАТА НА СТРОИТЕЛИТЕ В БЪЛГАРИЯ" style="max-width: 200px; width: 100%; height: auto; margin: 1rem 0; display: block;">
                    <p><?php echo __('quality_chamber_desc'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2><?php echo __('section_ready'); ?></h2>
                <p><?php echo __('section_ready_desc'); ?></p>
                <a href="kontakti.php" class="btn btn-primary btn-large"><?php echo __('btn_contact_us'); ?></a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
