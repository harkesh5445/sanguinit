<?php
require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('whitepapers');
$kbBanner['title_html'] = 'Enterprise Research for <strong>Confident Decision-Making</strong>';
$kbBanner['title'] = '';
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<section class="wp-library pad-tb">
    <div class="container">
        <div class="row align-items-center mb20">
            <div class="col-lg-8"></div>
            <div class="col-lg-4 text-lg-right">
                <button type="button" class="wp-filter-btn" id="wpFilterToggle" aria-expanded="false" aria-controls="wpFilterPanel">
                    <i class="fas fa-sliders-h"></i> Filter
                </button>
            </div>
        </div>

        <div class="wp-filter-panel" id="wpFilterPanel" hidden>
            <p class="wp-filter-label">Filter by category</p>
            <div class="wp-filter-options">
                <label><input type="checkbox" class="wp-cat-check" value="all" checked> All</label>
                <label><input type="checkbox" class="wp-cat-check" value="ecommerce"> Ecommerce</label>
                <label><input type="checkbox" class="wp-cat-check" value="sitefinity"> Sitefinity</label>
                <label><input type="checkbox" class="wp-cat-check" value="cloud"> Cloud</label>
                <label><input type="checkbox" class="wp-cat-check" value="security"> Security</label>
                <label><input type="checkbox" class="wp-cat-check" value="research"> Research</label>
                <label><input type="checkbox" class="wp-cat-check" value="compliance"> Compliance</label>
                <label><input type="checkbox" class="wp-cat-check" value="strategy"> Strategy</label>
            </div>
            <button type="button" class="wp-filter-apply" id="wpFilterApply">Apply</button>
        </div>

        <div class="row wp-grid" id="whitepaperGrid">
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="ecommerce">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/audit_1.jpg" alt="How you can enhance your online business with Magento">
                        </div>
                        <h4>How You can Enhance Your Online Business with Magento</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="sitefinity">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/audit_2.jpg" alt="Understanding the specialized capabilities of Sitefinity">
                        </div>
                        <h4>Understanding the Specialized Capabilities of Sitefinity</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="cloud">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/audit_3.jpg" alt="Total cost of ownership legacy vs cloud-native">
                        </div>
                        <h4>Total Cost of Ownership: Legacy vs Cloud-Native</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="compliance">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/audit_4.jpg" alt="Governance patterns for regulated SaaS platforms">
                        </div>
                        <h4>Governance Patterns for Regulated SaaS Platforms</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="research">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/data_7.jpg" alt="AI-assisted engineering risks guardrails and ROI">
                        </div>
                        <h4>AI-Assisted Engineering: Risks, Guardrails, and ROI</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="strategy">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/data_8.jpg" alt="Enterprise resilience blueprint for digital platforms">
                        </div>
                        <h4>Enterprise Resilience Blueprint for Digital Platforms</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="cloud">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/data_9.jpg" alt="Multi-cloud cost optimization framework">
                        </div>
                        <h4>Multi-Cloud Cost Optimization Framework</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="strategy">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/cation_5.jpg" alt="API platform maturity model for enterprise integration">
                        </div>
                        <h4>API Platform Maturity Model for Enterprise Integration</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="compliance">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/cation_6.jpg" alt="Data privacy compliance playbook for global SaaS">
                        </div>
                        <h4>Data Privacy Compliance Playbook for Global SaaS</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="research">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/cation_7.jpg" alt="Platform engineering operating model">
                        </div>
                        <h4>Platform Engineering Operating Model</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="security">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/cation_8.jpg" alt="Observability strategy for mission-critical applications">
                        </div>
                        <h4>Observability Strategy for Mission-Critical Applications</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="ecommerce">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/cation_9.jpg" alt="Headless commerce ROI assessment guide">
                        </div>
                        <h4>Headless Commerce ROI Assessment Guide</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="security">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/cont_2.jpg" alt="Identity modernization roadmap for enterprise IAM">
                        </div>
                        <h4>Identity Modernization Roadmap for Enterprise IAM</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="research">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/cont_3.jpg" alt="Legacy modernization business case toolkit">
                        </div>
                        <h4>Legacy Modernization Business Case Toolkit</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="sitefinity">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/data_4.jpg" alt="Sitefinity upgrade readiness and migration planning">
                        </div>
                        <h4>Sitefinity Upgrade Readiness and Migration Planning</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="wp-card" data-category="ecommerce">
                    <a href="contact-us.php" class="wp-card-link">
                        <div class="wp-card-thumb">
                            <img src="images/about_2/data_5.jpg" alt="B2B commerce platform selection guide">
                        </div>
                        <h4>B2B Commerce Platform Selection Guide</h4>
                    </a>
                </article>
            </div>
        </div>
    </div>
</section>

