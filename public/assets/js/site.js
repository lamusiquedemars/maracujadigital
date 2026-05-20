document.addEventListener("DOMContentLoaded", () => {
  const burger = document.querySelector(".nav-toggle");
  const nav = document.querySelector(".nav-mobile");
  const header = document.querySelector(".site-header");

  if (!burger || !nav) return;

  burger.setAttribute("aria-controls", "mobile-navigation");
  burger.setAttribute("aria-expanded", "false");
  nav.setAttribute("id", "mobile-navigation");

  burger.addEventListener("click", () => {
    const expanded = burger.getAttribute("aria-expanded") === "true";

    burger.setAttribute("aria-expanded", String(!expanded));
    burger.classList.toggle("active"); // optionnel visuel burger
    nav.classList.toggle("is-open");   // <-- IMPORTANT
  });

  nav.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
      burger.setAttribute("aria-expanded", "false");
      burger.classList.remove("active");
      nav.classList.remove("is-open");
    });
  });

  window.addEventListener("scroll", () => {
    if (!header) return;
    header.classList.toggle("is-scrolled", window.scrollY > 10);
  });
});

/**
 * Initialise les carousels de citations.
 * Nécessite Fancyapps Carousel chargé avant site.js.
 */
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll("[data-quote-carousel]").forEach((carousel) => {
    Carousel(
      carousel,
      {
        infinite: false,
        Arrows: {},
        Dots: {},
      },
      {
        Arrows,
        Dots,
      }
    ).init();
  });
});

/**
 * Initialise les showcases en carousel.
 * Nécessite Fancyapps Carousel chargé avant site.js.
 */
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll("[data-showcase-carousel]").forEach((carousel) => {
    Carousel(
      carousel,
      {
        infinite: false,
        center: false,
        fill: true,
        Arrows: {},
        Dots: {},
      },
      {
        Arrows,
        Dots,
      }
    ).init();
  });

  if (typeof Fancybox !== "undefined") {
    Fancybox.bind("[data-fancybox]", {});
  }
});