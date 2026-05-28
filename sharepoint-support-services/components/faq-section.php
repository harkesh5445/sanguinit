<?php

/**
 * FAQ Section Component
 * 
 * Displays frequently asked questions with expandable answers
 */

// Load FAQ data from config
$data_config = load_config('data-config') ?? [];
$faqs = $data_config['faqs_data'] ?? [
    [
        'icon' => 'fas fa-cube',
        'question' => 'What digital transformation services do you offer?',
        'answer' => 'We provide comprehensive digital transformation services including cloud migration, enterprise applications, data analytics, AI/ML integration, and custom software development. Our solutions are tailored to your business needs and industry requirements.',
        'gradient' => 'from-electric-blue to-neon-pink'
    ],
    [
        'icon' => 'fas fa-shield-alt',
        'question' => 'How do you ensure data security?',
        'answer' => 'We implement robust security measures including encryption, access controls, and compliance with international standards (ISO 27001). Our team follows industry best practices and regularly updates security protocols to protect your data.',
        'gradient' => 'from-cyber-yellow to-sunset-orange'
    ],
    [
        'icon' => 'fas fa-code-branch',
        'question' => 'What is your project development approach?',
        'answer' => 'We follow an agile methodology with iterative development cycles. This ensures continuous feedback, flexibility to adapt to changes, and regular delivery of working solutions. Our approach emphasizes collaboration and transparency throughout the project.',
        'gradient' => 'from-sunset-orange to-coral-red'
    ],
    [
        'icon' => 'fas fa-headset',
        'question' => 'How do you support after project completion?',
        'answer' => 'We provide comprehensive post-project support including maintenance, updates, and technical assistance. Our dedicated support team ensures smooth operation of your systems and helps resolve any issues promptly.',
        'gradient' => 'from-mystic-violet to-vibrant-purple'
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
                Support & Help
            </span>
            <h2 class="text-4xl lg:text-5xl font-bold mb-6 bg-gradient-to-r from-deep-ocean to-mystic-violet bg-clip-text text-transparent">
                Frequently Asked Questions
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Find answers to common questions about our services and solutions.
            </p>
        </div>

        <!-- FAQ Grid -->
        <div class="grid grid-cols-1 gap-6 max-w-4xl mx-auto" x-data="{ activeTab: null }">
            <?php foreach ($faqs as $index => $faq): ?>
                <!-- FAQ Item <?php echo $index + 1; ?> -->
                <div class="group" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full">
                        <div class="relative p-6 rounded-2xl bg-[#fbfaff] shadow-md hover:shadow-lg transition-all duration-300 hover:bg-[#fff8f9]">
                            <div class="absolute inset-0 bg-gradient-to-r <?php echo $faq['gradient']; ?>/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="relative">
                                <div class="flex items-center justify-between gap-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-gradient-to-r <?php echo $faq['gradient']; ?> flex items-center justify-center">
                                            <i class="<?php echo $faq['icon']; ?> text-white"></i>
                                        </div>
                                        <h3 class="text-xl font-semibold text-gray-800"><?php echo htmlspecialchars($faq['question']); ?></h3>
                                    </div>
                                    <div class="transform transition-transform duration-300" :class="{ 'rotate-180': open }">
                                        <i class="fas fa-chevron-down text-gray-500"></i>
                                    </div>
                                </div>
                                <div x-show="open" x-collapse x-cloak
                                    class="pl-14 pt-4 text-gray-600 bg-[#faffff] mt-4 p-4 rounded-xl">
                                    <?php echo htmlspecialchars($faq['answer']); ?>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>