<style>
    .wp-library {
        background: #fff;
    }

    .wp-filter-btn {
        border: 1px solid #b7c1cf;
        background: #fff;
        color: #1a2f4a;
        font-weight: 600;
        padding: 8px 18px;
        cursor: pointer;
        font-size: 14px;
    }

    .wp-filter-btn i {
        margin-right: 6px;
    }

    .wp-filter-panel {
        background: #f8fafc;
        border: 1px solid #d7dce4;
        padding: 16px 18px;
        margin-bottom: 20px;
    }

    .wp-filter-panel[hidden] {
        display: none;
    }

    .wp-filter-label {
        margin: 0 0 10px;
        font-weight: 700;
        color: #1a2f4a;
        font-size: 14px;
    }

    .wp-filter-options {
        display: flex;
        flex-wrap: wrap;
        gap: 10px 18px;
        margin-bottom: 12px;
        font-size: 14px;
    }

    .wp-filter-options label {
        display: flex;
        align-items: center;
        gap: 6px;
        margin: 0;
        cursor: pointer;
        color: #334155;
    }

    .wp-filter-apply {
        border: 0;
        background: #27466b;
        color: #fff;
        padding: 7px 16px;
        font-weight: 600;
        cursor: pointer;
        font-size: 13px;
    }

    .wp-card {
        background: #fff;
        border: 1px solid #e8ecf1;
        box-shadow: 0 2px 10px rgba(26, 47, 74, 0.07);
        height: 100%;
        transition: box-shadow 0.25s ease, transform 0.25s ease;
    }

    .wp-card:hover {
        box-shadow: 0 8px 22px rgba(26, 47, 74, 0.12);
        transform: translateY(-2px);
    }

    .wp-card-link {
        display: block;
        color: inherit;
        text-decoration: none;
    }

    .wp-card-link:hover {
        text-decoration: none;
        color: inherit;
    }

    .wp-card-thumb {
        overflow: hidden;
        background: #eef2f7;
    }

    .wp-card-thumb img {
        width: 100%;
        height: 175px;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
    }

    .wp-card:hover .wp-card-thumb img {
        transform: scale(1.02);
    }

    .wp-card h4 {
        font-size: 15px;
        line-height: 1.4;
        margin: 0;
        padding: 12px 14px 14px;
        color: #1a3e67;
        font-weight: 700;
    }

    @media (max-width: 991px) {
        .text-lg-right {
            text-align: left !important;
        }
    }

    @media (max-width: 767px) {
        .wp-card-thumb img {
            height: 160px;
        }
    }
</style>

<link rel="stylesheet" href="css/knowledge-pagination.css">
<script src="js/knowledge-pagination.js"></script>
<script>
    (function () {
        var filterToggle = document.getElementById("wpFilterToggle");
        var filterPanel = document.getElementById("wpFilterPanel");
        var filterApply = document.getElementById("wpFilterApply");
        var checks = Array.prototype.slice.call(document.querySelectorAll(".wp-cat-check"));
        var cols = Array.prototype.slice.call(document.querySelectorAll("#whitepaperGrid > div"));
        var cards = cols.map(function (col) { return col.querySelector(".wp-card"); });
        var pager = window.createKbPagination({ container: "#whitepaperGrid", itemSelector: "> div", perPage: 8 });

        filterToggle.addEventListener("click", function () {
            var open = filterPanel.hasAttribute("hidden");
            if (open) {
                filterPanel.removeAttribute("hidden");
                filterToggle.setAttribute("aria-expanded", "true");
            } else {
                filterPanel.setAttribute("hidden", "");
                filterToggle.setAttribute("aria-expanded", "false");
            }
        });

        function applyCategoryFilters() {
            var selected = checks.filter(function (c) { return c.checked && c.value !== "all"; }).map(function (c) { return c.value; });
            var showAll = checks.some(function (c) { return c.value === "all" && c.checked; }) || !selected.length;

            cards.forEach(function (card, idx) {
                var cat = card.getAttribute("data-category") || "";
                var match = showAll || selected.indexOf(cat) >= 0;
                if (pager && cols[idx]) {
                    pager.setMatch(cols[idx], match);
                }
            });
            if (pager) {
                pager.resetPage();
            }
        }

        checks.forEach(function (check) {
            check.addEventListener("change", function () {
                if (check.value === "all" && check.checked) {
                    checks.forEach(function (c) {
                        if (c.value !== "all") {
                            c.checked = false;
                        }
                    });
                } else if (check.value !== "all" && check.checked) {
                    checks.forEach(function (c) {
                        if (c.value === "all") {
                            c.checked = false;
                        }
                    });
                }
            });
        });

        filterApply.addEventListener("click", function () {
            applyCategoryFilters();
            filterPanel.setAttribute("hidden", "");
            filterToggle.setAttribute("aria-expanded", "false");
        });
    })();
</script>

<?php include "footer.php"; ?>
