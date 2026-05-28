<?php

/**
 * Site Configuration File
 * Contains all configuration variables and constants
 */

// Site Information
define('SITE_NAME', 'SanguineIT Technologies');
define('SITE_DESCRIPTION', 'Microsoft SharePoint Development Services - Digital-Focused Productivity');
define('COMPANY_EXPERIENCE', '22+');
define('TOTAL_CLIENTS', '600+');
define('GLOBAL_BRANDS', '500+');
define('TECH_PROFESSIONALS', '400+');

// SEO Information
define('SITE_KEYWORDS', 'SharePoint development, SharePoint support services, Microsoft SharePoint consulting, SharePoint migration, SharePoint maintenance, document management solutions');
define('SITE_AUTHOR', 'SanguineIT Technologies');
define('COMPANY_FOUNDED', '2002');
define('COMPANY_LOCATION', 'Noida, India & Brooklyn, NY, USA');

// Contact Information
define('CONTACT_EMAIL', 'send-mail.php');
define('CONTACT_SUBJECT', 'New Contact Form Submission');
define('CONTACT_REDIRECT', '/thankyou.php');
define('BUSINESS_EMAIL', 'info@sanguineit.com');
define('BUSINESS_PHONE_US', '+1-662-300-1685');
define('BUSINESS_PHONE_INDIA', '+91-997-172-6173');

// Social Media
define('LINKEDIN_URL', 'https://www.linkedin.com/company/sanguineit');
define('TWITTER_URL', 'https://twitter.com/sanguineit');

// Asset Paths
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMAGES_PATH', '../images/');

// API Keys and External Services
// Add any external service configurations here

return [
    'site' => [
        'name' => SITE_NAME,
        'description' => SITE_DESCRIPTION,
        'keywords' => SITE_KEYWORDS,
        'author' => SITE_AUTHOR,
        'experience_years' => COMPANY_EXPERIENCE,
        'total_clients' => TOTAL_CLIENTS,
        'global_brands' => GLOBAL_BRANDS,
        'tech_professionals' => TECH_PROFESSIONALS,
        'founded' => COMPANY_FOUNDED,
        'location' => COMPANY_LOCATION
    ],
    'contact' => [
        'email_handler' => CONTACT_EMAIL,
        'subject' => CONTACT_SUBJECT,
        'redirect_url' => CONTACT_REDIRECT,
        'business_email' => BUSINESS_EMAIL,
        'phone_us' => BUSINESS_PHONE_US,
        'phone_india' => BUSINESS_PHONE_INDIA
    ],
    'social' => [
        'linkedin' => LINKEDIN_URL,
        'twitter' => TWITTER_URL
    ],
    'assets' => [
        'css' => CSS_PATH,
        'js' => JS_PATH,
        'images' => IMAGES_PATH
    ]
];
