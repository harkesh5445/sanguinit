<?php

/**
 * Floating CTA Button Component
 * 
 * Fixed position call-to-action button that scrolls to contact form
 */

$data_config = load_config('data-config');
$cta_config = $data_config['cta_config'] ?? [
    'text' => 'Get Started',
    'tooltip' => 'Request a quote today!',
    'target' => '#contact-form'
];
?>

<!-- FLOATING CTA BUTTON -->
<div class="fixed bottom-8 right-8 z-50 flex flex-col items-end space-y-4">
    <!-- Main CTA Button -->
    <a href="<?php echo htmlspecialchars($cta_config['target']); ?>"
        class="group relative bg-gradient-to-r from-orange-500 to-red-500 px-6 py-3 rounded-full shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300 scroll-to-top">
        <div class="absolute -inset-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-pulse"></div>
        <div class="relative flex items-center justify-center space-x-2">
            <span class="text-white font-bold whitespace-nowrap"><?php echo htmlspecialchars($cta_config['text']); ?></span>
            <i class="fas fa-arrow-right text-white"></i>
            <span class="absolute right-full mr-3 bg-white px-4 py-2 rounded-lg text-gray-700 text-sm font-medium shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                <?php echo htmlspecialchars($cta_config['tooltip']); ?>
                <span class="absolute right-0 top-1/2 transform translate-x-1/2 -translate-y-1/2 rotate-45 w-2 h-2 bg-white"></span>
            </span>
        </div>
    </a>
</div>