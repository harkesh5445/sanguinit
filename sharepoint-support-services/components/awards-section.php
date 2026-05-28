<?php

/**
 * Awards Section Component
 * 
 * Displays awards and recognitions with animated elements
 */

// Load awards data from data-config.php
$data_config = load_config('data-config');
$awards_data = $data_config['awards_data'] ?? [
    [
        'image' => '/images/about/badges-a.png',
        'alt' => 'NASSCOM Member - Software Development Award',
        'gradient' => 'from-electric-blue to-neon-pink'
    ],
    [
        'image' => '/images/about/badges-b.png',
        'alt' => 'Top App Development Company Award',
        'gradient' => 'from-cyber-yellow to-digital-green'
    ],
    [
        'image' => '/images/about/badges-c.png',
        'alt' => 'Technology Excellence Award',
        'gradient' => 'from-sunset-orange to-coral-red'
    ],
    [
        'image' => '/images/about/badges-d.png',
        'alt' => 'Quality Assurance Certification',
        'gradient' => 'from-mystic-violet to-deep-ocean'
    ]
];
?>

<section class="py-24 bg-gradient-to-br from-white via-purple-50 to-blue-50 relative overflow-hidden">
    <!-- Background pattern -->
    <div class="absolute inset-0 pattern-grid opacity-5"></div>

    <!-- Animated background elements -->
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-32 h-32 bg-gradient-to-br from-electric-blue/20 to-neon-pink/20 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute top-40 right-20 w-40 h-40 bg-gradient-to-br from-cyber-yellow/20 to-digital-green/20 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-20 left-1/4 w-36 h-36 bg-gradient-to-br from-sunset-orange/20 to-coral-red/20 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-4 relative">
        <div class="flex flex-col lg:flex-row justify-between items-center gap-12">
            <!-- Left Content -->
            <div class="lg:w-1/2 text-center lg:text-left">
                <span class="inline-block px-4 py-2 bg-gradient-to-r from-electric-blue/10 to-neon-pink/10 rounded-full text-electric-blue font-medium mb-4 transform hover:scale-105 transition-all duration-300">
                    Recognition & Awards
                </span>
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 bg-gradient-to-r from-deep-ocean to-mystic-violet bg-clip-text text-transparent">
                    Top App Development Companies
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    We've worked as a channel partner of various top Mobile Development companies and have been awarded to the several rankings communities like NASSCOM, SPIDER, PILOTVIEW etc.
                </p>
            </div>

            <!-- Right Content - Awards -->
            <div class="lg:w-1/2">
                <div class="flex flex-wrap justify-center gap-8">
                    <?php foreach ($awards_data as $award): ?>
                        <!-- Award -->
                        <div class="group relative">
                            <div class="absolute inset-0 bg-gradient-to-br <?php echo $award['gradient']; ?> rounded-full blur-lg opacity-40 group-hover:opacity-70 transition-all duration-500"></div>
                            <div class="relative transform transition-all duration-500 hover:scale-110"> <img src="<?php echo htmlspecialchars($award['image']); ?>"
                                    alt="<?php echo htmlspecialchars($award['alt']); ?>"
                                    class="h-24 w-24 rounded-full border-2 border-white shadow-lg" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative bottom line -->
    <div class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-electric-blue/20 to-transparent"></div>
</section>