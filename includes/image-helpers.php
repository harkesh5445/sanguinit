<?php

/**
 * Responsive images with optional WebP + lazy load (SIT-008).
 */
function sit_project_root()
{
    return dirname(__DIR__);
}

function sit_webp_path($imagePath)
{
    return preg_replace('/\.(jpe?g|png)$/i', '.webp', $imagePath);
}

function sit_webp_exists($imagePath)
{
    $webp = sit_webp_path($imagePath);
    return is_file(sit_project_root() . '/' . ltrim($webp, '/'));
}

/**
 * @param string $src Relative image path (e.g. images/blog/foo.jpg)
 * @param string $alt Alt text
 * @param array $options lazy (bool), priority ('high'|'auto'), class (string), sizes (string)
 */
function sit_responsive_image($src, $alt = '', array $options = [])
{
    if (!function_exists('sit_h')) {
        require_once __DIR__ . '/seo.php';
    }

    $lazy = !isset($options['lazy']) || $options['lazy'];
    $priority = isset($options['priority']) ? $options['priority'] : 'auto';
    $class = isset($options['class']) ? $options['class'] : '';
    $sizes = isset($options['sizes']) ? $options['sizes'] : '';

    $imgAttrs = [];
    if ($class !== '') {
        $imgAttrs[] = 'class="' . sit_h($class) . '"';
    }
    if ($priority === 'high') {
        $imgAttrs[] = 'fetchpriority="high"';
        $imgAttrs[] = 'decoding="async"';
    } elseif ($lazy) {
        $imgAttrs[] = 'loading="lazy"';
        $imgAttrs[] = 'decoding="async"';
    }
    if ($sizes !== '') {
        $imgAttrs[] = 'sizes="' . sit_h($sizes) . '"';
    }

    $attrStr = $imgAttrs ? ' ' . implode(' ', $imgAttrs) : '';
    $srcEsc = sit_h($src);
    $altEsc = sit_h($alt);

    if (sit_webp_exists($src)) {
        $webpEsc = sit_h(sit_webp_path($src));
        echo '<picture>';
        echo '<source type="image/webp" srcset="' . $webpEsc . '">';
        echo '<img src="' . $srcEsc . '" alt="' . $altEsc . '"' . $attrStr . '>';
        echo '</picture>';
    } else {
        echo '<img src="' . $srcEsc . '" alt="' . $altEsc . '"' . $attrStr . '>';
    }
}
