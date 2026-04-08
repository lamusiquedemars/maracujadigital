<!-- chargement des fonctions js -->
<script src="<?= asset('js/site.js') ?>"></script>
<!-- fonction google analytics -->
<?php if (!empty($SITE['tracking']['ga_id'])): ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= e($SITE['tracking']['ga_id']) ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?= e($SITE['tracking']['ga_id']) ?>');
</script>
<?php endif; ?>
<!-- icônes Lucide -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    lucide.createIcons();
  });
</script>