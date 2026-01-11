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
                        <img src="assets/media/montajni_uslugi.webp" alt="<?php echo __('service_installation'); ?>" loading="lazy">
                    </div>
                    <h3><?php echo __('service_installation'); ?></h3>
                    <p><?php echo __('service_installation_desc'); ?></p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="https://www.gic.si/storage/app/media/work-area-road-repair-sewer-repairs-tubes-ground-2023-11-27-04-59-12-utc.jpg" alt="<?php echo __('service_water'); ?>" loading="lazy">
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
                        <span class="feature-number" data-target="30" data-suffix="+">0</span>
                        <span class="feature-label"><?php echo __('stat_projects'); ?></span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-number" data-target="15" data-suffix="+">0</span>
                        <span class="feature-label"><?php echo __('stat_equipment'); ?></span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-number" data-target="100" data-suffix="%">0</span>
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
            </div>
        </div>
    </section>

    <!-- VALSIR Representative Section -->
    <section class="valsir-section">
        <div class="container">
            <div class="valsir-content">
                <div class="valsir-image">
                    <img src="Valsir.png" alt="VALSIR S.p.A" style="max-width: 300px; width: 100%; height: auto; display: block;">
                </div>
                <div class="valsir-text">
                    <h2><?php echo __('quality_representative'); ?></h2>
                    <p><?php echo __('quality_representative_desc'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Chamber Member Section -->
    <section class="chamber-section">
        <div class="container">
            <div class="chamber-content">
                <div class="chamber-text">
                    <h2><?php echo __('quality_chamber'); ?></h2>
                    <p><?php echo __('quality_chamber_desc'); ?></p>
                </div>
                <div class="chamber-image">
                    <img src="medal.png" alt="Член на КАМАРАТА НА СТРОИТЕЛИТЕ В БЪЛГАРИЯ" style="max-width: 250px; width: 100%; height: auto; display: block;">
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Carousel Section -->
    <section class="brand-carousel-section">
        <div class="container">
            <h2 class="brand-carousel-title"><?php echo __('section_partners'); ?></h2>
            <div class="brand-carousel-container">
                <div class="brand-carousel-track">
                    <!-- First set of brands -->
                    <div class="brand-item">
                        <img src="partners/aco.png" alt="ACO" class="brand-logo">
                    </div>
                    <div class="brand-item">
                        <img src="partners/argogroup.jpg" alt="Argo Group" class="brand-logo">
                    </div>
                    <div class="brand-item brand-item-ataro">
                        <img src="partners/ataro.png" alt="ATARO" class="brand-logo brand-logo-ataro">
                    </div>
                    <div class="brand-item brand-item-barage">
                        <img src="partners/barage_group.png" alt="Barage Group" class="brand-logo brand-logo-barage">
                    </div>
                    <div class="brand-item brand-item-decatrade">
                        <img src="partners/decatrade.jpg" alt="Decatrade" class="brand-logo brand-logo-decatrade">
                    </div>
                    <div class="brand-item brand-item-glavbolgarstroy">
                        <img src="partners/glavbolgarstroy.avif" alt="Главболгарстрой" class="brand-logo brand-logo-glavbolgarstroy">
                    </div>
                    <div class="brand-item brand-item-hauraton">
                        <img src="partners/hauraton.jpg" alt="Hauraton" class="brand-logo brand-logo-hauraton">
                    </div>
                    <div class="brand-item brand-item-hmc">
                        <img src="partners/HMC.png" alt="HMC" class="brand-logo brand-logo-hmc">
                    </div>
                    <div class="brand-item">
                        <img src="partners/HydroPro.png" alt="HydroPro" class="brand-logo">
                    </div>
                    <div class="brand-item">
                        <img src="partners/isa-2000.png" alt="ISA 2000" class="brand-logo">
                    </div>
                    <div class="brand-item">
                        <img src="partners/multikom.jpg" alt="Multikom" class="brand-logo">
                    </div>
                    <div class="brand-item">
                        <img src="partners/strabag.png" alt="Strabag" class="brand-logo">
                    </div>
                    <div class="brand-item">
                        <img src="partners/artstroismolian.png" alt="Artstroi Smolian" class="brand-logo">
                    </div>
                    <!-- Duplicate set for seamless infinite loop -->
                    <div class="brand-item">
                        <img src="partners/aco.png" alt="ACO" class="brand-logo">
                    </div>
                    <div class="brand-item">
                        <img src="partners/argogroup.jpg" alt="Argo Group" class="brand-logo">
                    </div>
                    <div class="brand-item brand-item-ataro">
                        <img src="partners/ataro.png" alt="ATARO" class="brand-logo brand-logo-ataro">
                    </div>
                    <div class="brand-item brand-item-barage">
                        <img src="partners/barage_group.png" alt="Barage Group" class="brand-logo brand-logo-barage">
                    </div>
                    <div class="brand-item brand-item-decatrade">
                        <img src="partners/decatrade.jpg" alt="Decatrade" class="brand-logo brand-logo-decatrade">
                    </div>
                    <div class="brand-item brand-item-glavbolgarstroy">
                        <img src="partners/glavbolgarstroy.avif" alt="Главболгарстрой" class="brand-logo brand-logo-glavbolgarstroy">
                    </div>
                    <div class="brand-item brand-item-hauraton">
                        <img src="partners/hauraton.jpg" alt="Hauraton" class="brand-logo brand-logo-hauraton">
                    </div>
                    <div class="brand-item brand-item-hmc">
                        <img src="partners/HMC.png" alt="HMC" class="brand-logo brand-logo-hmc">
                    </div>
                    <div class="brand-item">
                        <img src="partners/HydroPro.png" alt="HydroPro" class="brand-logo">
                    </div>
                    <div class="brand-item">
                        <img src="partners/isa-2000.png" alt="ISA 2000" class="brand-logo">
                    </div>
                    <div class="brand-item">
                        <img src="partners/multikom.jpg" alt="Multikom" class="brand-logo">
                    </div>
                    <div class="brand-item">
                        <img src="partners/strabag.png" alt="Strabag" class="brand-logo">
                    </div>
                    <div class="brand-item">
                        <img src="partners/artstroismolian.png" alt="Artstroi Smolian" class="brand-logo">
                    </div>
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
