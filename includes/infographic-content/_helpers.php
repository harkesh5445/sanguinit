<?php

function info_insights($items)
{
    if (empty($items)) {
        return '';
    }
    $html = '<div class="info-insights"><h3>What this infographic covers</h3><ul class="info-detail-list">';
    foreach ($items as $item) {
        $html .= '<li>' . htmlspecialchars($item, ENT_QUOTES, 'UTF-8') . '</li>';
    }
    $html .= '</ul></div>';
    return $html;
}

function info_audience($text)
{
    if ($text === '') {
        return '';
    }
    return '<p class="info-audience"><strong>Best for:</strong> ' . htmlspecialchars($text, ENT_QUOTES, 'UTF-8') . '</p>';
}
