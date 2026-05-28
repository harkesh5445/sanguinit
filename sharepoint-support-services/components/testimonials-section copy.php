<?php

/**
 * Testimonials Section Component
 * 
 * Displays client testimonials with rating and company information
 */

// Load testimonials data from config
$data_config = load_config('data-config') ?? [];
$testimonials = $data_config['testimonials_data'] ?? [
    [
        'client_image' => '/images/landmark.jpg',
        'client_name' => 'William',
        'company' => 'Landmark Group',
        'company_logo' => '/images/landmarkgroup.png',
        'rating' => 5,
        'quote' => 'Built Power Apps solution for leading consulting group "Sanguine was outstanding to work with! Great communication and truly technical experts! I would recommend for anyone looking for Microsoft Power Apps!".',
        'gradient' => 'from-electric-blue to-neon-pink'
    ],
    [
        'client_image' => '/images/zappo.jpg',
        'client_name' => 'Merry Cruiser',
        'company' => 'Zappos -Jack',
        'company_logo' => '/images/zappos-logo.png',
        'rating' => 5,
        'quote' => 'We had a great experience working with Sanguine team (Alex & Sudeep) throughout the process. They were knowledgeable, partnered with us to find workable solutions when the app wasn\'t functioning as intended, and always followed through to complete the work they promised to complete.',
        'gradient' => 'from-cyber-yellow to-digital-green'
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
        <!-- Section Header with enhanced styling -->
        <div class="text-center mb-16 relative">
            <span class="inline-block px-4 py-2 bg-gradient-to-r from-electric-blue/10 to-neon-pink/10 rounded-full text-electric-blue font-medium mb-4 transform hover:scale-105 transition-all duration-300">
                What Our Clients Say
            </span>
            <h2 class="text-4xl lg:text-5xl font-bold mb-4 bg-gradient-to-r from-deep-ocean to-mystic-violet bg-clip-text text-transparent">
                Client Testimonials
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Discover what our valued clients have to say about their experiences working with us.
            </p>
            <!-- Decorative line -->
            <div class="w-24 h-1.5 bg-gradient-to-r from-electric-blue to-neon-pink rounded-full mx-auto mt-6"></div>
        </div>

        <!-- Testimonials Carousel -->
        <div class="relative">
            <!-- Testimonials Grid with hover effects -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10">
                <?php foreach ($testimonials as $index => $testimonial): ?>
                    <!-- Testimonial <?php echo $index + 1; ?> -->
                    <div class="group relative transform hover:scale-105 transition-all duration-500 hover:z-20">
                        <div class="absolute inset-0 bg-gradient-to-br <?php echo $testimonial['gradient']; ?>/30 rounded-xl blur-lg opacity-50 group-hover:opacity-100 transition-all duration-500"></div>
                        <div class="bg-white/90 backdrop-blur-md p-8 rounded-xl shadow-lg relative border border-white/20 h-full flex flex-col">
                            <!-- Quote Icon -->
                            <div class="absolute -top-4 -left-4 w-8 h-8 bg-gradient-to-br <?php echo $testimonial['gradient']; ?> rounded-full flex items-center justify-center transform -rotate-12 group-hover:rotate-0 transition-all duration-500">
                                <i class="fas fa-quote-left text-white text-sm"></i>
                            </div>

                            <!-- Client Info -->
                            <div class="flex items-center gap-4 mb-6">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-gradient-to-br <?php echo $testimonial['gradient']; ?> rounded-full animate-pulse"></div>
                                    <img src="<?php echo htmlspecialchars($testimonial['client_image']); ?>"
                                        alt="<?php echo htmlspecialchars($testimonial['client_name']); ?>"
                                        class="w-16 h-16 object-cover rounded-full border-2 border-white relative z-10" />
                                </div>
                                <div>
                                    <p class="text-gray-600"><?php echo htmlspecialchars($testimonial['company']); ?></p>
                                </div>
                            </div>

                            <!-- Rating -->
                            <div class="mb-6">
                                <div class="flex gap-1">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <i class="fas fa-star text-yellow-400 <?php echo $i <= $testimonial['rating'] ? '' : 'text-gray-300'; ?>"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>

                            <!-- Testimonial Text -->
                            <blockquote class="text-gray-600 italic flex-grow relative">
                                <div class="absolute -left-2 -top-2 text-4xl text-electric-blue/10 group-hover:text-electric-blue/20 transition-colors duration-300">"</div>
                                <?php echo htmlspecialchars($testimonial['quote']); ?>
                                <div class="absolute -right-2 bottom-0 text-4xl text-electric-blue/10 group-hover:text-electric-blue/20 transition-colors duration-300">"</div>
                            </blockquote>

                            <?php if (isset($testimonial['company_logo'])): ?>
                                <!-- Company Logo -->
                                <div class="mt-6 pt-6 border-t border-gray-100">
                                    <img src="<?php echo htmlspecialchars($testimonial['company_logo']); ?>"
                                        alt="<?php echo htmlspecialchars($testimonial['company']); ?>"
                                        class="h-8 w-auto grayscale group-hover:grayscale-0 transition-all duration-500" />
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>