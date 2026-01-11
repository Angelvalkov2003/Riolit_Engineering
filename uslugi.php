<?php
include 'includes/translations.php';
$page_title = getPageTitle('services');
$page_description = getPageDescription('services');
include 'includes/header.php';
?>

<main>
    <section class="page-content">
        <div class="page-header services-header">
            <h1><?php echo __('services_title'); ?></h1>
            <p class="services-intro"><?php echo __('services_intro'); ?></p>
        </div>

        <div class="services-detailed-grid">
            <div class="service-card-detailed" data-service="excavation">
                <div class="service-card-header">
                    <div class="service-icon-wrapper">
                        <svg class="service-icon-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h2><?php echo __('service_excavation_title'); ?></h2>
                </div>
                <div class="service-card-body">
                    <p class="service-description"><?php echo __('service_excavation_desc_full'); ?></p>
                    <ul class="service-features">
                        <li><span class="check-icon">✓</span> <?php echo __('service_excavation_feature1'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_excavation_feature2'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_excavation_feature3'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_excavation_feature4'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_excavation_feature5'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="service-card-detailed" data-service="installation">
                <div class="service-card-header">
                    <div class="service-icon-wrapper">
                        <svg class="service-icon-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 8V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h2><?php echo __('service_installation_title'); ?></h2>
                </div>
                <div class="service-card-body">
                    <p class="service-description"><?php echo __('service_installation_desc_full'); ?></p>
                    <ul class="service-features">
                        <li><span class="check-icon">✓</span> <?php echo __('service_installation_feature1'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_installation_feature2'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_installation_feature3'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_installation_feature4'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_installation_feature5'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="service-card-detailed" data-service="water">
                <div class="service-card-header">
                    <div class="service-icon-wrapper">
                        <svg class="service-icon-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.69L5.59 8.09C4.81 8.87 4.81 10.13 5.59 10.91L12 17.31L18.41 10.91C19.19 10.13 19.19 8.87 18.41 8.09L12 2.69Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h2><?php echo __('service_water_title'); ?></h2>
                </div>
                <div class="service-card-body">
                    <p class="service-description"><?php echo __('service_water_desc_full'); ?></p>
                    <ul class="service-features">
                        <li><span class="check-icon">✓</span> <?php echo __('service_water_feature1'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_water_feature2'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_water_feature3'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_water_feature4'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_water_feature5'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_water_feature6'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="service-card-detailed" data-service="road">
                <div class="service-card-header">
                    <div class="service-icon-wrapper">
                        <svg class="service-icon-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 12H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3 6H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3 18H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h2><?php echo __('service_road_title'); ?></h2>
                </div>
                <div class="service-card-body">
                    <p class="service-description"><?php echo __('service_road_desc_full'); ?></p>
                    <ul class="service-features">
                        <li><span class="check-icon">✓</span> <?php echo __('service_road_feature1'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_road_feature2'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_road_feature3'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_road_feature4'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_road_feature5'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="service-card-detailed" data-service="telecom">
                <div class="service-card-header">
                    <div class="service-icon-wrapper">
                        <svg class="service-icon-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 16.92V19.92C22 20.52 21.52 21 20.92 21H3.08C2.48 21 2 20.52 2 19.92V16.92M22 16.92C22 16.37 21.79 15.84 21.41 15.41L12.41 6.41C12.04 6.04 11.53 5.83 11 5.83C10.47 5.83 9.96 6.04 9.59 6.41L0.59 15.41C0.21 15.84 0 16.37 0 16.92H22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h2><?php echo __('service_telecom_title'); ?></h2>
                </div>
                <div class="service-card-body">
                    <p class="service-description"><?php echo __('service_telecom_desc_full'); ?></p>
                    <ul class="service-features">
                        <li><span class="check-icon">✓</span> <?php echo __('service_telecom_feature1'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_telecom_feature2'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_telecom_feature3'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="service-card-detailed" data-service="irrigation">
                <div class="service-card-header">
                    <div class="service-icon-wrapper">
                        <svg class="service-icon-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.69L5.59 8.09C4.81 8.87 4.81 10.13 5.59 10.91L12 17.31L18.41 10.91C19.19 10.13 19.19 8.87 18.41 8.09L12 2.69Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 22V17.31" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h2><?php echo __('service_irrigation_title'); ?></h2>
                </div>
                <div class="service-card-body">
                    <p class="service-description"><?php echo __('service_irrigation_desc_full'); ?></p>
                    <ul class="service-features">
                        <li><span class="check-icon">✓</span> <?php echo __('service_irrigation_feature1'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_irrigation_feature2'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_irrigation_feature3'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_irrigation_feature4'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="service-card-detailed" data-service="consulting">
                <div class="service-card-header">
                    <div class="service-icon-wrapper">
                        <svg class="service-icon-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h2><?php echo __('service_consulting_title'); ?></h2>
                </div>
                <div class="service-card-body">
                    <p class="service-description"><?php echo __('service_consulting_desc_full'); ?></p>
                    <ul class="service-features">
                        <li><span class="check-icon">✓</span> <?php echo __('service_consulting_feature1'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_consulting_feature2'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_consulting_feature3'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_consulting_feature4'); ?></li>
                        <li><span class="check-icon">✓</span> <?php echo __('service_consulting_feature5'); ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="cta-section services-cta" style="margin-top: 4rem;">
            <div class="container">
                <div class="cta-content">
                    <h2><?php echo __('services_cta_title'); ?></h2>
                    <p><?php echo __('services_cta_desc'); ?></p>
                    <a href="kontakti.php" class="btn btn-primary btn-large"><?php echo __('services_cta_button'); ?></a>
                </div>
            </div>
        </section>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
