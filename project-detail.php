<?php
// Get current language
if (!isset($lang)) {
    include_once 'includes/language.php';
}
$current_lang = isset($lang) ? $lang : 'bg';

// Get localized content
$project_title = isset($project['title'][$current_lang]) ? $project['title'][$current_lang] : $project['title']['bg'];
$project_location = isset($project['location'][$current_lang]) ? $project['location'][$current_lang] : $project['location']['bg'];
$project_details = isset($project['details_text'][$current_lang]) ? $project['details_text'][$current_lang] : (isset($project['details_text']['bg']) ? $project['details_text']['bg'] : '');
?>

<main>
    <section class="project-detail-section">
        <!-- Hero Image -->
        <div class="project-hero">
            <img src="<?php echo htmlspecialchars($project['main_image']); ?>" alt="<?php echo htmlspecialchars($project_title); ?>" class="project-hero-image">
        </div>

        <!-- Project Content -->
        <div class="container">
            <div class="project-detail-content">
                <!-- Title and Location -->
                <div class="project-header-info">
                    <h1 class="project-detail-title"><?php echo htmlspecialchars($project_title); ?></h1>
                    <?php if (!empty($project_location)): ?>
                    <p class="project-location">📍 <?php echo htmlspecialchars($project_location); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Project Details Text -->
                <?php if (!empty($project_details)): ?>
                <div class="project-details-text-section">
                    <?php
                    // Simple text formatting function - clean text only
                    function formatProjectText($text) {
                        $lines = explode("\n", $text);
                        $formatted = '';
                        $in_list = false;
                        
                        foreach ($lines as $line) {
                            $line = trim($line);
                            
                            // Empty line
                            if (empty($line)) {
                                if ($in_list) {
                                    $formatted .= '</ul>';
                                    $in_list = false;
                                }
                                $formatted .= '<br>';
                                continue;
                            }
                            
                            // Check if line is a heading (short line, all caps or ends with :)
                            if ((strlen($line) < 80 && preg_match('/^[А-ЯA-Z\s\-–]+:?$/u', $line)) || 
                                preg_match('/^[А-ЯA-Z\s\-–]+:$/u', $line)) {
                                if ($in_list) {
                                    $formatted .= '</ul>';
                                    $in_list = false;
                                }
                                $formatted .= '<h4 class="project-text-heading">' . htmlspecialchars($line) . '</h4>';
                            }
                            // Check if line is a list item (starts with -)
                            elseif (preg_match('/^[-•]\s+(.+)$/u', $line, $matches)) {
                                if (!$in_list) {
                                    $formatted .= '<ul class="project-text-list">';
                                    $in_list = true;
                                }
                                $formatted .= '<li>' . htmlspecialchars($matches[1]) . '</li>';
                            }
                            // Regular paragraph
                            else {
                                if ($in_list) {
                                    $formatted .= '</ul>';
                                    $in_list = false;
                                }
                                $formatted .= '<p>' . htmlspecialchars($line) . '</p>';
                            }
                        }
                        
                        if ($in_list) {
                            $formatted .= '</ul>';
                        }
                        
                        return $formatted;
                    }
                    
                    $text = $project_details;
                    $lines = explode("\n", $text);
                    $preview_lines = array_slice($lines, 0, 8);
                    $has_more = count($lines) > 8;
                    $preview_text = implode("\n", $preview_lines);
                    ?>
                    <div class="project-text-preview-wrapper<?php echo $has_more ? ' has-more' : ''; ?>">
                        <div class="project-text-preview" id="project-text-preview">
                            <?php echo formatProjectText($preview_text); ?>
                        </div>
                    </div>
                    <?php if ($has_more): ?>
                    <div class="project-text-full" id="project-text-full" style="display: none;">
                        <?php echo formatProjectText($text); ?>
                    </div>
                    <div class="project-show-more-wrapper">
                        <button class="btn btn-outline project-show-more-btn" id="project-show-more-btn" onclick="toggleProjectText()">
                            <?php echo $current_lang === 'bg' ? 'Покажи още' : 'Show more'; ?>
                        </button>
                    </div>
                    <?php else: ?>
                    <div class="project-text-full">
                        <?php echo formatProjectText($text); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <!-- Project Gallery with Lightbox -->
                <?php if (!empty($project['images']) && count($project['images']) > 1): ?>
                <div class="project-gallery-section">
                    <h2><?php echo $current_lang === 'bg' ? 'Галерия' : 'Gallery'; ?></h2>
                    <div class="project-gallery" id="project-gallery">
                        <?php foreach ($project['images'] as $index => $image): ?>
                            <div class="project-gallery-item" onclick="openLightbox(<?php echo $index; ?>)">
                                <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($project_title); ?>" loading="lazy">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Lightbox -->
                <div id="lightbox" class="lightbox <?php echo (count($project['images']) <= 1) ? 'lightbox-single-image' : ''; ?>" onclick="closeLightbox()">
                    <span class="lightbox-close">&times;</span>
                    <?php if (count($project['images']) > 1): ?>
                    <span class="lightbox-prev" onclick="event.stopPropagation(); changeImage(-1)">&#10094;</span>
                    <span class="lightbox-next" onclick="event.stopPropagation(); changeImage(1)">&#10095;</span>
                    <?php endif; ?>
                    <img id="lightbox-image" src="" alt="<?php echo htmlspecialchars($project_title); ?>">
                </div>
                <?php endif; ?>

                <!-- Back to Projects -->
                <div class="project-back-link">
                    <a href="proekti.php" class="btn btn-primary">← <?php echo $current_lang === 'bg' ? 'Назад към проектите' : 'Back to projects'; ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Project text toggle
