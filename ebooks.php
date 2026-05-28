<?php
require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('ebooks');
$kbBanner['title_html'] = 'A Digital Library <strong>Built for Technology Teams</strong>';
$kbBanner['title'] = '';
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<section class="eb-library pad-tb">
    <div class="container">
        <div class="row align-items-center mb20">
            <div class="col-lg-8"></div>
            <div class="col-lg-4 text-lg-right">
                <button type="button" class="eb-filter-btn" id="ebFilterToggle" aria-expanded="false" aria-controls="ebFilterPanel">
                    <i class="fas fa-sliders-h"></i> Filter
                </button>
            </div>
        </div>

        <div class="eb-filter-panel" id="ebFilterPanel" hidden>
            <p class="eb-filter-label">Filter by category</p>
            <div class="eb-filter-options">
                <label><input type="checkbox" class="eb-cat-check" value="all" checked> All</label>
                <label><input type="checkbox" class="eb-cat-check" value="marketing"> Marketing</label>
                <label><input type="checkbox" class="eb-cat-check" value="web"> Web Development</label>
                <label><input type="checkbox" class="eb-cat-check" value="mobility"> Mobility</label>
                <label><input type="checkbox" class="eb-cat-check" value="cloud"> Cloud</label>
                <label><input type="checkbox" class="eb-cat-check" value="ecommerce"> Ecommerce</label>
            </div>
            <button type="button" class="eb-filter-apply" id="ebFilterApply">Apply</button>
        </div>

        <div class="row eb-grid" id="ebookGrid">
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="mobility">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/cation_7.jpg" alt="Sectors that benefit from workplace mobility">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">Sectors That Will Benefit from <span>WORKPLACE MOBILITY</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">Sectors That Will Benefit from Workplace Mobility</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="marketing">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/cation_8.jpg" alt="How to write content that ranks well">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">How To Write <span>CONTENT THAT RANK WELL</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">How To Write Content That Rank Well</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="web">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/cation_9.jpg" alt="Choosing the right outsourcing partner">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">Choosing Right <span>OUTSOURCING PARTNER</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">Choosing The Right Outsourcing Partner</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card eb-card-highlight" data-category="marketing">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/data_5.jpg" alt="10 ways to market your app for free">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">10 Ways to <span>MARKET YOUR APP FOR FREE</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">10 Ways To Market Your App For Free</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="cloud">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/data_4.jpg" alt="Cloud transformation governance handbook">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">Cloud Transformation <span>GOVERNANCE HANDBOOK</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">Cloud Transformation Governance Handbook</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="web">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/data_6.jpg" alt="Product-led engineering guide">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">Product-Led <span>ENGINEERING GUIDE</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">Practical Guide to Product-Led Engineering</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="web">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/data_7.jpg" alt="API security essentials">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">API Security <span>ESSENTIALS</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">API Security Essentials for Modern Platforms</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="marketing">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/data_8.jpg" alt="UX research playbook">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">UX Research <span>PLAYBOOK</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">UX Research Playbook for Product Teams</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="web">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/data_9.jpg" alt="Agile delivery handbook">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">Agile Delivery <span>HANDBOOK</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">Agile Delivery Handbook for Distributed Teams</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="cloud">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/cont_2.jpg" alt="Data governance starter guide">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">Data Governance <span>STARTER GUIDE</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">Data Governance Starter Guide for Analytics Leaders</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="web">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/cont_3.jpg" alt="Sitefinity implementation guide">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">Sitefinity <span>IMPLEMENTATION GUIDE</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">Sitefinity Implementation Guide for Enterprise Portals</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="marketing">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/cation_5.jpg" alt="Customer success operations">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">Customer Success <span>OPERATIONS</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">Customer Success Operations for SaaS Growth</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="ecommerce">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/cation_6.jpg" alt="Magento B2B commerce guide">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">Magento B2B <span>COMMERCE GUIDE</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">Magento B2B Commerce Implementation Guide</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="ecommerce">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/audit_1.jpg" alt="Headless commerce ROI guide">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">Headless Commerce <span>ROI GUIDE</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">Headless Commerce ROI Assessment Guide</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="mobility">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/ios_1.jpg" alt="Mobile app release readiness">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">Mobile App <span>RELEASE READINESS</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">Mobile App Release Readiness Checklist</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="eb-card" data-category="cloud">
                    <a href="contact-us.php" class="eb-card-link">
                        <div class="eb-card-shell">
                            <div class="eb-cover">
                            <img src="images/about_2/web_2.jpg" alt="Multi-cloud cost optimization">
                            <img src="images/logo/sanguine-logo2.png" alt="SanguineIT" class="eb-brand-logo">
                            <div class="eb-cover-band">
                                <p class="eb-cover-title">Multi-Cloud <span>COST OPTIMIZATION</span></p>
                                <span class="eb-corner-fold" aria-hidden="true"></span>
                            </div>
                        </div>
                        </div>
                        <h4 class="eb-title">Multi-Cloud Cost Optimization Playbook</h4>
                    </a>
                </article>
            </div>
        </div>
    </div>
</section>

