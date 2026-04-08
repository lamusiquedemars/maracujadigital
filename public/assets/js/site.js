// site.js — Menu burger + accessibilité
document.addEventListener("DOMContentLoaded", () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".site-nav");

  if (!burger || !nav) return;

  // Initialisation ARIA
  burger.setAttribute("aria-controls", "main-navigation");
  burger.setAttribute("aria-expanded", "false");
  nav.setAttribute("id", "main-navigation");

  // Toggle menu
  burger.addEventListener("click", () => {
    const expanded = burger.getAttribute("aria-expanded") === "true";
    burger.setAttribute("aria-expanded", String(!expanded));
    burger.classList.toggle("active");
    nav.classList.toggle("active");
  });

  // Ferme le menu si on clique sur un lien
  nav.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
      burger.setAttribute("aria-expanded", "false");
      burger.classList.remove("active");
      nav.classList.remove("active");
    });
  });

  window.addEventListener('scroll', () => {
    const header = document.querySelector('.site-header');
    header.classList.toggle('is-scrolled', window.scrollY > 10);
  });
});