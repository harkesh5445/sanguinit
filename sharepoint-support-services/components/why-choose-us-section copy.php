<?php

/**
 * Why Choose Us Section Component
 * 
 * Displays reasons why clients should choose the company
 */

// Load why choose us data from config
$data_config = load_config('data-config') ?? [];
$why_choose_us = $data_config['why_choose_us_data'] ?? [
    [
        'icon' => 'fas fa-award',
        'title' => '22+ Years Experience',
        'description' => 'Proven track record in delivering enterprise solutions with expertise across multiple industries.',
        'gradient' => 'from-electric-blue to-neon-pink'
    ],
    [
        'icon' => 'fas fa-users',
        'title' => '400+ Tech Professionals',
        'description' => 'Dedicated team of skilled professionals committed to delivering quality solutions.',
        'gradient' => 'from-cyber-yellow to-digital-green'
    ],
    [
        'icon' => 'fas fa-globe',
        'title' => '500+ Global Clients',
        'description' => 'Trusted by leading brands worldwide with successful project deliveries.',
        'gradient' => 'from-sunset-orange to-coral-red'
    ],
    [
        'icon' => 'fas fa-shield-alt',
        'title' => 'Secure & Compliant',
        'description' => 'Following industry best practices and compliance standards for data security.',
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
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-gradient-to-r from-electric-blue/10 to-neon-pink/10 rounded-full text-electric-blue font-medium mb-4 transform hover:scale-105 transition-all duration-300">
                Why Choose Us
            </span>
            <h2 class="text-4xl lg:text-5xl font-bold mb-6 bg-gradient-to-r from-deep-ocean to-mystic-violet bg-clip-text text-transparent">
                Your Trusted Technology Partner
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Partner with us for innovative solutions that drive business growth and digital transformation.
            </p>
            <!-- Decorative line -->
            <div class="w-24 h-1.5 bg-gradient-to-r from-electric-blue to-neon-pink rounded-full mx-auto mt-6"></div>
        </div>

        <!-- Why Choose Us Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($why_choose_us as $index => $item): ?>
                <!-- Item <?php echo $index + 1; ?> -->
                <div class="group relative transform hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br <?php echo $item['gradient']; ?>/30 rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                    <div class="bg-white/90 backdrop-blur-md p-8 rounded-xl shadow-lg relative border border-white/20 h-full flex flex-col text-center">
                        <!-- Icon -->
                        <div class="w-16 h-16 bg-gradient-to-br <?php echo $item['gradient']; ?> rounded-xl flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-500 mx-auto mb-6">
                            <i class="<?php echo $item['icon']; ?> text-white text-2xl"></i>
                        </div>

                        <!-- Title -->
                        <h3 class="text-xl font-bold mb-4 bg-gradient-to-r <?php echo $item['gradient']; ?> bg-clip-text text-transparent">
                            <?php echo htmlspecialchars($item['title']); ?>
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-600 flex-grow leading-relaxed">
                            <?php echo htmlspecialchars($item['description']); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>