<?php

/**
 * Services Section Component
 * Displays the SharePoint services grid
 */

$data_config = load_config('data-config');
$services = $data_config['services'] ?? [];
?>

<section class="py-24 relative overflow-hidden services-section">
    <!-- Background pattern -->
    <div class="absolute inset-0 bg-gradient-to-br from-white via-purple-50 to-blue-50">
        <div class="absolute inset-0 pattern-bg opacity-20"></div>
    </div>

    <div class="container mx-auto px-4 relative" style="z-index: 2;">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <span class="text-vibrant-purple font-semibold mb-4 block animate-fade-in">Our Services</span>
            <h2 class="text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                Collaborate Effortlessly with Our
                <span class="bg-gradient-to-r from-electric-blue via-vibrant-purple to-neon-pink bg-clip-text text-transparent">
                    Sharepoint Development Services
                </span>
            </h2>
            <p class="text-gray-600 text-lg mb-8 leading-relaxed">We at SanguineIT Technologies, present the best business solutions to streamline tasks effectively and gain maximum profits.</p>
            <div class="h-1.5 w-32 bg-gradient-to-r from-electric-blue via-vibrant-purple to-neon-pink mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($services as $service): ?>
                <!-- Service Card -->
                <div class="group relative transform hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br <?= $service['gradient'] ?>/30 rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                    <div class="relative bg-white/90 backdrop-blur-sm p-8 rounded-xl border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 h-full flex flex-col">
                        <div class="w-16 h-16 bg-gradient-to-br <?= $service['gradient'] ?> rounded-xl flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-500">
                            <?= generate_icon($service['icon'], 'text-white text-2xl') ?>
                        </div>
                        <h3 class="text-2xl font-bold mt-6 mb-4 bg-gradient-to-r <?= $service['gradient'] ?> bg-clip-text text-transparent"><?= $service['title'] ?></h3>
                        <p class="text-gray-600 flex-grow"><?= $service['description'] ?></p>
                        <div class="mt-6 flex items-center text-<?= $service['color'] ?> group-hover:translate-x-2 transition-transform duration-300">
                            Learn More
                            <i class="fas fa-arrow-right ml-2"></i>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>