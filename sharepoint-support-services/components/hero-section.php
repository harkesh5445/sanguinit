<?php

/**
 * Hero Section Component
 * Displays the main hero section with contact form
 */

// Load site configuration
$site_config = load_config('site-config');
?>

<!-- Particles.js containers removed to improve performance - loaded via lazy loading -->

<main class="relative hero-main-section" id="hero-section">
    <div class="hero-overlay w-full h-full">
        <div class="container mx-auto px-4 py-16 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between mt-5">
                <div class="lg:w-2/3 overflow-hidden">
                    <h1 class="text-4xl lg:text-5xl font-bold mb-4 text-white bg-gradient-to-r from-cyber-yellow via-neon-pink to-electric-blue bg-clip-text">
                        <?= $site_config['site']['description'] ?>
                    </h1>
                    <p class="text-lg mb-6 text-white">
                        With <?= $site_config['site']['experience_years'] ?> years of expertise from a Microsoft SharePoint development company to offer customized development services
                    </p>
                    <div class="flex flex-wrap gap-4 mb-6">
                        <span class="bg-gradient-to-r from-electric-blue/20 to-neon-pink/20 backdrop-blur-sm text-white px-4 py-2 rounded-full border border-white/20 hover:border-white/40 transition-all duration-300">Business Process Automation</span>
                        <span class="bg-gradient-to-r from-cyber-yellow/20 to-digital-green/20 backdrop-blur-sm text-white px-4 py-2 rounded-full border border-white/20 hover:border-white/40 transition-all duration-300">Document Management</span>
                        <span class="bg-gradient-to-r from-sunset-orange/20 to-coral-red/20 backdrop-blur-sm text-white px-4 py-2 rounded-full border border-white/20 hover:border-white/40 transition-all duration-300">Seamless Collaborations</span>
                        <span class="bg-gradient-to-r from-mystic-violet/20 to-ruby-red/20 backdrop-blur-sm text-white px-4 py-2 rounded-full border border-white/20 hover:border-white/40 transition-all duration-300">Intranet Connectivity</span>
                        <span class="bg-gradient-to-r from-emerald-green/20 to-azure-blue/20 backdrop-blur-sm text-white px-4 py-2 rounded-full border border-white/20 hover:border-white/40 transition-all duration-300">Workflow Design Services</span>
                    </div>
                    <div class="flex gap-1">
                        <img src="/images/about/badges-a.png" alt="NASSCOM Member - Software Development Award" class="w-16 h-16" width="64" height="64" loading="eager" />
                        <img src="/images/about/badges-b.png" alt="Top App Development Company Award" class="w-16 h-16" width="64" height="64" loading="eager" />
                        <img src="/images/about/badges-c.png" alt="Technology Excellence Award" class="w-16 h-16" width="64" height="64" loading="eager" />
                        <img src="/images/about/badges-d.png" alt="Quality Assurance Certification" class="w-16 h-16" width="64" height="64" loading="eager" />
                        <img src="/images/about/badges-a.png" alt="Industry Recognition Badge" class="w-16 h-16" width="64" height="64" loading="lazy" />
                    </div>
                </div>

                <!-- Contact Form Component -->
                <?php include_component('contact-form', $site_config['contact']); ?>
            </div>
        </div>
    </div>
</main>