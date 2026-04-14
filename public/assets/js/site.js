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