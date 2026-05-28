<?php
require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('news-events');
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<section class="news-reference-section pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <h2 class="news-page-title">SEARCH PRESS RELEASES</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <aside class="news-filter-panel">
                    <div class="news-filter-head">Filter by Category</div>
                    <div class="news-filter-body" id="newsFilterBox">
                        <label><input type="checkbox" class="news-cat" value="award"> Award News</label>
                        <label><input type="checkbox" class="news-cat" value="infrastructure"> Infrastructure News</label>
                        <label><input type="checkbox" class="news-cat" value="other"> Other News</label>
                        <label><input type="checkbox" class="news-cat" value="partnership"> Partnership News</label>
                        <label><input type="checkbox" class="news-cat" value="project"> Project Launched News</label>
                        <label><input type="checkbox" class="news-cat" value="technology"> Technology News</label>
                    </div>
                    <div class="news-filter-foot"></div>
                </aside>
            </div>

            <div class="col-lg-9">
                <div class="news-search-row">
                    <input type="text" id="newsSearchInput" placeholder="Search all press releases">
                    <button type="button" id="newsSearchBtn">Search</button>
                </div>

                <div id="newsListWrap">
                    <article class="news-item" data-category="technology" data-title="Adobe November 2025 Security Update Fixes Critical InDesign Vulnerabilities (APSB25-106)" data-content="Adobe security bulletin APSB25-106 addressing critical InDesign vulnerabilities for enterprise design teams.">
                        <img src="images/about_2/cont_4.jpg" alt="Adobe November 2025 security update">
                        <div class="news-item-content">
                            <h4>Adobe November 2025 Security Update Fixes Critical InDesign Vulnerabilities (APSB25-106)</h4>
                            <p class="news-date">November 14, 2025</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="technology" data-title="Progress Sitefinity Alert: CVE-2025-3600 Exploit Released — Patch Immediately" data-content="Security alert and mitigation guidance for enterprise CMS deployments.">
                        <img src="images/about_2/data_7.jpg" alt="Progress sitefinity security alert">
                        <div class="news-item-content">
                            <h4>Progress Sitefinity Alert: CVE-2025-3600 Exploit Released — Patch Immediately</h4>
                            <p class="news-date">October 23, 2025</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="technology" data-title="Adobe October 2025 Security Update: Critical Patches Released for Commerce and Magento" data-content="Critical patch bulletin for Adobe Commerce and Magento platform security.">
                        <img src="images/about_2/data_8.jpg" alt="Adobe october 2025 security update">
                        <div class="news-item-content">
                            <h4>Adobe October 2025 Security Update: Critical Patches Released for Commerce and Magento</h4>
                            <p class="news-date">October 23, 2025</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="technology" data-title="Adobe Commerce - APSB25-08: Uncovering Details about this Security Update" data-content="Important release note and actionable security recommendations for Adobe Commerce stores.">
                        <img src="images/about_2/data_9.jpg" alt="Adobe commerce security update details">
                        <div class="news-item-content">
                            <h4>Adobe Commerce - APSB25-08: Uncovering Details about this Security Update</h4>
                            <p class="news-date">February 13, 2025</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="partnership" data-title="Strategic Partnership Announced with Leading Cloud Alliance" data-content="New partnership to accelerate cloud modernization and managed platform delivery.">
                        <img src="images/about_2/cation_8.jpg" alt="Strategic cloud partnership announcement">
                        <div class="news-item-content">
                            <h4>Strategic Partnership Announced with Leading Cloud Alliance</h4>
                            <p class="news-date">January 10, 2025</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="project" data-title="Enterprise Transformation Program Successfully Delivered" data-content="Major enterprise rollout completed with improved uptime, user experience, and governance controls.">
                        <img src="images/about_2/cation_9.jpg" alt="Enterprise transformation project delivered">
                        <div class="news-item-content">
                            <h4>Enterprise Transformation Program Successfully Delivered</h4>
                            <p class="news-date">December 04, 2024</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="award" data-title="SanguineIT Recognized for Excellence in Digital Delivery" data-content="Industry award honoring consistent delivery quality and client satisfaction across enterprise programs.">
                        <img src="images/about_2/cation_5.jpg" alt="Excellence in digital delivery award">
                        <div class="news-item-content">
                            <h4>SanguineIT Recognized for Excellence in Digital Delivery</h4>
                            <p class="news-date">November 18, 2024</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="infrastructure" data-title="New Regional Delivery Center Opens to Support Global Clients" data-content="Expanded infrastructure capacity to improve nearshore collaboration and platform operations.">
                        <img src="images/about_2/cation_6.jpg" alt="Regional delivery center opening">
                        <div class="news-item-content">
                            <h4>New Regional Delivery Center Opens to Support Global Clients</h4>
                            <p class="news-date">October 30, 2024</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="technology" data-title="SharePoint Online Migration Toolkit Released for Enterprise Teams" data-content="New toolkit accelerates tenant migrations with governance templates and validation workflows.">
                        <img src="images/about_2/Share_2.jpg" alt="SharePoint online migration toolkit">
                        <div class="news-item-content">
                            <h4>SharePoint Online Migration Toolkit Released for Enterprise Teams</h4>
                            <p class="news-date">September 22, 2024</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="partnership" data-title="Magento Commerce Partner Program Milestone Achieved" data-content="Partnership milestone expands commerce implementation capacity for B2B and B2C clients.">
                        <img src="images/about_2/cont_3.jpg" alt="Magento commerce partner milestone">
                        <div class="news-item-content">
                            <h4>Magento Commerce Partner Program Milestone Achieved</h4>
                            <p class="news-date">August 14, 2024</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="project" data-title="Healthcare Portal Modernization Goes Live Across 12 Locations" data-content="Multi-site healthcare portal rollout improves patient access and operational reporting.">
                        <img src="images/about_2/data_4.jpg" alt="Healthcare portal modernization launch">
                        <div class="news-item-content">
                            <h4>Healthcare Portal Modernization Goes Live Across 12 Locations</h4>
                            <p class="news-date">July 09, 2024</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="other" data-title="Annual Technology Summit Announced for Enterprise Leaders" data-content="Summit agenda includes cloud strategy, AI governance, and platform engineering best practices.">
                        <img src="images/about_2/data_5.jpg" alt="Annual technology summit announcement">
                        <div class="news-item-content">
                            <h4>Annual Technology Summit Announced for Enterprise Leaders</h4>
                            <p class="news-date">June 21, 2024</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="technology" data-title="Zero Trust Security Framework Published for SaaS Platforms" data-content="Security framework helps teams implement identity, segmentation, and monitoring controls.">
                        <img src="images/about_2/data_6.jpg" alt="Zero trust security framework publication">
                        <div class="news-item-content">
                            <h4>Zero Trust Security Framework Published for SaaS Platforms</h4>
                            <p class="news-date">May 17, 2024</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="infrastructure" data-title="Managed Cloud Operations Expanded with 24x7 SRE Coverage" data-content="Expanded SRE support improves incident response and platform reliability for mission-critical workloads.">
                        <img src="images/about_2/web_2.jpg" alt="Managed cloud operations expansion">
                        <div class="news-item-content">
                            <h4>Managed Cloud Operations Expanded with 24x7 SRE Coverage</h4>
                            <p class="news-date">April 03, 2024</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="award" data-title="Top Workplace Recognition for Engineering Culture and Growth" data-content="Award highlights investment in learning programs, mentorship, and delivery excellence.">
                        <img src="images/about_2/ios_1.jpg" alt="Top workplace recognition">
                        <div class="news-item-content">
                            <h4>Top Workplace Recognition for Engineering Culture and Growth</h4>
                            <p class="news-date">March 11, 2024</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="other" data-title="Customer Advisory Board Launched for Product Roadmap Input" data-content="Advisory board enables enterprise clients to shape platform capabilities and service priorities.">
                        <img src="images/about_2/word_5.jpg" alt="Customer advisory board launch">
                        <div class="news-item-content">
                            <h4>Customer Advisory Board Launched for Product Roadmap Input</h4>
                            <p class="news-date">February 08, 2024</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>

                    <article class="news-item" data-category="technology" data-title="Sitefinity 15 Upgrade Playbook Now Available for Enterprises" data-content="Upgrade playbook includes readiness assessments, migration sequencing, and post-go-live validation.">
                        <img src="images/about_2/cont_7.jpg" alt="Sitefinity 15 upgrade playbook">
                        <div class="news-item-content">
                            <h4>Sitefinity 15 Upgrade Playbook Now Available for Enterprises</h4>
                            <p class="news-date">January 19, 2024</p>
                        </div>
                        <a href="contact-us.php" class="news-read-btn">Read More</a>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .news-reference-section {
        background: #f5f7fb;
        padding-top: 55px;
    }

    .news-page-title {
        font-size: 30px;
        margin-bottom: 18px;
    }

    .news-filter-panel {
        border: 1px solid #d8e1ef;
        background: #fff;
    }

    .news-filter-head {
        background: #1e3f66;
        color: #fff;
        padding: 10px 12px;
        font-weight: 700;
    }

    .news-filter-body {
        padding: 12px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        font-size: 14px;
    }

    .news-filter-body label {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .news-filter-foot {
        height: 24px;
        background: #1e3f66;
    }

    .news-search-row {
        display: flex;
        margin-bottom: 12px;
    }

    .news-search-row input {
        flex: 1;
        height: 44px;
        border: 1px solid #d8e1ef;
        border-right: 0;
        padding: 0 12px;
        background: #fff;
    }

    .news-search-row button {
        width: 120px;
        border: 0;
        background: #e31f2b;
        color: #fff;
        font-weight: 700;
        cursor: pointer;
    }

    .news-item {
        display: flex;
        gap: 16px;
        align-items: center;
        background: #fff;
        border: 1px solid #d8e1ef;
        padding: 10px;
        margin-bottom: 10px;
    }

    .news-item img {
        width: 190px;
        min-width: 190px;
        height: 95px;
        object-fit: cover;
        display: block;
    }

    .news-item-content {
        flex: 1;
    }

    .news-item-content h4 {
        font-size: 27px;
        margin-bottom: 8px;
        line-height: 1.3;
    }

    .news-date {
        margin: 0;
        color: #111;
        font-size: 14px;
        font-weight: 600;
    }

    .news-read-btn {
        min-width: 92px;
        text-align: center;
        background: #24496f;
        color: #fff;
        padding: 8px 10px;
        border-radius: 2px;
        font-size: 13px;
        font-weight: 700;
    }

    @media (max-width: 991px) {
        .news-filter-panel {
            margin-bottom: 16px;
        }

        .news-reference-section {
            padding-top: 40px;
        }
    }

    @media (max-width: 767px) {
        .news-search-row {
            flex-direction: column;
            gap: 8px;
        }

        .news-search-row input {
            border-right: 1px solid #d8e1ef;
        }

        .news-search-row button {
            width: 100%;
            height: 42px;
        }

        .news-item {
            flex-direction: column;
            align-items: flex-start;
        }

        .news-item img {
            width: 100%;
            min-width: 100%;
            height: 170px;
        }

        .news-read-btn {
            width: 100%;
        }
    }
</style>

<link rel="stylesheet" href="css/knowledge-pagination.css">
<script src="js/knowledge-pagination.js"></script>
<script>
    (function () {
        var searchInput = document.getElementById("newsSearchInput");
        var searchBtn = document.getElementById("newsSearchBtn");
        var checks = Array.prototype.slice.call(document.querySelectorAll(".news-cat"));
        var items = Array.prototype.slice.call(document.querySelectorAll("#newsListWrap .news-item"));
        var pager = window.createKbPagination({ container: "#newsListWrap", itemSelector: ".news-item", perPage: 6 });

        function passesCategory(item) {
            var selected = checks.filter(function (c) { return c.checked; }).map(function (c) { return c.value; });
            if (!selected.length) return true;
            return selected.indexOf(item.getAttribute("data-category")) >= 0;
        }

        function passesText(item, query) {
            var text = ((item.getAttribute("data-title") || "") + " " + (item.getAttribute("data-content") || "")).toLowerCase();
            return text.indexOf(query) >= 0;
        }

        function applyFilters() {
            var q = (searchInput.value || "").trim().toLowerCase();
            items.forEach(function (item) {
                var show = passesCategory(item) && passesText(item, q);
                if (pager) pager.setMatch(item, show);
            });
            if (pager) pager.resetPage();
        }

        searchInput.addEventListener("input", applyFilters);
        searchBtn.addEventListener("click", applyFilters);
        checks.forEach(function (c) { c.addEventListener("change", applyFilters); });
    })();
</script>

<?php include "footer.php"; ?>
