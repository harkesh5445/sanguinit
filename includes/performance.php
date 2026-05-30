<?php

/**
 * Page-level asset flags for performance (SIT-007).
 */
function sit_current_script()
{
    return basename(isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : 'index.php', '.php');
}

function sit_needs_home_scripts()
{
    return sit_current_script() === 'index';
}

function sit_needs_portfolio_assets()
{
    return in_array(sit_current_script(), ['index', 'portfolio'], true);
}

function sit_defer_script_tag($src)
{
    $src = sit_h($src);
    return '<script src="' . $src . '" defer></script>' . "\n";
}

function sit_async_stylesheet($href, $media = 'all')
{
    $href = sit_h($href);
    $media = sit_h($media);
    return '<link rel="stylesheet" href="' . $href . '" media="print" onload="this.media=\'' . $media . '\'">' . "\n"
        . '<noscript><link rel="stylesheet" href="' . $href . '"></noscript>' . "\n";
}
