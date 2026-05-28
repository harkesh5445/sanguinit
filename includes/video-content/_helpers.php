<?php

function video_takeaways($items)
{
    if (empty($items)) {
        return '';
    }
    $html = '<div class="video-takeaways"><h3>Key takeaways</h3><ul class="video-detail-list">';
    foreach ($items as $item) {
        $html .= '<li>' . htmlspecialchars($item, ENT_QUOTES, 'UTF-8') . '</li>';
    }
    $html .= '</ul></div>';
    return $html;
}
