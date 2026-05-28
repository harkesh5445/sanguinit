<?php

function eb_lead($text)
{
    return '<p class="eb-lead">' . htmlspecialchars($text, ENT_QUOTES, 'UTF-8') . '</p>';
}
