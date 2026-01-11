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
        'service_water_desc' => 'Подземни и надземни тръбни системи, дренаж, инфилтриращи системи за това',
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
        'quality_team' => 'Лицензиран екип',
        'quality_team_desc' => 'Екипът ни е от високо-квалифицирани професионалисти с дългогодишен опит в строителството.',
        'quality_innovative' => 'Иновативни решения',
        'quality_innovative_desc' => 'Предлагаме иновативни решения и най-новите приложения в областта на строителството.',
        'quality_european' => 'Европейски проекти',
        'quality_european_desc' => 'Участваме в водещи инфраструктурни проекти, реализирани по Европейски програми и частни инвестиции.',
        'quality_representative' => 'Официален представител',
        'quality_representative_desc' => 'Риолит Инженеринг ЕООД е официален представител на VALSIR S.p.A, Италия за иновативната система за вакуумно отводняване на плоски покриви – RAIN PLUS ©. Като ексклузивен партньор на водещ италиански производител, ние предлагаме най-модерните решения за отводняване на плоски покриви, които гарантират надеждност, ефективност и дълготрайност. Системата RAIN PLUS © е иновативна технология, която осигурява оптимално отводняване и защита на покривните конструкции.',
        'quality_chamber' => 'Член на Камарата',
        'quality_chamber_desc' => 'Риолит Инженеринг ЕООД е официален член на КАМАРАТА НА СТРОИТЕЛИТЕ В БЪЛГАРИЯ. Нашето членство гарантира спазване на високи професионални стандарти, етични норми и най-добри практики в строителната индустрия. Чрез нашето участие в камарата ние демонстрираме ангажимент към качество, прозрачност и професионализъм във всички наши проекти.',
        
        // Stats
        'stat_projects' => 'Завършени проекти',
        'stat_equipment' => 'години опит',
        'stat_quality' => 'Качество',
        
        // Partners
        'section_partners' => 'Нашите Партньори',
        
        // Services Page
        'services_title' => 'Нашите услуги',
        'services_intro' => 'Професионални строително-монтажни услуги с високи стандарти за качество',
        'service_excavation_title' => 'Изкопи и насипи',
        'service_excavation_desc_full' => 'Специализирани земни работи за инфраструктурни и жилищни обекти',
        'service_excavation_feature1' => 'Професионални изкопи за различни видове проекти',
        'service_excavation_feature2' => 'Изграждане на насипи с високи стандарти',
        'service_excavation_feature3' => 'Земни работи за инфраструктурни обекти',
        'service_excavation_feature4' => 'Земни работи за жилищни обекти',
        'service_excavation_feature5' => 'Вертикална планировка',
        'service_installation_title' => 'Монтажни услуги',
        'service_installation_desc_full' => 'Комплексни монтажни услуги в различни сектори',
        'service_installation_feature1' => 'В и К (Водоснабдяване и канализация)',
        'service_installation_feature2' => 'ЕЛ (Електроинсталации)',
        'service_installation_feature3' => 'Газоснабдяване',
        'service_installation_feature4' => 'О и В (Отопление и вентилация)',
        'service_installation_feature5' => 'Покривно отводняване',
        'service_water_title' => 'Водоснабдяване и канализация',
        'service_water_desc_full' => 'Пълноценни решения за водоснабдяване и канализация',
        'service_water_feature1' => 'Подземни тръбни системи за водоснабдяване',
        'service_water_feature2' => 'Надземни тръбни системи',
        'service_water_feature3' => 'Канализационни системи',
        'service_water_feature4' => 'Дренажни системи',
        'service_water_feature5' => 'Инфилтриращи системи',
        'service_water_feature6' => 'Арматура и фитинги',
        'service_road_title' => 'Пътна инфраструктура',
        'service_road_desc_full' => 'Изграждане на пътна инфраструктура и свързани елементи',
        'service_road_feature1' => 'Вертикална планировка',
        'service_road_feature2' => 'Пътна част',
        'service_road_feature3' => 'Изграждане на тротоари',
        'service_road_feature4' => 'Бордюри и павета',
        'service_road_feature5' => 'Паркингови площи',
        'service_telecom_title' => 'Телекомуникации',
        'service_telecom_desc_full' => 'Инфраструктурни решения за телекомуникационни системи',
        'service_telecom_feature1' => 'Подземни кабелни системи',
        'service_telecom_feature2' => 'Надземни телекомуникационни решения',
        'service_telecom_feature3' => 'Монтаж на телекомуникационна инфраструктура',
        'service_irrigation_title' => 'Напоителни системи и дренаж',
        'service_irrigation_desc_full' => 'Професионални решения за напояване и дренаж',
        'service_irrigation_feature1' => 'Напоителни системи',
        'service_irrigation_feature2' => 'Дренажни системи',
        'service_irrigation_feature3' => 'Дъждоотвеждане',
        'service_irrigation_feature4' => 'Отводняващи системи',
        'service_consulting_title' => 'Консултации и проектантска подкрепа',
        'service_consulting_desc_full' => 'В допълнение към изпълнението на проекти, ние предлагаме',
        'service_consulting_feature1' => 'Безплатни консултации',
        'service_consulting_feature2' => 'Проектантска подкрепа',
        'service_consulting_feature3' => 'Иновативни решения',
        'service_consulting_feature4' => 'Приложение на най-новите технологии',
        'service_consulting_feature5' => 'Технически съвети',
        'services_cta_title' => 'Имате нужда от нашите услуги?',
        'services_cta_desc' => 'Свържете се с нас за безплатна консултация',
        'services_cta_button' => 'Свържете се с нас',
        
        // Contact Page
        'contact_title' => 'Свържете се с нас',
        'contact_subtitle' => 'Готови сме да отговорим на вашите въпроси и да предложим решение за вашия проект',
        'contact_info_title' => 'Контактна информация',
        'contact_phone' => 'Телефон',
        'contact_office' => 'Офис:',
        'contact_gsm' => 'GSM:',
        'contact_email' => 'Имейл',
        'contact_web' => 'Web:',
        'contact_facebook' => 'Facebook',
        'contact_facebook_name' => 'Риолит Инженеринг',
        'contact_facebook_link' => 'Последвайте ни',
        'contact_form_title' => 'Изпратете ни съобщение',
        'contact_form_subtitle' => 'Попълнете формата по-долу и ние ще се свържем с вас възможно най-скоро',
        'contact_form_name' => 'Име',
        'contact_form_email' => 'Имейл',
        'contact_form_phone' => 'Телефон',
        'contact_form_message' => 'Съобщение',
        'contact_form_privacy' => 'Съгласен съм с',
        'contact_form_privacy_link' => 'Политика за поверителност',
        'contact_form_submit' => 'Изпрати съобщение',
        'contact_form_success' => 'Успех!',
        'contact_form_success_msg' => 'Вашето съобщение е изпратено успешно. Ще се свържем с вас скоро.',
        'contact_form_error' => 'Грешка!',
        'contact_form_error_missing' => 'Моля, попълнете всички задължителни полета.',
        'contact_form_error_email' => 'Моля, въведете валиден имейл адрес.',
        'contact_form_error_privacy' => 'Моля, приемете Политиката за поверителност.',
        'contact_form_error_general' => 'Възникна грешка при изпращането на съобщението.',
        'contact_name_placeholder' => 'Вашето име',
        'contact_email_placeholder' => 'ваш@имейл.com',
        'contact_phone_placeholder' => '+359 888 123 456',
        'contact_message_placeholder' => 'Напишете вашето съобщение тук...',
        
        // About Page
        'about_title' => 'За Риолит Инженеринг ЕООД',
        'about_subtitle' => 'Професионализъм, качество и иновации в строителството',
        'about_history_title' => 'Нашата история',
        'about_history_text1' => 'Риолит Инженеринг ЕООД е строителна компания с основна дейност: изграждане на инфраструктурни и жилищни обекти, тясно специализирани в изкопи и насипи, доставка и монтажни услуги насочени в секторите: В и К, ЕЛ, Газоснабдяване, О и В, покривно отводняване, напоителни системи, дренаж, телекомуникации, вертикална планировка, пътна част, изграждане на тротоари и бордюри и павета.',
        'about_history_text2' => 'Ние поддържаме високи стандарти за качество, предоставяйки на клиентите си последователни и изключително професионални услуги. Ние се грижим и за по-добрият клиентски сервиз, включващ консултации и проектантска подкрепа също и иновативни решения в областта на най-новите приложения.',
        'about_history_text3' => 'Екипът на Риолит Инженеринг е от високо-квалифицирани професионалисти в областта на строително-монтажните услуги. Всеки член на екипа притежава дългогодишен опит и експертиза в своята област, което гарантира висококачествено изпълнение на всеки проект.',
        'about_history_text4' => 'Проектите в които участва Риолит Инженеринг са едни от водещите инфраструктурни проекти реализирани по Европейски програми и частни инвестиции. Ние сме горди с участието си в проекти, които подобряват инфраструктурата и качеството на живот в България.',
        'about_history_text5' => 'Материалите с които работи компанията са висококачествени и иновативни. Групите продукти с които работи компанията са подземни и надземни тръбни системи за водоснабдяване, канализация, дренаж, инфилтриращи системи, отопление, дъждоотвеждане, арматура, както и решения за телекомуникациите.',
        'about_equipment_title' => 'Техника и механизация',
        'about_equipment_desc' => 'Фирмата разполага със следните техники, механизация и инструменти:',
        'equipment_1' => 'Колесен багер-чук Caterpillar m316',
        'equipment_2' => 'Комбиниран багер Caterpillar 432E',
        'equipment_3' => 'Мини багер Komatsu с кофа 1 м³ с кофа 40, 60 и 90 см. – 2 бр',
        'equipment_4' => 'Бобкат',
        'equipment_5' => 'Самосвал 4-осен MAN, 17 t - 2 бр',
        'equipment_6' => 'Самосвал 3-осен Mercedes, 14 t',
        'equipment_7' => 'Самосвал Mercedes 4t',
        'equipment_8' => 'Валяк 12 t',
        'equipment_9' => 'Дизелово Ножична Вишка 18м',
        'equipment_10' => 'Машина за челно заваряване – 5 бр',
        'equipment_11' => 'Машина за Електро заваряване ф 40 – ф 500 (дифузно) 1 вид',
        'equipment_12' => 'Машина за Електро заваряване (дифузно) 2 вид',
        'equipment_13' => 'Пневматична машина тип Къртица',
        'equipment_14' => 'Компресор',
        'equipment_15' => 'Агрегат',
        'equipment_16' => 'Трамбовки',
        'equipment_17' => 'Къртачи',
        'equipment_18' => 'Боркорона',
        'equipment_19' => 'Струг',
        'equipment_20' => 'Други инструменти',
        'equipment_21' => 'Фреза за канали – без прахова',
        
        // Projects Page
        'projects_title' => 'Изпълнени обекти на „Риолит Инженеринг"',
        'projects_subtitle' => 'Участваме в водещи инфраструктурни проекти, реализирани по Европейски програми и частни инвестиции',
        'projects_featured_title' => 'Избрани проекти',
        'projects_view_more' => 'Вижте повече информация и снимки',
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
        'quality_team' => 'Licensed Team',
        'quality_team_desc' => 'Our team consists of highly qualified professionals with years of experience in construction.',
        'quality_innovative' => 'Innovative Solutions',
        'quality_innovative_desc' => 'We offer innovative solutions and the latest applications in the field of construction.',
        'quality_european' => 'European Projects',
        'quality_european_desc' => 'We participate in leading infrastructure projects implemented under European programs and private investments.',
        'quality_representative' => 'Official Representative',
        'quality_representative_desc' => 'Riolit Engineering Ltd. is the official representative of VALSIR S.p.A, Italy for the innovative vacuum drainage system for flat roofs – RAIN PLUS ©. As an exclusive partner of a leading Italian manufacturer, we offer the most modern solutions for flat roof drainage that guarantee reliability, efficiency and durability. The RAIN PLUS © system is an innovative technology that ensures optimal drainage and protection of roof structures.',
        'quality_chamber' => 'Chamber Member',
        'quality_chamber_desc' => 'Riolit Engineering Ltd. is an official member of the CHAMBER OF BUILDERS IN BULGARIA. Our membership guarantees adherence to high professional standards, ethical norms and best practices in the construction industry. Through our participation in the chamber, we demonstrate commitment to quality, transparency and professionalism in all our projects.',
        
        // Stats
        'stat_projects' => 'Completed Projects',
        'stat_equipment' => 'Years of Experience',
        'stat_quality' => 'Quality',
        
        // Partners
        'section_partners' => 'Our Partners',
        
        // Services Page
        'services_title' => 'Our Services',
        'services_intro' => 'Professional construction and installation services with high quality standards',
        'service_excavation_title' => 'Excavation and Embankments',
        'service_excavation_desc_full' => 'Specialized earthworks for infrastructure and residential projects',
        'service_excavation_feature1' => 'Professional excavation for various types of projects',
        'service_excavation_feature2' => 'Construction of embankments with high standards',
        'service_excavation_feature3' => 'Earthworks for infrastructure projects',
        'service_excavation_feature4' => 'Earthworks for residential projects',
        'service_excavation_feature5' => 'Vertical planning',
        'service_installation_title' => 'Installation Services',
        'service_installation_desc_full' => 'Comprehensive installation services in various sectors',
        'service_installation_feature1' => 'Water & Sewerage (W&S)',
        'service_installation_feature2' => 'Electrical (EL)',
        'service_installation_feature3' => 'Gas Supply',
        'service_installation_feature4' => 'Heating & Ventilation (H&V)',
        'service_installation_feature5' => 'Roof Drainage',
        'service_water_title' => 'Water Supply and Sewerage',
        'service_water_desc_full' => 'Complete solutions for water supply and sewerage',
        'service_water_feature1' => 'Underground pipe systems for water supply',
        'service_water_feature2' => 'Aboveground pipe systems',
        'service_water_feature3' => 'Sewerage systems',
        'service_water_feature4' => 'Drainage systems',
        'service_water_feature5' => 'Infiltration systems',
        'service_water_feature6' => 'Fittings and accessories',
        'service_road_title' => 'Road Infrastructure',
        'service_road_desc_full' => 'Construction of road infrastructure and related elements',
        'service_road_feature1' => 'Vertical planning',
        'service_road_feature2' => 'Road section',
        'service_road_feature3' => 'Sidewalk construction',
        'service_road_feature4' => 'Curbs and pavements',
        'service_road_feature5' => 'Parking areas',
        'service_telecom_title' => 'Telecommunications',
        'service_telecom_desc_full' => 'Infrastructure solutions for telecommunications systems',
        'service_telecom_feature1' => 'Underground cable systems',
        'service_telecom_feature2' => 'Aboveground telecommunications solutions',
        'service_telecom_feature3' => 'Telecommunications infrastructure installation',
        'service_irrigation_title' => 'Irrigation Systems and Drainage',
        'service_irrigation_desc_full' => 'Professional solutions for irrigation and drainage',
        'service_irrigation_feature1' => 'Irrigation systems',
        'service_irrigation_feature2' => 'Drainage systems',
        'service_irrigation_feature3' => 'Rainwater drainage',
        'service_irrigation_feature4' => 'Drainage systems',
        'service_consulting_title' => 'Consultations and Design Support',
        'service_consulting_desc_full' => 'In addition to project execution, we offer',
        'service_consulting_feature1' => 'Free consultations',
        'service_consulting_feature2' => 'Design support',
        'service_consulting_feature3' => 'Innovative solutions',
        'service_consulting_feature4' => 'Application of latest technologies',
        'service_consulting_feature5' => 'Technical advice',
        'services_cta_title' => 'Need Our Services?',
        'services_cta_desc' => 'Contact us for a free consultation',
        'services_cta_button' => 'Contact Us',
        
        // Contact Page
        'contact_title' => 'Contact Us',
        'contact_subtitle' => 'We are ready to answer your questions and propose a solution for your project',
        'contact_info_title' => 'Contact Information',
        'contact_phone' => 'Phone',
        'contact_office' => 'Office:',
        'contact_gsm' => 'GSM:',
        'contact_email' => 'Email',
        'contact_web' => 'Web:',
        'contact_facebook' => 'Facebook',
        'contact_facebook_name' => 'Riolit Engineering',
        'contact_facebook_link' => 'Follow Us',
        'contact_form_title' => 'Send Us a Message',
        'contact_form_subtitle' => 'Fill out the form below and we will contact you as soon as possible',
        'contact_form_name' => 'Name',
        'contact_form_email' => 'Email',
        'contact_form_phone' => 'Phone',
        'contact_form_message' => 'Message',
        'contact_form_privacy' => 'I agree with the',
        'contact_form_privacy_link' => 'Privacy Policy',
        'contact_form_submit' => 'Send Message',
        'contact_form_success' => 'Success!',
        'contact_form_success_msg' => 'Your message has been sent successfully. We will contact you soon.',
        'contact_form_error' => 'Error!',
        'contact_form_error_missing' => 'Please fill in all required fields.',
        'contact_form_error_email' => 'Please enter a valid email address.',
        'contact_form_error_privacy' => 'Please accept the Privacy Policy.',
        'contact_form_error_general' => 'An error occurred while sending the message.',
        'contact_name_placeholder' => 'Your name',
        'contact_email_placeholder' => 'your@email.com',
        'contact_phone_placeholder' => '+359 888 123 456',
        'contact_message_placeholder' => 'Write your message here...',
        
        // About Page
        'about_title' => 'About Riolit Engineering Ltd.',
        'about_subtitle' => 'Professionalism, quality and innovation in construction',
        'about_history_title' => 'Our History',
        'about_history_text1' => 'Riolit Engineering Ltd. is a construction company with main activity: construction of infrastructure and residential projects, specialized in excavation and embankments, delivery and installation services in the sectors: Water & Sewerage, Electrical, Gas Supply, Heating & Ventilation, roof drainage, irrigation systems, drainage, telecommunications, vertical planning, road section, construction of sidewalks, curbs and pavements.',
        'about_history_text2' => 'We maintain high quality standards, providing our clients with consistent and highly professional services. We also care about better customer service, including consultations and design support as well as innovative solutions in the field of latest applications.',
        'about_history_text3' => 'The Riolit Engineering team consists of highly qualified professionals in the field of construction and installation services. Each team member has years of experience and expertise in their field, which guarantees high-quality execution of every project.',
        'about_history_text4' => 'The projects in which Riolit Engineering participates are among the leading infrastructure projects implemented under European programs and private investments. We are proud of our participation in projects that improve infrastructure and quality of life in Bulgaria.',
        'about_history_text5' => 'The materials used by the company are high-quality and innovative. The product groups used by the company are underground and aboveground pipe systems for water supply, sewerage, drainage, infiltration systems, heating, rainwater drainage, fittings, as well as telecommunications solutions.',
        'about_equipment_title' => 'Equipment and Mechanization',
        'about_equipment_desc' => 'The company has the following equipment, mechanization and tools:',
        'equipment_1' => 'Wheeled Excavator-Hammer Caterpillar m316',
        'equipment_2' => 'Combined Excavator Caterpillar 432E',
        'equipment_3' => 'Mini Excavator Komatsu with 1 m³ bucket with 40, 60 and 90 cm buckets – 2 pcs',
        'equipment_4' => 'Bobcat',
        'equipment_5' => '4-Axle Dump Truck MAN, 17 t - 2 pcs',
        'equipment_6' => '3-Axle Dump Truck Mercedes, 14 t',
        'equipment_7' => 'Dump Truck Mercedes 4t',
        'equipment_8' => 'Road Roller 12 t',
        'equipment_9' => 'Diesel Scissor Lift 18m',
        'equipment_10' => 'Butt Fusion Welding Machine – 5 pcs',
        'equipment_11' => 'Electrofusion Welding Machine ф 40 – ф 500 (diffusion) Type 1',
        'equipment_12' => 'Electrofusion Welding Machine (diffusion) Type 2',
        'equipment_13' => 'Pneumatic Mole Machine',
        'equipment_14' => 'Compressor',
        'equipment_15' => 'Power Unit',
        'equipment_16' => 'Rammers',
        'equipment_17' => 'Trenchers',
        'equipment_18' => 'Core Drill',
        'equipment_19' => 'Planer',
        'equipment_20' => 'Other Tools',
        'equipment_21' => 'Channel Cutter – Dust-Free',
        
        // Projects Page
        'projects_title' => 'Completed Projects by "Riolit Engineering"',
        'projects_subtitle' => 'We participate in leading infrastructure projects implemented under European programs and private investments',
        'projects_featured_title' => 'Featured Projects',
        'projects_view_more' => 'View More Information and Photos',
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
