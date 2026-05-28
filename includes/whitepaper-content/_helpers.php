<?php

function wp_p($text)
{
    return '<p class="wp-p">' . htmlspecialchars($text, ENT_QUOTES, 'UTF-8') . '</p>';
}

function wp_findings($items)
{
    if (empty($items)) {
        return '';
    }
    $html = '<div class="wp-findings"><h3>Key findings</h3><ul class="wp-list">';
    foreach ($items as $item) {
        $html .= '<li>' . htmlspecialchars($item, ENT_QUOTES, 'UTF-8') . '</li>';
    }
    $html .= '</ul></div>';
    return $html;
}
