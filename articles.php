<?php
require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('articles');
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<section class="article-reference-section pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <h2 class="article-title">SanguineIT Articles</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <aside class="article-filter-panel">
                    <div class="article-filter-head">View Articles by Category</div>
                    <div class="article-filter-body">
                        <label><input type="checkbox" class="article-cat" value="sitefinity"> Sitefinity</label>
                        <label><input type="checkbox" class="article-cat" value="cms"> CMS</label>
                        <label><input type="checkbox" class="article-cat" value="technology"> Technology</label>
                        <label><input type="checkbox" class="article-cat" value="hiring"> Dedicated Hiring</label>
                        <label><input type="checkbox" class="article-cat" value="marketing"> Digital Marketing</label>
                        <label><input type="checkbox" class="article-cat" value="ecommerce"> Ecommerce</label>
                        <label><input type="checkbox" class="article-cat" value="web"> Web Development</label>
                        <label><input type="checkbox" class="article-cat" value="lms"> LMS</label>
                        <label><input type="checkbox" class="article-cat" value="magento"> Magento</label>
                        <label><input type="checkbox" class="article-cat" value="mobile"> Mobile App Development</label>
                        <label><input type="checkbox" class="article-cat" value="outsourcing"> Outsourcing</label>
                        <label><input type="checkbox" class="article-cat" value="sharepoint"> SharePoint</label>
                    </div>
                    <div class="article-filter-foot"></div>
                </aside>
            </div>

            <div class="col-lg-9">
                <div class="article-top-search">
                    <input type="text" id="articleSearchInput" placeholder="Search in all articles">
                    <button type="button" id="articleSearchBtn">Search</button>
                </div>

                <div class="row article-grid" id="articleGrid">
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card article-card-list" data-category="magento" data-title="Magento Sphinx Search vs Magento Elasticsearch: Here is Everything You Should Know" data-content="Comparison article on Sphinx Search and Elasticsearch for Magento stores.">
                            <img src="images/about_2/data_10.jpg" alt="Magento Sphinx Search vs Magento Elasticsearch">
                            <h4>Magento Sphinx Search vs Magento Elasticsearch: Here is Everything...</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="web" data-title="Why Website Maintenance is Vital After Development?" data-content="Why ongoing website maintenance is critical after launch.">
                            <img src="images/about_2/cont_7.jpg" alt="Why website maintenance is vital after development">
                            <h4>Why Website Maintenance is Vital After Development?</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="sitefinity" data-title="Importance of Maintaining Your Sitefinity Website" data-content="Best practices for long-term sitefinity website maintenance.">
                            <img src="images/about_2/cont_8.jpg" alt="Importance of maintaining your sitefinity website">
                            <h4>Importance of Maintaining Your Sitefinity Website</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="mobile" data-title="Reasons to Choose Swift 5 for Building iOS Apps" data-content="Why Swift 5 is a strong option for modern iOS app development.">
                            <img src="images/about_2/ios_1.jpg" alt="Reasons to choose Swift 5 for building iOS apps">
                            <h4>Reasons to Choose Swift 5 for Building iOS Apps</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="cms" data-title="Practices for WordPress Website Optimization" data-content="Practical optimization checklist for WordPress performance and reliability.">
                            <img src="images/about_2/word_5.jpg" alt="Practices for WordPress website optimization">
                            <h4>Practices for WordPress Website Optimization</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="cms" data-title="WordPress Website Maintenance Strategy" data-content="A complete strategy for maintaining WordPress websites effectively.">
                            <img src="images/about_2/word_66.jpg" alt="WordPress website maintenance strategy">
                            <h4>WordPress Website Maintenance</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="ecommerce" data-title="How Headless Commerce Improves Performance and Flexibility" data-content="A practical guide to evaluate and implement headless commerce architecture.">
                            <img src="images/about_2/cont_3.jpg" alt="How headless commerce improves performance and flexibility">
                            <h4>How Headless Commerce Improves Performance and Flexibility</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="outsourcing" data-title="When to Outsource Full Stack Development and Why" data-content="Decision framework for scaling engineering teams through outsourcing.">
                            <img src="images/about_2/cont_2.jpg" alt="When to outsource full stack development and why">
                            <h4>When to Outsource Full Stack Development and Why</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="technology" data-title="Top Technology Trends Driving Enterprise Platforms in 2026" data-content="Key trends reshaping architecture strategy and digital product delivery.">
                            <img src="images/about_2/data_8.jpg" alt="Top technology trends driving enterprise platforms in 2026">
                            <h4>Top Technology Trends Driving Enterprise Platforms in 2026</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="web" data-title="How to Plan a High-Converting Corporate Website Redesign" data-content="Website redesign planning checklist for UX, SEO, and conversion metrics.">
                            <img src="images/about_2/web_2.jpg" alt="How to plan a high-converting corporate website redesign">
                            <h4>How to Plan a High-Converting Corporate Website Redesign</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="sharepoint" data-title="SharePoint Modernization Checklist for Distributed Teams" data-content="Checklist to modernize SharePoint environments for better collaboration and governance.">
                            <img src="images/about_2/Share_2.jpg" alt="SharePoint modernization checklist for distributed teams">
                            <h4>SharePoint Modernization Checklist for Distributed Teams</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="lms" data-title="LMS Adoption Strategy for Employee Learning Programs" data-content="How to roll out LMS platforms with strong adoption and measurable outcomes.">
                            <img src="images/about_2/data_6.jpg" alt="LMS adoption strategy for employee learning programs">
                            <h4>LMS Adoption Strategy for Employee Learning Programs</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="marketing" data-title="Content Marketing Funnel Design for B2B SaaS" data-content="How to structure top, middle, and bottom funnel content for pipeline growth.">
                            <img src="images/about_2/cation_5.jpg" alt="Content marketing funnel design for B2B SaaS">
                            <h4>Content Marketing Funnel Design for B2B SaaS</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="hiring" data-title="Dedicated Hiring Model: When It Beats Project Outsourcing" data-content="Comparison of dedicated team and project-based outsourcing for scaling delivery.">
                            <img src="images/about_2/cation_6.jpg" alt="Dedicated hiring model comparison">
                            <h4>Dedicated Hiring Model: When It Beats Project Outsourcing</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="magento" data-title="Magento B2B Catalog Architecture Best Practices" data-content="Design patterns for complex catalogs, pricing rules, and account hierarchies.">
                            <img src="images/about_2/data_4.jpg" alt="Magento B2B catalog architecture">
                            <h4>Magento B2B Catalog Architecture Best Practices</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="sitefinity" data-title="Sitefinity Personalization Setup for Enterprise Portals" data-content="Step-by-step personalization strategy for audience segments and campaigns.">
                            <img src="images/about_2/cation_7.jpg" alt="Sitefinity personalization setup">
                            <h4>Sitefinity Personalization Setup for Enterprise Portals</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="mobile" data-title="Cross-Platform Mobile Strategy: Native vs Hybrid" data-content="Decision guide for choosing native, hybrid, or cross-platform mobile delivery.">
                            <img src="images/about_2/cation_8.jpg" alt="Cross-platform mobile strategy">
                            <h4>Cross-Platform Mobile Strategy: Native vs Hybrid</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="ecommerce" data-title="Checkout Optimization Tactics for Higher Conversion Rates" data-content="Practical UX and performance improvements for ecommerce checkout flows.">
                            <img src="images/about_2/cation_9.jpg" alt="Checkout optimization tactics">
                            <h4>Checkout Optimization Tactics for Higher Conversion Rates</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="technology" data-title="API-First Integration Strategy for Enterprise Systems" data-content="Patterns for designing scalable API programs with governance and security controls.">
                            <img src="images/about_2/data_5.jpg" alt="API-first integration strategy">
                            <h4>API-First Integration Strategy for Enterprise Systems</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="cloud" data-title="Kubernetes Cost Controls for Production Workloads" data-content="Practical FinOps and platform practices to manage Kubernetes spend at scale.">
                            <img src="images/about_2/data_7.jpg" alt="Kubernetes cost controls">
                            <h4>Kubernetes Cost Controls for Production Workloads</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="security" data-title="Zero Trust Roadmap for SaaS Engineering Teams" data-content="Identity, segmentation, and monitoring steps for securing multi-tenant SaaS platforms.">
                            <img src="images/about_2/data_9.jpg" alt="Zero trust roadmap for SaaS teams">
                            <h4>Zero Trust Roadmap for SaaS Engineering Teams</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="drupal" data-title="Drupal vs Headless CMS: Choosing the Right Architecture" data-content="Comparison of Drupal, headless CMS, and composable content architecture options.">
                            <img src="images/about_2/cation_4.jpg" alt="Drupal vs headless CMS architecture">
                            <h4>Drupal vs Headless CMS: Choosing the Right Architecture</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="ai" data-title="Generative AI Use Cases for Customer Support Operations" data-content="How support teams can apply AI responsibly for triage, knowledge retrieval, and response drafting.">
                            <img src="images/about_2/cation_10.jpg" alt="Generative AI for customer support">
                            <h4>Generative AI Use Cases for Customer Support Operations</h4>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb20">
                        <article class="article-card" data-category="bigcommerce" data-title="BigCommerce B2B Features Every Merchant Should Enable" data-content="Overview of BigCommerce B2B capabilities for quotes, company accounts, and custom pricing.">
                            <img src="images/about_2/cont_4.jpg" alt="BigCommerce B2B features">
                            <h4>BigCommerce B2B Features Every Merchant Should Enable</h4>
                        </article>
                    </div>
                </div>
                <div class="article-pagination-wrap" id="articlePagination"></div>
            </div>
        </div>
    </div>
