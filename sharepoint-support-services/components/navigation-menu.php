<style>
    /* Solution 4: Overflow Control and Stacking Context Management */
    .main-header,
    .top-header {
        position: fixed !important;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999 !important;
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        overflow: visible !important;
    }

    /* Create new stacking context for navigation */
    .custom-nav {
        position: relative;
        z-index: 10000;
        overflow: visible !important;
    }

    /* Ensure nav-list doesn't create unwanted stacking context */
    .nav-list {
        overflow: visible !important;
        position: relative;
        z-index: 10000;
    }

    /* Menu items positioning */
    .sbmenu {
        position: relative;
        overflow: visible !important;
        z-index: 10001;
    }

    /* Dropdown positioning and overflow */
    .nx-dropdown {
        position: absolute;
        left: 0;
        right: 0;
        top: 100%;
        z-index: 10002 !important;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        overflow: visible !important;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
    }

    /* Sub-menu section overflow handling */
    .sub-menu-section {
        z-index: 10003 !important;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        overflow: visible !important;
        position: relative;
        width: fit-content;
    }

    /* Container overflow management */
    .container {
        overflow: visible !important;
    }

    /* Column overflow handling */
    .sub-menu-column {
        overflow: visible !important;
        position: relative;
    }

    /* Dropdown show state */
    div.custom-nav>ul>li:hover .nx-dropdown {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        overflow: visible !important;
    }

    /* Body overflow management when dropdown is active */
    body.dropdown-open {
        overflow-x: hidden;
        /* Prevent horizontal scroll only */
        overflow-y: auto;
        /* Allow vertical scroll */
    }

    /* Hero section overflow and positioning */
    #hero-section,
    .hero-section {
        position: relative;
        z-index: 1;
        overflow: hidden;
        /* Keep hero overflow controlled */
    }

    /* Mobile responsiveness */
    @media (max-width: 991px) {

        .main-header,
        .custom-nav,
        .nav-list,
        .sbmenu,
        .nx-dropdown,
        .sub-menu-section {
            overflow: visible !important;
        }
    }

    /* Enhanced dropdown animations */
    .nx-dropdown {
        max-height: 0;
        transition: max-height 0.3s ease, opacity 0.3s ease, transform 0.3s ease;
    }

    div.custom-nav>ul>li:hover .nx-dropdown {
        max-height: 1000px;
        /* Large enough to accommodate content */
    }

    /* Prevent text overflow and improve spacing */
    .sub-menu-column {
        overflow: visible !important;
        word-wrap: break-word;
        min-height: 200px;
        width: fit-content;
        /* Ensure minimum height for consistent layout */
    }

    .sub-menu-column .menuheading {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-bottom: 15px !important;
    }

    .sub-menu-column ul li a {
        white-space: normal;
        line-height: 1.4;
        padding: 3px 0;
        display: block;
        overflow: visible;
    }


    /* Dark mode overflow fixes */
    .active-dark .nx-dropdown,
    .active-dark .sub-menu-section {
        background: #202020 !important;
        overflow: visible !important;
    }

    /* Force visibility for all dropdown elements */
    .nx-dropdown,
    .nx-dropdown *,
    .sub-menu-section,
    .sub-menu-section * {
        overflow: visible !important;
    }

    /* Ensure proper layering */
    .main-header {
        transform: translateZ(0);
        /* Create new stacking context */
    }

    /* .nx-dropdown {
        transform: translateZ(1px);
        display: flex;
        /* Ensure dropdown is above everything */


    .nx-dropdown {
        left: 25% !important;
        right: auto !important;
        transform: translate(-40%, 0) !important;
        /* Optionally set a min-width for wide submenus */
        /* min-width: 300px; */
        /* Remove width: 100% or right: 0 if present */
    }

    .main-header {
        padding: 0px 5px;

    }
</style>

