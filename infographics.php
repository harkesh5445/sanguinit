<?php
require_once __DIR__ . '/includes/kb-banner-config.php';
include 'header.php';

$kbBanner = kb_get_banner_config('infographics');
include __DIR__ . '/includes/kb-premium-banner.php';
?>

<section class="info-library pad-tb">
    <div class="container">
        <div class="row align-items-center mb20">
            <div class="col-lg-8"></div>
            <div class="col-lg-4 text-lg-right">
                <button type="button" class="info-filter-btn" id="infoFilterToggle" aria-expanded="false" aria-controls="infoFilterPanel">
                    <i class="fas fa-sliders-h"></i> Filter
                </button>
            </div>
        </div>

        <div class="info-filter-panel" id="infoFilterPanel" hidden>
            <p class="info-filter-label">Filter by category</p>
            <div class="info-filter-options">
                <label><input type="checkbox" class="info-cat-check" value="all" checked> All</label>
                <label><input type="checkbox" class="info-cat-check" value="web"> Web Development</label>
                <label><input type="checkbox" class="info-cat-check" value="mobile"> Mobile Apps</label>
                <label><input type="checkbox" class="info-cat-check" value="ecommerce"> Ecommerce</label>
                <label><input type="checkbox" class="info-cat-check" value="lms"> LMS</label>
                <label><input type="checkbox" class="info-cat-check" value="cloud"> Cloud &amp; DevOps</label>
                <label><input type="checkbox" class="info-cat-check" value="security"> Security</label>
                <label><input type="checkbox" class="info-cat-check" value="company"> Company</label>
            </div>
            <button type="button" class="info-filter-apply" id="infoFilterApply">Apply</button>
        </div>

        <div class="row info-grid" id="infoGrid">
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="lms">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/data_1.jpg" alt="LMS best option for organizations amid COVID-19">
                        </div>
                        <h4>LMS- The Best Option for Organizations Amid COVID-19</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="ecommerce">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/data_2.jpg" alt="Boost sales of a Magento ecommerce store">
                        </div>
                        <h4>Boost Sales of a Magento Ecommerce Store</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="company">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/data_3.jpg" alt="Fast facts about SanguineIT">
                        </div>
                        <h4>Fast Facts About SanguineIT</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="web">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/data_4.jpg" alt="Different phases of web development">
                        </div>
                        <h4>Different Phases of Web Development</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="cloud">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/data_5.jpg" alt="Digital transformation maturity model">
                        </div>
                        <h4>Digital Transformation Maturity Model</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="security">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/data_6.jpg" alt="Incident response timeline blueprint">
                        </div>
                        <h4>Incident Response Timeline Blueprint</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="web">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/data_7.jpg" alt="Modern application delivery lifecycle">
                        </div>
                        <h4>Modern Application Delivery Lifecycle</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="cloud">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/data_8.jpg" alt="Cloud cost and governance control map">
                        </div>
                        <h4>Cloud Cost and Governance Control Map</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="security">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/data_9.jpg" alt="Cyber resilience executive scorecard">
                        </div>
                        <h4>Cyber Resilience Executive Scorecard</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="mobile">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/cation_5.jpg" alt="Mobile app performance benchmark matrix">
                        </div>
                        <h4>Mobile App Performance Benchmark Matrix</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="ecommerce">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/cation_6.jpg" alt="Magento checkout optimization framework">
                        </div>
                        <h4>Magento Checkout Optimization Framework</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="lms">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/cation_7.jpg" alt="Know the benefits of using an LMS">
                        </div>
                        <h4>Know the Benefits of Using an LMS</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="web">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/cation_8.jpg" alt="SharePoint governance model for enterprises">
                        </div>
                        <h4>SharePoint Governance Model for Enterprises</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="web">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/cation_9.jpg" alt="Sitefinity content operations blueprint">
                        </div>
                        <h4>Sitefinity Content Operations Blueprint</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="security">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/cont_2.jpg" alt="DevSecOps pipeline controls map">
                        </div>
                        <h4>DevSecOps Pipeline Controls Map</h4>
                    </a>
                </article>
            </div>
            <div class="col-lg-3 col-md-6 mb25">
                <article class="info-card" data-category="company">
                    <a href="contact-us.php" class="info-card-link">
                        <div class="info-card-thumb">
                            <img src="images/about_2/cont_3.jpg" alt="Product roadmap prioritization canvas">
                        </div>
                        <h4>Product Roadmap Prioritization Canvas</h4>
                    </a>
                </article>
            </div>
        </div>
    </div>
</section>

<style>
    .info-library {
        background: #f3f3f3;
    }

    .info-filter-btn {
        border: 1px solid #b7c1cf;
        background: #fff;
        color: #1a2f4a;
        font-weight: 600;
        padding: 8px 18px;
        cursor: pointer;
        font-size: 14px;
    }

    .info-filter-btn i {
        margin-right: 6px;
    }

    .info-filter-panel {
        background: #fff;
        border: 1px solid #d7dce4;
        padding: 16px 18px;
        margin-bottom: 20px;
    }

    .info-filter-panel[hidden] {
        display: none;
    }

    .info-filter-label {
        margin: 0 0 10px;
        font-weight: 700;
        color: #1a2f4a;
        font-size: 14px;
    }

    .info-filter-options {
        display: flex;
        flex-wrap: wrap;
        gap: 10px 18px;
        margin-bottom: 12px;
        font-size: 14px;
    }

    .info-filter-options label {
        display: flex;
        align-items: center;
        gap: 6px;
        margin: 0;
        cursor: pointer;
        color: #334155;
    }

    .info-filter-apply {
        border: 0;
        background: #27466b;
        color: #fff;
        padding: 7px 16px;
        font-weight: 600;
        cursor: pointer;
        font-size: 13px;
    }

    .info-card {
        background: #fff;
        border: 1px solid #e4e8ee;
        box-shadow: 0 2px 8px rgba(26, 47, 74, 0.08);
        height: 100%;
        transition: box-shadow 0.25s ease, transform 0.25s ease;
    }

    .info-card:hover {
        box-shadow: 0 6px 18px rgba(26, 47, 74, 0.14);
        transform: translateY(-2px);
    }

    .info-card-link {
        display: block;
        color: inherit;
        text-decoration: none;
    }

    .info-card-link:hover {
        text-decoration: none;
        color: inherit;
    }

    .info-card-thumb {
        overflow: hidden;
        background: #eef2f7;
    }

    .info-card-thumb img {
        width: 100%;
        height: 175px;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
    }

    .info-card:hover .info-card-thumb img {
        transform: scale(1.03);
    }

    .info-card h4 {
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
        .info-card-thumb img {
            height: 160px;
        }
    }
</style>

<link rel="stylesheet" href="css/knowledge-pagination.css">
<script src="js/knowledge-pagination.js"></script>
<script>
    (function () {
        var filterToggle = document.getElementById("infoFilterToggle");
        var filterPanel = document.getElementById("infoFilterPanel");
        var filterApply = document.getElementById("infoFilterApply");
        var checks = Array.prototype.slice.call(document.querySelectorAll(".info-cat-check"));
        var cols = Array.prototype.slice.call(document.querySelectorAll("#infoGrid > div"));
        var cards = cols.map(function (col) { return col.querySelector(".info-card"); });
        var pager = window.createKbPagination({ container: "#infoGrid", itemSelector: "> div", perPage: 8 });

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