</section>

<style>
    .article-reference-section {
        background: #f3f3f3;
    }

    .article-title {
        margin-bottom: 14px;
        font-size: 34px;
    }

    .article-filter-panel {
        border: 1px solid #d8e1ef;
        background: #fff;
    }

    .article-filter-head {
        background: #1e3f66;
        color: #fff;
        padding: 10px 12px;
        font-weight: 700;
    }

    .article-filter-body {
        padding: 12px;
        display: flex;
        flex-direction: column;
        gap: 7px;
        font-size: 14px;
    }

    .article-filter-body label {
        display: flex;
        gap: 8px;
        align-items: center;
    }

    .article-filter-foot {
        height: 28px;
        background: #1e3f66;
    }

    .article-top-search {
        display: flex;
        margin-bottom: 12px;
    }

    .article-top-search input {
        flex: 1;
        height: 42px;
        border: 1px solid #d8e1ef;
        border-right: 0;
        padding: 0 12px;
    }

    .article-top-search button {
        width: 110px;
        border: 0;
        background: #dc2429;
        color: #fff;
        font-weight: 700;
        cursor: pointer;
    }

    .article-card {
        background: #fff;
        border: 1px solid #e2e2e2;
        padding: 8px;
        height: 100%;
    }

    .article-card img {
        width: 100%;
        height: 170px;
        object-fit: cover;
        display: block;
        margin-bottom: 8px;
    }

    .article-card h4 {
        font-size: 18px;
        line-height: 1.35;
        margin: 0;
    }

    .article-card-list h4 {
        font-size: 17px;
    }

    .article-pagination-wrap {
        width: 100%;
        margin-top: 8px;
    }

    .article-pagination-wrap .kb-pagination {
        margin-bottom: 0;
    }

    @media (max-width: 767px) {
        .article-top-search {
            flex-direction: column;
            gap: 8px;
        }

        .article-top-search input {
            border-right: 1px solid #d8e1ef;
        }

        .article-top-search button {
            width: 100%;
            height: 40px;
        }
    }