<!-- Navigation Menu -->
<div class="custom-nav nv4" role="navigation">
    <ul class="nav-list">
        <li class="sbmenu rpdropdown">
            <a href="#" class="menu-links">Company</a>
            <div class="nx-dropdown menu-dorpdown">
                <div class="sub-menu-section">
                    <div class="sub-menu-center-block">
                        <div class="sub-menu-column smfull">
                            <ul class="list">
                                <li><a href="about.php">About Us </a> </li>
                                <li><a href="about.php#why-choose-us">Why Choose Us </a> </li>
                                <li><a href="clients.php">Clients</a> </li>
                                <li><a href="testimonials.php">Testimonials </a> </li>
                                <li><a href="contact-us.php">Contact Us </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="sbmenu">
            <a href="#" class="menu-links">Services</a>
            <div class="nx-dropdown">
                <div class="sub-menu-section">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="sub-menu-center-block ">
                                <div class="sub-menu-column ">
                                    <div class="menuheading">Application Support</div>
                                    <ul class="list">
                                        <li><a href="sitefinity.php">Sitefinity Support</a></li>
                                        <li><a href="magento-maintenance-services.php">Magento Maintenance Services</a></li>
                                        <li><a href="../sharepoint-support-services.php">Sharepoint Support Services</a></li>
                                        <li><a href="#">PHP Maintenance & Support</a></li>
                                        <li><a href="drupal-maintenance-and-support.php">Drupal Support And Maintenance</a></li>
                                        <li><a href="wordpress-maintenance-services.php">WordPress Maintenance Support</a></li>
                                        <li><a href="joomla-maintenance-and-support.php">Joomla Support & Maintenance</a></li>
                                        <li><a href="app-maintenance.php">App Maintenance </a></li>
                                        <li><a href="website-maintenance-and-support-services.php">Website Maintenance </a></li>
                                    </ul>
                                </div>
                                <div class="sub-menu-column">
                                    <div class="menuheading">Migration Services</div>
                                    <ul class="list">
                                        <li><a href="application-recovery.php">Application Recovery </a></li>
                                        <li><a href="dotnet-migration.php">.NET Migration</a></li>
                                        <li><a href="legacy-systems-migration.php">Legacy Systems Migration</a></li>
                                        <li><a href="new-technology-upgrade-dotnet-and-java.php">New Technology Upgrade- .NET & JAVA</a></li>
                                    </ul>
                                </div>
                                <div class="sub-menu-column">
                                    <div class="menuheading">Web Development</div>
                                    <ul class="list">
                                        <li><a href="custom-web-development.php">Custom Web Development</a></li>
                                        <li><a href="ecommerce-web-development.php">eCommerce Development </a></li>
                                        <li><a href="aspdotnet-development.php">Asp.net Development</a></li>
                                        <li><a href="opensource-technology.php">Open Source Technology</a></li>
                                        <li><a href="content-management-services.php">Content Management </a></li>
                                        <li><a href="progressive-web-app.php">Progressive Web App </a></li>
                                        <li><a href="multilingual-website-development.php">Multilingual Website Development </a></li>
                                    </ul>
                                </div>
                                <div class="sub-menu-column">
                                    <div class="menuheading">Auditing</div>
                                    <ul class="list">
                                        <li><a href="application-auditing-services.php">Application Auditing</a></li>
                                        <li><a href="full-website-audit.php">Full Website Audit</a></li>
                                        <li><a href="web-analytics.php">Web Analytics</a></li>
                                        <li><a href="security-auditing.php">Security Auditing</a></li>
                                        <li><a href="database-auditing.php">Database Auditing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="sbmenu">
            <a href="#" class="menu-links">TECHNOLOGIES</a>
            <div class="nx-dropdown">
                <div class="sub-menu-section">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="sub-menu-center-block">
                                <div class="sub-menu-column">
                                    <div class="menuheading">Mobile Development</div>
                                    <ul class="list">
                                        <li><a href="android.php">Android</a></li>
                                        <li><a href="ios.php">iOS</a></li>
                                        <li><a href="reactnative.php">React Native</a></li>
                                        <li><a href="flutter.php">Flutter</a></li>
                                        <li><a href="ionic.php">Ionic</a></li>
                                        <li><a href="xamarin.php">Xamarin</a></li>
                                        <li><a href="phonegap.php">PhoneGap</a></li>
                                        <li><a href="firebase.php">Firebase</a></li>
                                        <li><a href="#">AWS Mobile Hub</a></li>
                                    </ul>
                                </div>
                                <div class="sub-menu-column">
                                    <div class="menuheading">Web Development</div>
                                    <ul class="list">
                                        <li><a href="Microsoft.php">Microsoft .NET</a></li>
                                        <li><a href="Python.php">Python</a></li>
                                        <li><a href="NodeJS.php">Node.js</a></li>
                                        <li><a href="Laravel.php">Laravel</a></li>
                                        <li><a href="Code-Igniter.php">CodeIgniter</a></li>
                                        <li><a href="Cake-php.php">CakePHP</a></li>
                                        <li><a href="ROR.php">Ruby on Rails</a></li>
                                        <li><a href="MEAN-Stack.php">MEAN Stack</a></li>
                                    </ul>
                                </div>
                                <div class="sub-menu-column">
                                    <div class="menuheading">Frontend Technologies</div>
                                    <ul class="list">
                                        <li><a href="ReactJs.php">React.js</a></li>
                                        <li><a href="AngularJS.php">Angular</a></li>
                                        <li><a href="Redux.php">Redux</a></li>
                                        <li><a href="JavaScript.php">JavaScript</a></li>
                                        <li><a href="HTML5.php">HTML5</a></li>
                                        <li><a href="CSS3.php">CSS3</a></li>
                                        <li><a href="Electron-JS.php">Electron.js</a></li>
                                    </ul>
                                </div>
                                <div class="sub-menu-column">
                                    <div class="menuheading">CMS & E-Commerce</div>
                                    <ul class="list">
                                        <li><a href="WordPress.php">WordPress</a></li>
                                        <li><a href="Drupal.php">Drupal</a></li>
                                        <li><a href="Joomla.php">Joomla</a></li>
                                        <li><a href="Magento.php">Magento</a></li>
                                        <li><a href="Shopify.php">Shopify</a></li>
                                        <li><a href="Cart.php">OpenCart</a></li>
                                        <li><a href="PrestaShop.php">PrestaShop</a></li>
                                    </ul>
                                    <div class="menuheading">Database</div>
                                    <ul class="list">
                                        <li><a href="MySQL.php">MySQL</a></li>
                                        <li><a href="PostGres.php">PostgreSQL</a></li>
                                        <li><a href="Mongo.php">MongoDB</a></li>
                                        <li><a href="MSSQL.php">MS SQL Server</a></li>
                                        <li><a href="Oracle.php">Oracle</a></li>
                                        <li><a href="SQLite.php">SQLite</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="sbmenu">
            <a href="#" class="menu-links">Industries</a>
            <div class="nx-dropdown">
                <div class="sub-menu-section">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="sub-menu-center-block">
                                <div class="sub-menu-column">
                                    <div class="menuheading">Financial Services</div>
                                    <ul class="list">
                                        <li><a href="banking-and-finance.php">Banking and Finance</a></li>
                                        <li><a href="#">Insurance</a></li>
                                        <li><a href="#">Investment Management</a></li>
                                        <li><a href="#">Fintech Solutions</a></li>
                                    </ul>
                                </div>
                                <div class="sub-menu-column">
                                    <div class="menuheading">Technology & Communication</div>
                                    <ul class="list">
                                        <li><a href="information-technology-industry.php">Information Technology</a></li>
                                        <li><a href="technology-and-communication.php">Technology and Communication</a></li>
                                        <li><a href="#">Software Development</a></li>
                                        <li><a href="#">Telecommunications</a></li>
                                        <li><a href="#">Media & Entertainment</a></li>
                                    </ul>
                                </div>
                                <div class="sub-menu-column">
                                    <div class="menuheading">Healthcare & Life Sciences</div>
                                    <ul class="list">
                                        <li><a href="healthcare-and-life-science.php">Healthcare & Life Sciences</a></li>
                                        <li><a href="#">Pharmaceuticals</a></li>
                                        <li><a href="#">Medical Devices</a></li>
                                        <li><a href="#">Telemedicine</a></li>
                                        <li><a href="#">Healthcare Analytics</a></li>
                                    </ul>
                                </div>
                                <div class="sub-menu-column">
                                    <div class="menuheading">Other Industries</div>
                                    <ul class="list">
                                        <li><a href="retail-and-consumer-products.php">Retail and Consumer Products</a></li>
                                        <li><a href="education-and-e-learning-sector.php">Education and e-Learning</a></li>
                                        <li><a href="travel-and-hospitality.php">Travel and Hospitality</a></li>
                                        <li><a href="energy-and-utilities.php">Energy and Utilities</a></li>
                                        <li><a href="#">Manufacturing</a></li>
                                        <li><a href="#">Real Estate</a></li>
                                        <li><a href="#">Government & Public Sector</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="sbmenu">
            <a href="case_studies.php" class="menu-links">Case Studies </a>
        </li>
        <li class="sbmenu rpdropdown">
            <a href="#" class="menu-links">Knowledge Base</a>
            <div class="nx-dropdown menu-dorpdown">
                <div class="sub-menu-section">
                    <div class="sub-menu-center-block">
                        <div class="sub-menu-column smfull">
                            <ul class="list">
                                <li><a href="#">Blogs</a> </li>
                                <li><a href="#">News & Events</a> </li>
                                <li><a href="#">Articles</a> </li>
                                <li><a href="#">Videos </a> </li>
                                <li><a href="#">Infographics</a> </li>
                                <li><a href="#">Ebooks</a> </li>
                                <li><a href="#">Whitepapers</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a href="#" class="menu-links right-bddr">&nbsp;</a>
            <!--menu right border-->
        <li style="display: inline-block;">
            <a href="tel:+919582838747" class="btn-round-  btn-br bg-btn" style="margin-right: 5px;"><i class="fas fa-phone-alt"></i></a>
        </li>
        <li style="display: inline-block;">
            <a href="https://wa.me/+919582838747" class="btn-round-  btn-br bg-btn" target="_blank" style="margin-right: 3px;"><i class="fab fa-whatsapp"></i></a>
        </li>
        <li style="display: inline-block;">
            <a href="#contact-form" class="btn-br bg-btn3 btshad-b2 lnk scroll-to-contact" style="padding: 13px 12px; font-size: 13px; margin-left: 3px; font-weight: 500;">Request A Quote <span class="circle"></span></a>
        </li>
    </ul>
</div>

<script>
    // Smooth scrolling for Request A Quote button
    document.addEventListener('DOMContentLoaded', function() {
        const quoteButton = document.querySelector('.scroll-to-contact');

        if (quoteButton) {
            quoteButton.addEventListener('click', function(e) {
                e.preventDefault();

                const contactForm = document.getElementById('contact-form');
                if (contactForm) {
                    const rect = contactForm.getBoundingClientRect();
                    const offset = window.innerHeight * 0.1; // Small offset from top
                    const targetPosition = window.pageYOffset + rect.top - offset;

                    // Smooth scroll with animation
                    window.scrollTo({
                        top: Math.max(0, targetPosition),
                        behavior: 'smooth'
                    });

                    // Focus first input after scroll for better UX
                    setTimeout(() => {
                        const firstInput = contactForm.querySelector('input[name="name"]');
                        if (firstInput) {
                            firstInput.focus();
                        }
                    }, 800);
                }
            });
        }
    });
</script>