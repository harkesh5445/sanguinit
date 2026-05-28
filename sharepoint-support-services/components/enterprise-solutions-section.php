<?php

/**
 * Enterprise Solutions Section Component
 * Displays company statistics and descriptions
 */

$site_config = load_config('site-config');
$stats = [
    ['value' => '21+', 'label' => 'Years of Experience', 'gradient' => 'from-electric-blue to-neon-pink'],
    ['value' => $site_config['site']['global_brands'], 'label' => 'Global Top Brands', 'gradient' => 'from-sunset-orange to-coral-red'],
    ['value' => $site_config['site']['tech_professionals'], 'label' => 'Tech Professionals', 'gradient' => 'from-digital-green to-emerald-green'],
    ['value' => $site_config['site']['total_clients'], 'label' => 'Happy Clients', 'gradient' => 'from-cyber-yellow to-golden-yellow']
];
?>

<section class="py-16 bg-gradient-to-br from-white via-purple-50 to-blue-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-start justify-between gap-8">
            <!-- Left Content -->
            <div class="lg:w-1/2 group">
                <div class="relative">
                    <!-- Decorative elements -->
                    <div class="absolute -left-4 -top-4 w-20 h-20 bg-gradient-to-br from-electric-blue/30 to-neon-pink/30 rounded-full animate-pulse"></div>
                    <div class="absolute -right-4 -bottom-4 w-32 h-32 bg-gradient-to-br from-cyber-yellow/30 to-digital-green/30 rounded-full animate-pulse delay-300"></div>

                    <!-- Content with animations -->
                    <h2 class="text-4xl lg:text-6xl font-bold mb-8 leading-tight relative transform transition-all duration-700 hover:scale-105">
                        <span class="text-gray-900 font-bold bg-gradient-to-r from-electric-blue to-neon-pink bg-clip-text text-transparent">
                            Offer Enterprise-Focused Solutions
                        </span>
                        <br />
                        <span class="text-gray-900 font-bold bg-gradient-to-r from-electric-blue to-neon-pink bg-clip-text text-transparent">
                            With Our Microsoft SharePoint Development Company for Success
                        </span>
                    </h2>

                    <div class="space-y-6 relative z-10">
                        <p class="text-xl lg:text-2xl text-gray-700 leading-relaxed transform transition-all duration-500 hover:-translate-x-2 hover:text-vibrant-purple">
                            We at SanguineIT Technologies integrate Microsoft SharePoint development solutions to support your business needs.
                        </p>

                        <div class="pl-6 border-l-4 border-gradient-to-r from-electric-blue to-neon-pink transform transition-all duration-500 hover:border-l-8 hover:pl-8">
                            <p class="text-xl text-gray-600 leading-relaxed">
                                Our team of SharePoint experts offers the best customized business solutions, integrating industrial expertise to present optimal solutions.
                            </p>
                        </div>

                        <div class="bg-gradient-to-r from-electric-blue/5 to-neon-pink/5 p-6 rounded-lg transform transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
                            <p class="text-xl text-gray-700 leading-relaxed">
                                With <span class="font-bold bg-gradient-to-r from-electric-blue to-neon-pink bg-clip-text text-transparent"><?= $site_config['site']['experience_years'] ?> years</span> of experience, we prioritize efficiency and optimize time and resources to manage core objectives effectively.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Stats Grid -->
            <div class="lg:w-1/2 w-full">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php foreach ($stats as $index => $stat): ?>
                        <div class="group transform transition-all duration-500 hover:scale-105">
                            <div class="text-center p-6 bg-gradient-to-br from-white to-<?= str_replace(['from-', 'to-'], '', explode(' ', $stat['gradient'])[0]) ?>/5 rounded-xl shadow-lg hover:shadow-2xl relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r <?= $stat['gradient'] ?>/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="relative">
                                    <div class="text-4xl sm:text-6xl font-bold bg-gradient-to-r <?= $stat['gradient'] ?> bg-clip-text text-transparent animate-gradient-x mb-3"><?= $stat['value'] ?></div>
                                    <div class="text-gray-600 text-xl font-medium group-hover:text-<?= str_replace(['from-', 'to-'], '', explode(' ', $stat['gradient'])[0]) ?> transition-colors duration-300"><?= $stat['label'] ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>