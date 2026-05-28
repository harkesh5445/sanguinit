<?php

/**
 * Clients Section Component - Optimized for Performance
 * Displays client logos with minimal animation delays
 */

$data_config = load_config('data-config');
$clients = $data_config['clients'] ?? [];
?>

<section class="py-24 relative overflow-hidden bg-white clients-section-optimized">
    <!-- Simplified background - loads faster -->
    <div class="absolute inset-0 bg-gradient-to-r from-purple-50/30 via-transparent to-blue-50/30" style="z-index: 1;"></div>

    <div class="container mx-auto px-4 relative" style="z-index: 2;">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold mb-4 bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">
                Our Reputed Clients
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Trusted by world-leading companies for delivering excellence in technology solutions
            </p>
        </div>

        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12 client-logos-grid">
                <?php foreach ($clients as $index => $client): ?> <div class="client-logo-item bg-white/90 rounded-xl shadow-sm hover:shadow-lg 
                                transition-shadow duration-300 ease-out
                                group cursor-pointer border border-gray-100"
                        style="animation-delay: <?= ($index * 0.05) ?>s;">
                        <div class="client-logo-container p-8 relative">
                            <?= responsive_image(
                                $client['logo'],
                                $client['name'],
                                'h-12 w-auto mx-auto grayscale hover:grayscale-0 transition-all duration-300 transform hover:scale-105'
                            ) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>