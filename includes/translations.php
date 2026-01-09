<?php
// Include language management
if (!isset($lang)) {
    include_once 'language.php';
}

// Page titles and descriptions
$page_titles = [
    'bg' => [
        'home' => 'Начало - Риолит Инженеринг ЕООД',
        'about' => 'За нас - Риолит Инженеринг ЕООД',
        'services' => 'Услуги - Риолит Инженеринг ЕООД',
        'projects' => 'Проекти - Риолит Инженеринг ЕООД',
        'contact' => 'Контакти - Риолит Инженеринг ЕООД',
    ],
    'en' => [
        'home' => 'Home - Riolit Engineering Ltd.',
        'about' => 'About Us - Riolit Engineering Ltd.',
        'services' => 'Services - Riolit Engineering Ltd.',
        'projects' => 'Projects - Riolit Engineering Ltd.',
        'contact' => 'Contact - Riolit Engineering Ltd.',
    ]
];

$page_descriptions = [
    'bg' => [
        'home' => 'Риолит Инженеринг ЕООД - строителна компания специализирана в изкопи и насипи, инфраструктурни и жилищни обекти',
        'about' => 'Запознайте се с Риолит Инженеринг ЕООД - нашият екип, мисия и ценности',
        'services' => 'Наши услуги: изкопи и насипи, монтажни услуги, водоснабдяване, канализация, пътна инфраструктура',
        'projects' => 'Нашите проекти - водещи инфраструктурни проекти по Европейски програми и частни инвестиции',
        'contact' => 'Свържете се с Риолит Инженеринг ЕООД за консултации и проектантска подкрепа',
    ],
    'en' => [
        'home' => 'Riolit Engineering Ltd. - construction company specialized in excavation and embankments, infrastructure and residential projects',
        'about' => 'Get to know Riolit Engineering Ltd. - our team, mission and values',
        'services' => 'Our services: excavation and embankments, installation services, water supply, sewerage, road infrastructure',
        'projects' => 'Our projects - leading infrastructure projects under European programs and private investments',
        'contact' => 'Contact Riolit Engineering Ltd. for consultations and design support',
    ]
];

