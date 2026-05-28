(function () {
  function createKbPagination(cfg) {
    var container = document.querySelector(cfg.container);
    if (!container) return null;

    var itemSelector = cfg.itemSelector;
    var per = cfg.perPage || 6;
    var currentPage = 1;
    var nav = document.createElement("div");
    nav.className = "kb-pagination";
    var navTarget = cfg.navTarget ? document.querySelector(cfg.navTarget) : null;
    if (navTarget) {
      navTarget.appendChild(nav);
    } else if (container.parentNode) {
      container.parentNode.insertBefore(nav, container.nextSibling);
    }

    function getItems() {
      return Array.prototype.slice.call(container.querySelectorAll(itemSelector));
    }

    function getEligible() {
      return getItems().filter(function (el) {
        return el.getAttribute("data-kb-match") !== "0";
      });
    }

    function renderNav(totalPages) {
      nav.innerHTML = "";
      if (totalPages <= 1) return;

      var prev = document.createElement("button");
      prev.type = "button";
      prev.textContent = "Previous";
      prev.disabled = currentPage === 1;
      prev.addEventListener("click", function () {
        currentPage = Math.max(1, currentPage - 1);
        refresh();
      });
      nav.appendChild(prev);

      for (var p = 1; p <= totalPages; p++) {
        (function (pageNum) {
          var b = document.createElement("button");
          b.type = "button";
          b.textContent = String(pageNum);
          if (pageNum === currentPage) b.className = "active";
          b.addEventListener("click", function () {
            currentPage = pageNum;
            refresh();
          });
          nav.appendChild(b);
        })(p);
      }

      var next = document.createElement("button");
      next.type = "button";
      next.textContent = "Next";
      next.disabled = currentPage === totalPages;
      next.addEventListener("click", function () {
        currentPage = Math.min(totalPages, currentPage + 1);
        refresh();
      });
      nav.appendChild(next);
    }

    function refresh() {
      var eligible = getEligible();
      var totalPages = Math.max(1, Math.ceil(eligible.length / per));
      if (currentPage > totalPages) currentPage = totalPages;

      getItems().forEach(function (el) {
        el.style.display = "none";
      });

      eligible.forEach(function (el, idx) {
        var page = Math.floor(idx / per) + 1;
        if (page === currentPage) {
          el.style.display = "";
        }
      });

      renderNav(totalPages);
    }

    function resetPage() {
      currentPage = 1;
      refresh();
    }

    getItems().forEach(function (el) {
      if (!el.hasAttribute("data-kb-match")) {
        el.setAttribute("data-kb-match", "1");
      }
    });

    refresh();

    return {
      refresh: refresh,
      resetPage: resetPage,
      setMatch: function (el, match) {
        el.setAttribute("data-kb-match", match ? "1" : "0");
      }
    };
  }

  window.createKbPagination = createKbPagination;
})();
