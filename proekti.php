<?php
include 'includes/translations.php';

// Load projects from JSON file
$projects_json_path = __DIR__ . '/projects.json';
$projects = [];

if (file_exists($projects_json_path)) {
    $projects_json = file_get_contents($projects_json_path);
    
    if ($projects_json !== false && !empty($projects_json)) {
        // Try to decode JSON
        $projects_data = json_decode($projects_json, true);
        $json_error = json_last_error();
        
        // If JSON decode failed, try to fix common issues
        if ($json_error !== JSON_ERROR_NONE) {
            // Remove BOM if present
            $projects_json = preg_replace('/^\xEF\xBB\xBF/', '', $projects_json);
            // Try again
            $projects_data = json_decode($projects_json, true);
            $json_error = json_last_error();
        }
        
        // Check for JSON errors
        if ($json_error === JSON_ERROR_NONE) {
            if (isset($projects_data['projects']) && is_array($projects_data['projects'])) {
                // Convert JSON array to associative array by slug
                foreach ($projects_data['projects'] as $project) {
                    if (isset($project['slug']) && !empty($project['slug'])) {
                        $projects[$project['slug']] = $project;
                    }
                }
            }
        }
    }
}

// Check if viewing a specific project
$project_slug = isset($_GET['project']) ? $_GET['project'] : '';

// If viewing a specific project, show detail page
if ($project_slug && isset($projects[$project_slug])) {
    $project = $projects[$project_slug];
    // Get current language
    if (!isset($lang)) {
        include_once 'includes/language.php';
    }
    $current_lang = isset($lang) ? $lang : 'bg';
    
    // Get localized title
    $project_title = isset($project['title'][$current_lang]) ? $project['title'][$current_lang] : $project['title']['bg'];
    $page_title = $project_title . ' | ' . getPageTitle('projects');
    $page_description = $project_title;
    include 'includes/header.php';
    include 'project-detail.php';
    include 'includes/footer.php';
    exit;
}

$page_title = getPageTitle('projects');
$page_description = getPageDescription('projects');
include 'includes/header.php';
?>

<main>
    <section class="page-content">
        <div class="page-header">
            <h1><?php echo __('projects_title'); ?></h1>
            <p><?php echo __('projects_subtitle'); ?></p>
        </div>

        <!-- Projects Grid -->
        <?php if (empty($projects)): ?>
        <div style="padding: 2rem; text-align: center; background: var(--bg-light); border-radius: 10px; margin: 2rem 0;">
            <p style="color: var(--text-light);"><?php echo __('projects_empty'); ?></p>
        </div>
        <?php else: ?>
        <div class="projects-modern-grid">
            <?php 
            // Get current language
            if (!isset($lang)) {
                include_once 'includes/language.php';
            }
            $current_lang = isset($lang) ? $lang : 'bg';
            
            foreach ($projects as $slug => $project): 
                // Get localized title
                $project_title = isset($project['title'][$current_lang]) ? $project['title'][$current_lang] : $project['title']['bg'];
            ?>
            <a href="?project=<?php echo htmlspecialchars($slug); ?>" class="project-card-modern">
                <div class="project-image-wrapper">
                    <img src="<?php echo htmlspecialchars($project['main_image']); ?>" alt="<?php echo htmlspecialchars($project_title); ?>" class="project-main-image">
                    <div class="project-overlay">
                        <h3 class="project-title-overlay"><?php echo htmlspecialchars($project_title); ?></h3>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div style="margin-top: 3rem; padding: 2rem; background: var(--bg-light); border-radius: 10px;">
            <h2 style="margin-bottom: 1rem; color: var(--primary-color);"><?php echo __('projects_about_title'); ?></h2>
            <p style="color: var(--text-light); line-height: 1.8;">
                <?php echo __('projects_about_text'); ?>
            </p>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