// All translations
$texts = [
    'bg' => [
        // Navigation
        'nav_home' => 'Начало',
        'nav_about' => 'За нас',
        'nav_services' => 'Услуги',
        'nav_projects' => 'Проекти',
        'nav_contact' => 'Контакти',
        
        // Home page
        'hero_title' => 'Риолит Инженеринг ЕООД',
        'hero_subtitle' => 'Професионални строително-монтажни услуги с високи стандарти за качество',
        'btn_our_services' => 'Нашите услуги',
        'btn_contact_us' => 'Свържете се с нас',
        'section_main_activities' => 'Нашите основни дейности',
        'section_about' => 'За Риолит Инженеринг',
        'section_why_choose' => 'Защо да изберете нас?',
        'section_ready' => 'Готови ли сте да започнем вашия проект?',
        'section_ready_desc' => 'Свържете се с нас за безплатна консултация и проектна подкрепа',
        'btn_learn_more' => 'Научете повече',
        
        // Services
        'service_excavation' => 'Изкопи и насипи',
        'service_excavation_desc' => 'Професионални земни работи за инфраструктурни и жилищни обекти',
        'service_installation' => 'Монтажни услуги',
        'service_installation_desc' => 'В и К, ЕЛ, Газоснабдяване, О и В, покривно отводняване',
        'service_water' => 'Водоснабдяване и канализация',
        'service_water_desc' => 'Подземни и надземни тръбни системи, дренаж, инфилтриращи системи',
        'service_road' => 'Пътна инфраструктура',
        'service_road_desc' => 'Вертикална планировка, пътна част, тротоари, бордюри и павета',
        'service_telecom' => 'Телекомуникации',
        'service_telecom_desc' => 'Инфраструктурни решения за телекомуникационни системи',
        'service_irrigation' => 'Напоителни системи',
        'service_irrigation_desc' => 'Професионални решения за напояване и дренаж',
        
        // About
        'about_text1' => 'Риолит Инженеринг ЕООД е строителна компания с основна дейност: изграждане на инфраструктурни и жилищни обекти, тясно специализирани в изкопи и насипи, доставка и монтажни услуги.',
        'about_text2' => 'Ние поддържаме високи стандарти за качество, предоставяйки на клиентите си последователни и изключително професионални услуги. Екипът ни е от високо-квалифицирани професионалисти в областта на строително-монтажните услуги.',
        
        // Quality
        'quality_materials' => 'Висококачествени материали',
        'quality_materials_desc' => 'Работим само с висококачествени и иновативни материали, които гарантират дълготрайност и надеждност.',
        'quality_team' => 'Професионален екип',
        'quality_team_desc' => 'Екипът ни е от високо-квалифицирани професионалисти с дългогодишен опит в строителството.',
        'quality_innovative' => 'Иновативни решения',
        'quality_innovative_desc' => 'Предлагаме иновативни решения и най-новите приложения в областта на строителството.',
        'quality_european' => 'Европейски проекти',
        'quality_european_desc' => 'Участваме в водещи инфраструктурни проекти, реализирани по Европейски програми и частни инвестиции.',
        'quality_representative' => 'Официален представител',
        'quality_representative_desc' => 'Официален представител на VALSIR S.p.A, Италия за система за вакуумно отводняване на плоски покриви – RAIN PLUS ©',
        'quality_chamber' => 'Член на Камарата',
        'quality_chamber_desc' => 'Член на КАМАРАТА НА СТРОИТЕЛИТЕ В БЪЛГАРИЯ',
        
        // Stats
        'stat_projects' => 'Завършени проекти',
        'stat_equipment' => 'Единици техника',
        'stat_quality' => 'Качество',
        
        // Partners
        'section_partners' => 'Нашите Партньори',
    ],
    'en' => [
        // Navigation
        'nav_home' => 'Home',
        'nav_about' => 'About Us',
        'nav_services' => 'Services',
        'nav_projects' => 'Projects',
        'nav_contact' => 'Contact',
        
        // Home page
        'hero_title' => 'Riolit Engineering Ltd.',
        'hero_subtitle' => 'Professional construction and installation services with high quality standards',
        'btn_our_services' => 'Our Services',
        'btn_contact_us' => 'Contact Us',
        'section_main_activities' => 'Our Main Activities',
        'section_about' => 'About Riolit Engineering',
        'section_why_choose' => 'Why Choose Us?',
        'section_ready' => 'Ready to Start Your Project?',
        'section_ready_desc' => 'Contact us for a free consultation and design support',
        'btn_learn_more' => 'Learn More',
        
        // Services
        'service_excavation' => 'Excavation and Embankments',
        'service_excavation_desc' => 'Professional earthworks for infrastructure and residential projects',
        'service_installation' => 'Installation Services',
        'service_installation_desc' => 'Water & Sewerage, Electrical, Gas Supply, Heating & Ventilation, Roof Drainage',
        'service_water' => 'Water Supply and Sewerage',
        'service_water_desc' => 'Underground and aboveground pipe systems, drainage, infiltration systems',
        'service_road' => 'Road Infrastructure',
        'service_road_desc' => 'Vertical planning, road section, sidewalks, curbs and pavements',
        'service_telecom' => 'Telecommunications',
        'service_telecom_desc' => 'Infrastructure solutions for telecommunications systems',
        'service_irrigation' => 'Irrigation Systems',
        'service_irrigation_desc' => 'Professional solutions for irrigation and drainage',
        
        // About
        'about_text1' => 'Riolit Engineering Ltd. is a construction company with main activity: construction of infrastructure and residential projects, specialized in excavation and embankments, delivery and installation services.',
        'about_text2' => 'We maintain high quality standards, providing our clients with consistent and highly professional services. Our team consists of highly qualified professionals in the field of construction and installation services.',
        
        // Quality
        'quality_materials' => 'High-Quality Materials',
        'quality_materials_desc' => 'We work only with high-quality and innovative materials that guarantee durability and reliability.',
        'quality_team' => 'Professional Team',
        'quality_team_desc' => 'Our team consists of highly qualified professionals with years of experience in construction.',
        'quality_innovative' => 'Innovative Solutions',
        'quality_innovative_desc' => 'We offer innovative solutions and the latest applications in the field of construction.',
        'quality_european' => 'European Projects',
        'quality_european_desc' => 'We participate in leading infrastructure projects implemented under European programs and private investments.',
        'quality_representative' => 'Official Representative',
        'quality_representative_desc' => 'Official representative of VALSIR S.p.A, Italy for vacuum drainage system for flat roofs – RAIN PLUS ©',
        'quality_chamber' => 'Chamber Member',
        'quality_chamber_desc' => 'Member of the CHAMBER OF BUILDERS IN BULGARIA',
        
        // Stats
        'stat_projects' => 'Completed Projects',
        'stat_equipment' => 'Equipment Units',
        'stat_quality' => 'Quality',
        
        // Partners
        'section_partners' => 'Our Partners',
    ]
];

if (!function_exists('__')) {
    function __($key) {
        global $texts, $lang;
        return isset($texts[$lang][$key]) ? $texts[$lang][$key] : $key;
    }
}

if (!function_exists('getPageTitle')) {
    function getPageTitle($page) {
        global $page_titles, $lang;
        return isset($page_titles[$lang][$page]) ? $page_titles[$lang][$page] : '';
    }
}

if (!function_exists('getPageDescription')) {
    function getPageDescription($page) {
        global $page_descriptions, $lang;
        return isset($page_descriptions[$lang][$page]) ? $page_descriptions[$lang][$page] : '';
    }
}
?>
