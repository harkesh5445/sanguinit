/**
 * Open #quote-popup for desktop nav, mobile off-canvas menu, and KB CTAs.
 * hcOffcanvasNav clones #main-nav — Bootstrap data-toggle does not bind to clones.
 */
(function ($) {
    'use strict';

    function closeMobileNav() {
        if (!$('body').hasClass('hc-nav-open')) {
            return;
        }
        var $toggle = $('.hc-nav-trigger.toggle-open');
        if ($toggle.length) {
            $toggle.trigger('click');
        }
    }

    function openQuotePopup() {
        var $modal = $('#quote-popup');
        if (!$modal.length || typeof $modal.modal !== 'function') {
            return;
        }
        closeMobileNav();
        setTimeout(function () {
            $modal.modal('show');
            $('body').addClass('quote-modal-open');
            var $first = $modal.find('input[name="name"]');
            if ($first.length && window.matchMedia('(max-width: 991px)').matches) {
                setTimeout(function () {
                    $first.trigger('focus');
                }, 400);
            }
        }, 50);
    }

    $(document).on('hidden.bs.modal', '#quote-popup', function () {
        $('body').removeClass('quote-modal-open');
    });

    /* Capture phase: run before hc-offcanvas nav handles the click */
    document.addEventListener('click', function (e) {
        var btn = e.target.closest('.mob-nav-quote-btn');
        if (!btn) {
            return;
        }
        e.preventDefault();
        e.stopPropagation();
        openQuotePopup();
    }, true);

    $(document).on('click', '#requestQuoteBtn', function (e) {
        e.preventDefault();
        openQuotePopup();
    });

    $(document).on('click', 'a[data-target="#quote-popup"]', function (e) {
        if ($(this).hasClass('mob-nav-quote-btn') || $(this).attr('id') === 'requestQuoteBtn') {
            return;
        }
        e.preventDefault();
        openQuotePopup();
    });
})(jQuery);
