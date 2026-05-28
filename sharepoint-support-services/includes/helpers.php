<?php

/**
 * Base helper functions and utilities
 */

/**
 * Sanitize input data
 */
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Generate a random ID for HTML elements
 */
function generate_id($prefix = 'elem')
{
    return $prefix . '_' . uniqid();
}

/**
 * Format number for display (e.g., 1000 -> 1K)
 */
function format_number($number)
{
    if ($number >= 1000) {
        return round($number / 1000) . 'K+';
    }
    return $number . '+';
}

/**
 * Include a component with data
 */
function include_component($component_name, $data = [])
{
    $component_path = __DIR__ . "/../components/{$component_name}.php";
    if (file_exists($component_path)) {
        extract($data);
        include $component_path;
    } else {
        echo "<!-- Component {$component_name} not found -->";
    }
}

/**
 * Generate responsive image tag
 */
function responsive_image($src, $alt, $classes = '', $width = null, $height = null)
{
    $width_attr = $width ? "width=\"{$width}\"" : '';
    $height_attr = $height ? "height=\"{$height}\"" : '';

    return "<img src=\"{$src}\" alt=\"{$alt}\" class=\"{$classes}\" {$width_attr} {$height_attr} loading=\"lazy\" />";
}

/**
 * Generate icon HTML
 */
function generate_icon($icon_class, $additional_classes = '')
{
    return "<i class=\"{$icon_class} {$additional_classes}\"></i>";
}

/**
 * Generate gradient background class
 */
function gradient_bg($from, $to, $direction = 'r')
{
    return "bg-gradient-to-{$direction} from-{$from} to-{$to}";
}

/**
 * Load configuration
 */
function load_config($config_name)
{
    $config_path = __DIR__ . "/../config/{$config_name}.php";
    if (file_exists($config_path)) {
        return include $config_path;
    }
    return [];
}

/**
 * Debug function - only show in development
 */
function debug($data, $die = false)
{
    if (defined('DEBUG') && constant('DEBUG')) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        if ($die) die();
    }
}

/**
 * Render stars for rating
 */
function render_stars($rating, $max_rating = 5)
{
    $stars = '';
    for ($i = 1; $i <= $max_rating; $i++) {
        $delay = ($i - 1) * 100;
        if ($i <= $rating) {
            $stars .= "<i class=\"fas fa-star text-yellow-400 animation-delay-{$delay}\"></i>";
        } else {
            $stars .= "<i class=\"far fa-star text-yellow-400 animation-delay-{$delay}\"></i>";
        }
    }
    return $stars;
}

/**
 * Generate card with hover effects
 */
function generate_card($content, $gradient_classes, $additional_classes = '')
{
    return "
    <div class=\"group relative transform hover:scale-105 transition-all duration-500 {$additional_classes}\">
        <div class=\"absolute inset-0 {$gradient_classes} rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500\"></div>
        <div class=\"relative bg-white/90 backdrop-blur-sm p-8 rounded-xl border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 h-full flex flex-col\">
            {$content}
        </div>
    </div>";
}
