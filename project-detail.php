<?php
// Get current language
if (!isset($lang)) {
    include_once 'includes/language.php';
}
$current_lang = isset($lang) ? $lang : 'bg';

if (!function_exists('__')) {
    include_once __DIR__ . '/includes/translations.php';
}

// Get localized content
$project_title = isset($project['title'][$current_lang]) ? $project['title'][$current_lang] : $project['title']['bg'];
$project_location = isset($project['location'][$current_lang]) ? $project['location'][$current_lang] : $project['location']['bg'];
$project_details = isset($project['details_text'][$current_lang]) ? $project['details_text'][$current_lang] : (isset($project['details_text']['bg']) ? $project['details_text']['bg'] : '');

$label_show_more = __('project_show_more');
$label_hide = __('project_hide');
$label_gallery = __('project_gallery');
$label_back_to_projects = __('project_back_to_projects');
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
                        $prev_was_empty = false;
                        $first_line = true;
                        
                        foreach ($lines as $line) {
                            $line = trim($line);
                            
                            // Empty line - игнорираме последователните празни редове
                            if (empty($line)) {
                                if ($in_list) {
                                    $formatted .= '</ul>';
                                    $in_list = false;
                                }
                                // Добавяме само един празен ред между секциите
                                if (!$prev_was_empty) {
                                    $formatted .= '<br>';
                                    $prev_was_empty = true;
                                }
                                continue;
                            }
                            
                            $prev_was_empty = false;
                            
                            // Check if line is a heading (short line, all caps or ends with :)
                            if ((strlen($line) < 80 && preg_match('/^[А-ЯA-Z\s\-–]+:?$/u', $line)) || 
                                preg_match('/^[А-ЯA-Z\s\-–]+:$/u', $line)) {
                                if ($in_list) {
                                    $formatted .= '</ul>';
                                    $in_list = false;
                                }
                                $formatted .= '<h4 class="project-text-heading">' . htmlspecialchars($line) . '</h4>';
                                $first_line = false;
                            }
                            // Check if line is a list item (starts with -)
                            elseif (preg_match('/^[-•]\s+(.+)$/u', $line, $matches)) {
                                if (!$in_list) {
                                    $formatted .= '<ul class="project-text-list">';
                                    $in_list = true;
                                }
                                $formatted .= '<li>' . htmlspecialchars($matches[1]) . '</li>';
                                $first_line = false;
                            }
                            // Regular paragraph
                            else {
                                if ($in_list) {
                                    $formatted .= '</ul>';
                                    $in_list = false;
                                }
                                $formatted .= '<p>' . htmlspecialchars($line) . '</p>';
                                $first_line = false;
                            }
                        }
                        
                        if ($in_list) {
                            $formatted .= '</ul>';
                        }
                        
                        return $formatted;
                    }
                    
                    $text = $project_details;
                    
                    // Разделяме текста на редове и броим думите
                    $lines = explode("\n", $text);
                    $preview_word_limit = 60;
                    $word_count = 0;
                    $preview_lines = [];
                    
                    // Вземаме редовете до 60-та дума, запазвайки структурата
                    foreach ($lines as $line) {
                        $line_words = preg_split('/\s+/', trim($line), -1, PREG_SPLIT_NO_EMPTY);
                        $line_word_count = count($line_words);
                        
                        if ($word_count + $line_word_count <= $preview_word_limit) {
                            // Добавяме целия ред
                            $preview_lines[] = $line;
                            $word_count += $line_word_count;
                        } else {
                            // Добавяме част от реда до 60-та дума
                            $remaining_words = $preview_word_limit - $word_count;
                            if ($remaining_words > 0) {
                                $partial_words = array_slice($line_words, 0, $remaining_words);
                                $preview_lines[] = implode(' ', $partial_words);
                            }
                            break;
                        }
                    }
                    
                    $preview_text = implode("\n", $preview_lines);
                    
                    // Проверяваме дали има още текст след preview
                    $total_words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
                    $has_more = count($total_words) > $preview_word_limit;
                    ?>
                    <?php if ($has_more): ?>
                    <div class="project-text-preview-wrapper has-more">
                        <div class="project-text-preview" id="project-text-preview">
                            <?php echo formatProjectText($preview_text); ?>
                        </div>
                        <div class="project-text-fade-overlay"></div>
                    </div>
                    <div class="project-text-full" id="project-text-full" style="display: none;">
                        <?php echo formatProjectText($text); ?>
                    </div>
                    <div class="project-show-more-wrapper">
                        <button class="btn btn-outline project-show-more-btn" id="project-show-more-btn" onclick="toggleProjectText()">
                            <?php echo htmlspecialchars($label_show_more); ?>
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
                    <h2><?php echo htmlspecialchars($label_gallery); ?></h2>
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
                    <a href="proekti.php" class="btn btn-primary">← <?php echo htmlspecialchars($label_back_to_projects); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.project-text-preview-wrapper {
    position: relative;
}

.project-text-preview-wrapper.has-more {
    position: relative;
    overflow: hidden;
}

.project-text-fade-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 120px;
    background: linear-gradient(to bottom, rgba(245, 245, 245, 0), rgba(245, 245, 245, 1));
    pointer-events: none;
    transition: opacity 0.3s ease;
}
</style>

<script>
const LABEL_SHOW_MORE = <?php echo json_encode($label_show_more, JSON_UNESCAPED_UNICODE); ?>;
const LABEL_HIDE = <?php echo json_encode($label_hide, JSON_UNESCAPED_UNICODE); ?>;

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
            btn.textContent = LABEL_HIDE;
            
            // Директно телепортиране без анимация до началото на текста
            const textSection = document.querySelector('.project-details-text-section');
            if (textSection) {
                const rect = textSection.getBoundingClientRect();
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                const targetPosition = rect.top + scrollTop - 100;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'instant'
                });
            }
        } else {
            // При скриване показваме preview отново
            if (previewWrapper) previewWrapper.style.display = 'block';
            full.style.display = 'none';
            btn.textContent = LABEL_SHOW_MORE;
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