function toggleProjectText() {
    const previewWrapper = document.querySelector('.project-text-preview-wrapper');
    const preview = document.getElementById('project-text-preview');
    const full = document.getElementById('project-text-full');
    const btn = document.getElementById('project-show-more-btn');
    
    if (preview && full && btn) {
        if (full.style.display === 'none') {
            // Разгъвам текста
            if (previewWrapper) previewWrapper.style.display = 'none';
            full.style.display = 'block';
            btn.textContent = '<?php echo $current_lang === 'bg' ? 'Скрий' : 'Hide'; ?>';
            
            // Скролвам до началото на дългия текст
            requestAnimationFrame(() => {
                const fullRect = full.getBoundingClientRect();
                const fullTopPosition = fullRect.top + window.pageYOffset;
                const headerOffset = 80; // Offset за header
                
                window.scrollTo({
                    top: fullTopPosition - headerOffset,
                    behavior: 'smooth'
                });
            });
        } else {
            // При скриване скролвам до preview текста
            if (previewWrapper) previewWrapper.style.display = 'block';
            full.style.display = 'none';
            btn.textContent = '<?php echo $current_lang === 'bg' ? 'Покажи още' : 'Show more'; ?>';
            
            requestAnimationFrame(() => {
                if (previewWrapper) {
                    const previewRect = previewWrapper.getBoundingClientRect();
                    const previewTopPosition = previewRect.top + window.pageYOffset;
                    const headerOffset = 80;
                    
                    window.scrollTo({
                        top: previewTopPosition - headerOffset,
                        behavior: 'smooth'
                    });
                }
            });
        }
    }
}

// Lightbox functionality
let currentImageIndex = 0;
const images = <?php echo json_encode($project['images'] ?? []); ?>;

function openLightbox(index) {
    if (!images || images.length === 0) return;
    currentImageIndex = index;
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-image');
    if (lightbox && lightboxImg) {
        lightboxImg.src = images[index];
        lightbox.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
}

function closeLightbox() {
    const lightbox = document.getElementById('lightbox');
    if (lightbox) {
        lightbox.style.display = 'none';
        document.body.style.overflow = '';
    }
}

function changeImage(direction) {
    if (!images || images.length === 0) return;
    currentImageIndex += direction;
    if (currentImageIndex < 0) {
        currentImageIndex = images.length - 1;
    } else if (currentImageIndex >= images.length) {
        currentImageIndex = 0;
    }
    const lightboxImg = document.getElementById('lightbox-image');
    if (lightboxImg) {
        lightboxImg.src = images[currentImageIndex];
    }
}

// Close lightbox on Escape key and arrow navigation
document.addEventListener('keydown', function(e) {
    const lightbox = document.getElementById('lightbox');
    if (lightbox && lightbox.style.display === 'flex') {
        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowLeft') {
            e.preventDefault();
            changeImage(-1);
        } else if (e.key === 'ArrowRight') {
            e.preventDefault();
            changeImage(1);
        }
    }
});
</script>
