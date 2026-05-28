<?php

function news_figure($src, $alt, $caption = '')
{
    $srcEsc = htmlspecialchars($src, ENT_QUOTES, 'UTF-8');
    $altEsc = htmlspecialchars($alt, ENT_QUOTES, 'UTF-8');
    $html = '<figure class="news-article-figure"><img src="' . $srcEsc . '" alt="' . $altEsc . '" loading="lazy" width="1400" height="933">';
    if ($caption !== '') {
        $html .= '<figcaption>' . htmlspecialchars($caption, ENT_QUOTES, 'UTF-8') . '</figcaption>';
    }
    $html .= '</figure>';
    return $html;
}
