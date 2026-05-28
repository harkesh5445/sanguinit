<?php

/**
 * Industries Section Component
 * Displays industry cards with horizontal scrolling
 */

$data_config = load_config('data-config');
$industries = $data_config['industries'] ?? [];
?>

<section class="py-24 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 pattern-grid opacity-5"></div>

    <div class="container mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-lg p-8">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                <!-- Left Content -->
                <div class="md:w-1/3 p-4">
                    <h2 class="text-4xl font-bold mb-6 bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent animate-gradient-x">
                        Industries We Cater To
                    </h2>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        We extend the team of experts with the top-tier Microsoft SharePoint development services in India industrial experience to support your business solutions with the ultimate use of the latest technology and tools.
                    </p>

                    <a href="https://sanguineit.com/case_studies.php" class="group relative inline-flex items-center justify-center px-8 py-3 text-lg font-medium text-white transition-all duration-300 bg-gradient-to-r from-orange-500 to-red-500 rounded-full hover:from-orange-600 hover:to-red-600 transform hover:scale-105">
                        <span class="absolute inset-0 rounded-full bg-gradient-to-r from-orange-500 to-red-500 opacity-0 group-hover:opacity-20 blur transition-all duration-500"></span>
                        View All
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <!-- Right Content - Industries Slider -->
                <div class="md:w-2/3 w-full relative">
                    <div class="swiper-container">
                        <div class="relative">
                            <div class="flex overflow-x-auto space-x-6 p-4 scrollbar-hide">
                                <?php foreach ($industries as $industry): ?>
                                    <div class="w-full flex-shrink-0 group industry-card glow-border float-card">
                                        <div class="relative overflow-hidden rounded-xl shadow-lg shine-effect">
                                            <!-- Background blur effect -->
                                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/50 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                                            <!-- Image with enhanced hover effect -->
                                            <div class="relative h-[400px] transform-gpu transition-all duration-500 group-hover:scale-110">
                                                <?= responsive_image(
                                                    $industry['image'],
                                                    $industry['name'],
                                                    'w-full h-full object-cover transition-transform duration-700'
                                                ) ?>

                                                <!-- Gradient overlay -->
                                                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black opacity-90"></div>

                                                <!-- Content wrapper -->
                                                <div class="absolute inset-0 flex flex-col justify-end p-8 card-content transition-transform duration-500">
                                                    <!-- Industry name with enhanced styling -->
                                                    <div class="bg-white/90 backdrop-blur-md rounded-full px-6 py-3 text-center transform transition-all duration-500 group-hover:translate-y-0 group-hover:scale-105">
                                                        <span class="text-orange-500 font-semibold text-lg relative">
                                                            <span class="absolute inset-0 bg-orange-500/20 blur-sm"></span>
                                                            <?= $industry['name'] ?>
                                                        </span>
                                                    </div>

                                                    <!-- Hidden description that appears on hover -->
                                                    <div class="mt-6 text-white opacity-0 transform translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0">
                                                        <p class="text-base text-center">
                                                            Brief description of the industry services and expertise
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Navigation Buttons -->
                            <button class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-gradient-to-r from-purple-600 to-blue-600 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 text-white transform hover:scale-110 hover:-translate-x-2">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-gradient-to-r from-purple-600 to-blue-600 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 text-white transform hover:scale-110 hover:translate-x-2">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute -bottom-16 -left-16 w-64 h-64 bg-purple-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
    <div class="absolute -top-16 -right-16 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
</section>