<style>
    .eb-library {
        background: #fff;
    }

    .eb-filter-btn {
        border: 1px solid #b7c1cf;
        background: #fff;
        color: #1a2f4a;
        font-weight: 600;
        padding: 8px 18px;
        cursor: pointer;
        font-size: 14px;
    }

    .eb-filter-btn i {
        margin-right: 6px;
    }

    .eb-filter-panel {
        background: #f8fafc;
        border: 1px solid #d7dce4;
        padding: 16px 18px;
        margin-bottom: 20px;
    }

    .eb-filter-panel[hidden] {
        display: none;
    }

    .eb-filter-label {
        margin: 0 0 10px;
        font-weight: 700;
        color: #1a2f4a;
        font-size: 14px;
    }

    .eb-filter-options {
        display: flex;
        flex-wrap: wrap;
        gap: 10px 18px;
        margin-bottom: 12px;
        font-size: 14px;
    }

    .eb-filter-options label {
        display: flex;
        align-items: center;
        gap: 6px;
        margin: 0;
        cursor: pointer;
        color: #334155;
    }

    .eb-filter-apply {
        border: 0;
        background: #27466b;
        color: #fff;
        padding: 7px 16px;
        font-weight: 600;
        cursor: pointer;
        font-size: 13px;
    }

    .eb-card {
        height: 100%;
    }

    .eb-card-link {
        display: block;
        color: inherit;
        text-decoration: none;
    }

    .eb-card-link:hover {
        text-decoration: none;
        color: inherit;
    }

    .eb-card-shell {
        background: #fff;
        padding: 14px 14px 12px;
        border-radius: 2px;
        box-shadow: 0 2px 12px rgba(26, 47, 74, 0.1);
        transition: box-shadow 0.25s ease, transform 0.25s ease;
    }

    .eb-card:hover .eb-card-shell {
        box-shadow: 0 6px 20px rgba(26, 47, 74, 0.15);
        transform: translateY(-2px);
    }

    .eb-cover {
        position: relative;
        display: flex;
        flex-direction: column;
        aspect-ratio: 3 / 4;
        width: 100%;
        max-width: 220px;
        margin: 0 auto;
        overflow: hidden;
        background: #fff;
    }

    .eb-cover > img:first-of-type {
        width: 100%;
        flex: 1 1 58%;
        min-height: 0;
        object-fit: cover;
        display: block;
    }

    .eb-brand-logo {
        position: absolute;
        top: 10px;
        right: 10px;
        max-height: 20px;
        max-width: 72px;
        width: auto;
        object-fit: contain;
        z-index: 2;
    }

    .eb-cover-band {
        position: relative;
        flex: 0 0 42%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #163a5f;
        border-top: 3px solid #e31f2b;
        padding: 10px 12px 16px;
        overflow: hidden;
        text-align: center;
    }

    .eb-cover-band::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 28px;
        background:
            linear-gradient(90deg, transparent 0%, rgba(120, 180, 220, 0.15) 20%, transparent 40%),
            repeating-linear-gradient(
                90deg,
                rgba(100, 160, 210, 0.12) 0,
                rgba(100, 160, 210, 0.12) 1px,
                transparent 1px,
                transparent 6px
            ),
            repeating-linear-gradient(
                0deg,
                rgba(100, 160, 210, 0.08) 0,
                rgba(100, 160, 210, 0.08) 1px,
                transparent 1px,
                transparent 8px
            );
        pointer-events: none;
    }

    .eb-cover-title {
        margin: 0;
        color: #fff;
        font-size: 10px;
        line-height: 1.35;
        font-weight: 500;
        position: relative;
        z-index: 1;
        padding: 0 8px 4px;
        max-width: 100%;
    }

    .eb-cover-title span {
        display: block;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.5px;
        margin-top: 4px;
        line-height: 1.25;
        text-transform: uppercase;
    }

    .eb-corner-fold {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 0;
        height: 0;
        z-index: 3;
        border-style: solid;
        border-width: 0 0 34px 34px;
        border-color: transparent transparent #e31f2b transparent;
        filter: drop-shadow(-2px -2px 3px rgba(0, 0, 0, 0.22));
    }

    .eb-title {
        font-size: 14px;
        line-height: 1.45;
        margin: 12px 0 0;
        padding: 0 4px;
        color: #1a3e67;
        font-weight: 700;
        text-align: left;
        max-width: 220px;
        margin-left: auto;
        margin-right: auto;
    }

    .eb-card-highlight .eb-title {
        color: #e31f2b;
    }

    @media (max-width: 991px) {
        .text-lg-right {
            text-align: left !important;
        }
    }

    @media (max-width: 767px) {
        .eb-cover {
            max-width: 100%;
        }
    }
</style>

<link rel="stylesheet" href="css/knowledge-pagination.css">
<script src="js/knowledge-pagination.js"></script>
<script>
    (function () {
        var filterToggle = document.getElementById("ebFilterToggle");
        var filterPanel = document.getElementById("ebFilterPanel");
        var filterApply = document.getElementById("ebFilterApply");
        var checks = Array.prototype.slice.call(document.querySelectorAll(".eb-cat-check"));
        var cols = Array.prototype.slice.call(document.querySelectorAll("#ebookGrid > div"));
        var cards = cols.map(function (col) { return col.querySelector(".eb-card"); });
        var pager = window.createKbPagination({ container: "#ebookGrid", itemSelector: "> div", perPage: 8 });

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