</style>

<link rel="stylesheet" href="css/knowledge-pagination.css">
<script src="js/knowledge-pagination.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var searchInput = document.getElementById("articleSearchInput");
        var searchBtn = document.getElementById("articleSearchBtn");
        var checks = Array.prototype.slice.call(document.querySelectorAll(".article-cat"));
        var cards = Array.prototype.slice.call(document.querySelectorAll("#articleGrid .article-card"));
        var cols = cards.map(function (card) { return card.closest(".col-lg-4"); });
        var pager = window.createKbPagination({
            container: "#articleGrid",
            itemSelector: "div.col-lg-4",
            perPage: 9,
            navTarget: "#articlePagination"
        });

        function passesCategory(card) {
            var selected = checks.filter(function (c) { return c.checked; }).map(function (c) { return c.value; });
            if (!selected.length) return true;
            return selected.indexOf(card.getAttribute("data-category")) >= 0;
        }

        function passesText(card, q) {
            var txt = ((card.getAttribute("data-title") || "") + " " + (card.getAttribute("data-content") || "")).toLowerCase();
            return txt.indexOf(q) >= 0;
        }

        function applyFilters() {
            var q = (searchInput.value || "").trim().toLowerCase();
            cards.forEach(function (card, idx) {
                var show = passesCategory(card) && passesText(card, q);
                if (pager && cols[idx]) {
                    pager.setMatch(cols[idx], show);
                }
            });
            if (pager) {
                pager.resetPage();
            }
        }

        if (searchInput) {
            searchInput.addEventListener("input", applyFilters);
        }
        if (searchBtn) {
            searchBtn.addEventListener("click", applyFilters);
        }
        checks.forEach(function (c) {
            c.addEventListener("change", applyFilters);
        });
    });
</script>

<?php include "footer.php"; ?>
