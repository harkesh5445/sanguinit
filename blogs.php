<?php
require_once __DIR__ . '/includes/blog-posts-data.php';
require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('blogs');
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<section class="blog-reference-section pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <h2 class="blog-main-title">Latest from SanguineIT</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <article class="blog-feature-panel">
                    <div id="blogHeroSlider" class="carousel slide" data-ride="carousel" data-interval="4000">
                        <ol class="carousel-indicators">
                            <li data-target="#blogHeroSlider" data-slide-to="0" class="active"></li>
                            <li data-target="#blogHeroSlider" data-slide-to="1"></li>
                            <li data-target="#blogHeroSlider" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="<?php echo blog_post_url('adobe-commerce-cloud-migration-ultimate-guide'); ?>">
                                    <img src="images/about_2/data_8.jpg" alt="Adobe Commerce Cloud Migration guide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <img src="images/about_2/data_4.jpg" alt="Cloud operations and analytics view">
                            </div>
                            <div class="carousel-item">
                                <img src="images/about_2/cation_10.jpg" alt="Business growth chart analysis">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#blogHeroSlider" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#blogHeroSlider" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </article>

                <div id="blogListWrap">
                    <article class="blog-list-card" data-title="Adobe Commerce Cloud Migration: The Ultimate Guide" data-content="Adobe Commerce Cloud migration planning, benefits, and phased go-live strategy for enterprise merchants.">
                        <img src="images/about_2/data_8.jpg" alt="Adobe Commerce Cloud Migration">
                        <div class="blog-list-card-content">
                            <h3>Adobe Commerce Cloud Migration: The Ultimate Guide</h3>
                            <p class="blog-meta">June 5, 2024 &nbsp; | &nbsp; No Comments</p>
                            <p class="lh">Moving to Adobe Commerce Cloud is more than a hosting change—it is a platform modernization initiative. This guide covers discovery, migration approaches, cloud benefits, and post-launch optimization for growing ecommerce brands.</p>
                            <a href="<?php echo blog_post_url('adobe-commerce-cloud-migration-ultimate-guide'); ?>" class="blog-read-btn">Read More</a>
                        </div>
                    </article>

                    <article class="blog-list-card" data-title="AMP with Magento2: Get to Know How Fast Loading Pages Can Win Customers" data-content="Page speed impacts Magento store search performance, user engagement, and conversion rates.">
                        <img src="images/about_2/cation_4.jpg" alt="AMP with Magento2 article">
                        <div class="blog-list-card-content">
                            <h3>AMP with Magento2: Get to Know How Fast Loading Pages Can Win Customers</h3>
                            <p class="blog-meta">May 6, 2026 &nbsp; | &nbsp; 1 Comment</p>
                            <p class="lh">Page speed is no longer just a technical detail. It directly impacts how your Magento store performs in search, how users engage, and how much you sell. Search engines now focus heavily on speed and user experience when ranking ecommerce websites.</p>
                            <a href="<?php echo blog_post_url('amp-with-magento2-fast-loading-pages'); ?>" class="blog-read-btn">Read More</a>
                        </div>
                    </article>

                    <article class="blog-list-card" data-title="Moodle LMS 5.2: Everything You Need to Know About the Latest Upgrade" data-content="Modern LMS platforms help organizations train teams, maintain compliance, and scale digital learning programs.">
                        <img src="images/about_2/cation_5.jpg" alt="Moodle LMS 5.2 article">
                        <div class="blog-list-card-content">
                            <h3>Moodle LMS 5.2: Everything You Need to Know About the Latest Upgrade</h3>
                            <p class="blog-meta">April 23, 2026 &nbsp; | &nbsp; No Comments</p>
                            <p class="lh">Despite the fact that we live in a world where technology is integral to education, digital learning has become the norm rather than the exception. Organizations are using modern LMS platforms to train teams, maintain compliance, and scale learning.</p>
                            <a href="<?php echo blog_post_url('moodle-lms-5-2-latest-upgrade'); ?>" class="blog-read-btn">Read More</a>
                        </div>
                    </article>

                    <article class="blog-list-card" data-title="A Useful Guide to the Magento Security Patches" data-content="Guide to Magento patch priorities, implementation approach, and maintenance best practices for secure operations.">
                        <img src="images/about_2/cation_6.jpg" alt="Magento security patches article">
                        <div class="blog-list-card-content">
                            <h3>A Useful Guide to the Magento Security Patches</h3>
                            <p class="blog-meta">March 28, 2026 &nbsp; | &nbsp; No Comments</p>
                            <p class="lh">Magento websites are a critical part of business operations since they handle customer data and transactions. This guide explains patch priorities, implementation approach, and maintenance best practices for secure operations.</p>
                            <a href="<?php echo blog_post_url('magento-security-patches-guide'); ?>" class="blog-read-btn">Read More</a>
                        </div>
                    </article>

                    <article class="blog-list-card" data-title="Sitefinity 15 Upgrade Checklist for Enterprise Portals" data-content="Readiness assessments, migration sequencing, and post-go-live validation for Sitefinity enterprise upgrades.">
                        <img src="images/about_2/cation_7.jpg" alt="Sitefinity 15 upgrade checklist">
                        <div class="blog-list-card-content">
                            <h3>Sitefinity 15 Upgrade Checklist for Enterprise Portals</h3>
                            <p class="blog-meta">March 14, 2026 &nbsp; | &nbsp; 2 Comments</p>
                            <p class="lh">Upgrading Sitefinity across large content estates requires careful planning. This checklist covers environment readiness, widget compatibility, content migration, and launch validation for enterprise teams.</p>
                            <a href="contact-us.php" class="blog-read-btn">Read More</a>
                        </div>
                    </article>

                    <article class="blog-list-card" data-title="How Headless Commerce Improves Performance and Flexibility" data-content="Practical guide to evaluate and implement headless commerce architecture for modern storefronts.">
                        <img src="images/about_2/cation_8.jpg" alt="How headless commerce improves performance">
                        <div class="blog-list-card-content">
                            <h3>How Headless Commerce Improves Performance and Flexibility</h3>
                            <p class="blog-meta">February 27, 2026 &nbsp; | &nbsp; No Comments</p>
                            <p class="lh">Headless commerce separates frontend experience from backend services, enabling faster releases and better channel coverage. Learn when to adopt headless architecture and how to plan your rollout.</p>
                            <a href="contact-us.php" class="blog-read-btn">Read More</a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="col-lg-4">
                <div id="blogSidebarSearchWrap">
                <?php include __DIR__ . '/includes/blog-sidebar.php'; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .blog-reference-section {
        background: #f3f3f3;
    }

    .blog-main-title {
        margin-bottom: 16px;
    }

    .blog-feature-panel {
        background: #fff;
        border: 1px solid #e2e2e2;
        padding: 10px;
        margin-bottom: 14px;
    }

    .blog-feature-panel img {
        width: 100%;
        height: 360px;
        object-fit: cover;
        display: block;
    }

    #blogHeroSlider .carousel-indicators li {
        width: 9px;
        height: 9px;
        border-radius: 50%;
    }

    #blogHeroSlider .carousel-control-prev-icon,
    #blogHeroSlider .carousel-control-next-icon {
        background-size: 65% 65%;
        width: 34px;
        height: 34px;
        background-color: rgba(0, 0, 0, 0.35);
        border-radius: 50%;
    }

    .blog-list-card {
        display: flex;
        gap: 16px;
        background: #fff;
        border: 1px solid #e2e2e2;
        padding: 10px;
        margin-bottom: 14px;
    }

    .blog-list-card img {
        width: 230px;
        min-width: 230px;
        height: 155px;
        object-fit: cover;
        display: block;
    }

    .blog-list-card-content h3 {
        font-size: 24px;
        line-height: 1.3;
        margin-bottom: 6px;
    }

    .blog-meta {
        color: #777;
        font-size: 14px;
        margin-bottom: 8px;
    }

    .blog-list-card-content .lh {
        margin-bottom: 10px;
    }

    .blog-read-btn {
        display: inline-block;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        font-size: 14px;
        padding: 8px 16px;
        border-radius: 2px;
    }

    .blog-sidebar-box {
        background: #fff;
        border: 1px solid #e2e2e2;
        padding: 14px;
        margin-bottom: 14px;
    }

    .blog-sidebar-box h4 {
        font-size: 30px;
        margin-bottom: 10px;
        border-bottom: 1px solid #e6e6e6;
        padding-bottom: 10px;
    }

    .blog-sidebar-search {
        display: flex;
        gap: 0;
    }

    .blog-sidebar-search input {
        flex: 1;
        height: 40px;
        border: 1px solid #ddd;
        padding: 0 10px;
    }

    .blog-sidebar-search button {
        border: 0;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        width: 110px;
        cursor: pointer;
    }

    .blog-sidebar-cta {
        display: inline-block;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        padding: 10px 16px;
        border-radius: 2px;
    }

    .blog-category-list,
    .blog-recent-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .blog-category-list li,
    .blog-recent-list li {
        padding-left: 14px;
        position: relative;
        margin-bottom: 8px;
        line-height: 1.45;
    }

    .blog-category-list li::before,
    .blog-recent-list li::before {
        content: "";
        width: 6px;
        height: 6px;
        background: #dc2429;
        position: absolute;
        left: 0;
        top: 9px;
    }

    .blog-category-list a,
    .blog-recent-list a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
    }

    .blog-category-list a:hover,
    .blog-recent-list a:hover {
        color: #dc2429;
    }

    .blog-month-select {
        width: 100%;
        height: 42px;
        border: 1px solid #ddd;
        padding: 0 12px;
        color: #333;
        background: #fff;
        font-size: 14px;
        cursor: pointer;
    }

    @media (max-width: 991px) {
        .blog-feature-panel img {
            height: 280px;
        }

        .blog-list-card {
            flex-direction: column;
        }

        .blog-list-card img {
            width: 100%;
            min-width: 100%;
            height: 220px;
        }
    }
</style>

<script>
    (function () {
        var searchWrap = document.getElementById("blogSidebarSearchWrap");
        var searchInput = searchWrap ? searchWrap.querySelector('input[type="search"], input[type="text"]') : null;
        var cards = Array.prototype.slice.call(document.querySelectorAll("#blogListWrap .blog-list-card"));

        function applySearch() {
            var q = (searchInput.value || "").trim().toLowerCase();
            cards.forEach(function (card) {
                var txt = ((card.getAttribute("data-title") || "") + " " + (card.getAttribute("data-content") || "") + " " + card.textContent).toLowerCase();
                var match = !q || txt.indexOf(q) >= 0;
                card.style.display = match ? "" : "none";
            });
        }

        var searchForm = searchWrap ? searchWrap.querySelector("form") : null;
        if (searchForm) {
            searchForm.addEventListener("submit", function (e) {
                e.preventDefault();
                applySearch();
            });
        }
        if (searchInput) {
            searchInput.addEventListener("input", applySearch);
        }
    })();
</script>

<?php include "footer.php"; ?>
