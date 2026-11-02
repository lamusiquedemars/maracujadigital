<?php
$title = 'Prestations & tarifs';

render('hero', [
  'title' => 'Prestations & tarifs',
  'subtitle' => 'Un socle professionnel, des fonctionnalités choisies et un devis qui rend chaque poste compréhensible.',
  'class' => ['hero--page', 'hero--center'],
  'link' => route('contact'),
  'label' => 'Parlons de votre projet',
]);
?>

<section class="section">
  <div class="container">
    <div class="card card--featured card--maracuja">
      <h2 class="h2--moderne">Un site professionnel dès 1&nbsp;000&nbsp;€</h2>
      <p>Un site conçu autour de votre activité, avec un véritable travail de cadrage, une identité graphique soignée, des contenus structurés et un référencement naturel optimisé dès la conception.</p>
      <p><strong>Hébergement, adaptation mobile et mise en ligne inclus</strong>, pour une présence professionnelle sans complexité inutile.</p>
      <p>Le périmètre est défini ensemble, et votre solution peut évoluer avec vos besoins.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Ce qui est compris dans la prestation de départ</h2>
    <p class="section-intro">La base est dimensionnée pour créer une présence professionnelle claire et solide. Le nombre de pages, les contenus à intégrer et les éventuelles fonctions supplémentaires sont définis ensemble avant le devis.</p>
    <div class="grid grid--3">
      <article class="card">
        <i data-lucide="search" class="card-icon"></i>
        <h3>Cadrage et structure</h3>
        <p>Objectif du site, parcours des visiteurs, arborescence et hiérarchie des contenus.</p>
      </article>
      <article class="card">
        <i data-lucide="palette" class="card-icon"></i>
        <h3>Conception sur mesure</h3>
        <p>Identité graphique, pages adaptées à votre activité et intégration de vos contenus.</p>
      </article>
      <article class="card">
        <i data-lucide="rocket" class="card-icon"></i>
        <h3>Mise en ligne</h3>
        <p>Adaptation mobile, référencement naturel de base, hébergement et vérifications essentielles.</p>
      </article>
    </div>
    <p class="section-intro">Les conditions de renouvellement de l’hébergement, de la maintenance et des éventuels services tiers sont précisées dans le devis.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Des fonctionnalités choisies pour votre usage</h2>
    <p class="section-intro">Les fonctions ne sont pas ajoutées par défaut. Ces repères complètent le site professionnel dès 1&nbsp;000&nbsp;€ : ils permettent de comprendre les ordres de grandeur avant de définir le bon périmètre ensemble.</p>
    <div class="grid grid--2">
      <article class="card service-card">
        <i data-lucide="panels-top-left" class="card-icon"></i>
        <h3>Présence et contenus</h3>
        <p>Galeries, actualités, contenus administrables, catalogue vitrine et formulaires adaptés.</p>
        <ul class="price-list" aria-label="Repères de prix présence et contenus">
          <li><span>Galerie ou réalisations</span><strong>+150 à 700&nbsp;€</strong></li>
          <li><span>Actualités ou contenus récurrents</span><strong>+400 à 800&nbsp;€</strong></li>
          <li><span>Catalogue vitrine</span><strong>+700 à 1&nbsp;500&nbsp;€</strong></li>
        </ul>
        <p><strong>Disponible</strong> pour les fonctions de site et de contenu ; les catalogues métier sont étudiés selon leur source de données.</p>
      </article>
      <article class="card service-card">
        <i data-lucide="contact-round" class="card-icon"></i>
        <h3>Relation client</h3>
        <p>Demandes, contacts, échanges, rendez-vous et tâches peuvent être reliés à un espace de suivi.</p>
        <ul class="price-list" aria-label="Repères de prix relation client">
          <li><span>Formulaire qualifié</span><strong>+300 à 800&nbsp;€</strong></li>
          <li><span>Prise de rendez-vous simple</span><strong>+300 à 700&nbsp;€</strong></li>
          <li><span>Suivi client ou CRM connecté</span><strong>Sur devis</strong></li>
        </ul>
        <p><strong>À intégrer selon le projet</strong> : la gestion de la relation client reste centralisée dans l’outil adapté, sans dupliquer les données.</p>
      </article>
      <article class="card service-card">
        <i data-lucide="file-cog" class="card-icon"></i>
        <h3>Gestion quotidienne</h3>
        <p>Devis, documents, dossiers métier, stocks, contrats et locations pour les activités qui en ont besoin.</p>
        <ul class="price-list" aria-label="Repères de prix gestion quotidienne">
          <li><span>Module métier cadré</span><strong>3&nbsp;000 à 3&nbsp;800&nbsp;€</strong></li>
          <li><span>Devis, documents ou dossiers métier</span><strong>Sur devis</strong></li>
          <li><span>Stocks, contrats ou locations</span><strong>Sur devis</strong></li>
        </ul>
        <p><strong>Disponible selon le métier</strong> : les solutions de gestion avancées sont chiffrées après cadrage du périmètre.</p>
      </article>
      <article class="card service-card">
        <i data-lucide="megaphone" class="card-icon"></i>
        <h3>Communication et développement</h3>
        <p>Assistant IA, campagnes Google Ads et communication e-mail peuvent compléter votre dispositif.</p>
        <ul class="price-list" aria-label="Repères de prix communication">
          <li><span>Collecte e-mail ou newsletter simple</span><strong>+200 à 400&nbsp;€</strong></li>
          <li><span>Campagne Google Ads</span><strong>Sur devis + budget média</strong></li>
          <li><span>Assistant IA et parcours de contact</span><strong>Sur devis</strong></li>
        </ul>
        <p><strong>Prestation accompagnée ou en recette</strong> : chaque intégration est préparée, configurée et validée selon son contexte.</p>
      </article>
    </div>
    <p class="section-intro text-small">Les repères indiqués concernent des extensions ciblées. Ils ne s’additionnent pas mécaniquement : lorsqu’un besoin devient un véritable outil métier, un chiffrage global est plus juste qu’une accumulation de modules.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="card card--featured card--maracuja">
      <h2 class="h2--moderne">Le commerce en ligne, sans usine à gaz</h2>
      <p>Vendre en ligne ne devrait pas imposer des dizaines de menus, d’extensions et de réglages.</p>
      <p>Nous préparons une solution e-commerce avec une administration volontairement épurée, centrée sur l’essentiel : vos produits, vos commandes, vos ventes et les particularités de votre métier.</p>
      <p>L’objectif : une véritable boutique en ligne, personnalisable et simple à gérer au quotidien, sans la complexité inutile des plateformes généralistes.</p>
      <p class="text-accent"><strong>En développement</strong></p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Conception, accompagnement et fonctionnement</h2>
    <div class="grid grid--2">
      <article class="card">
        <i data-lucide="pen-tool" class="card-icon"></i>
        <h3>Conception et mise en place</h3>
        <p>Le travail de cadrage, de conception, d’intégration et de mise en service compose le socle du projet.</p>
      </article>
      <article class="card">
        <i data-lucide="blocks" class="card-icon"></i>
        <h3>Modules et personnalisations</h3>
        <p>Les fonctions retenues sont chiffrées selon leur complexité, leurs données et leur intégration à votre activité.</p>
      </article>
      <article class="card">
        <i data-lucide="life-buoy" class="card-icon"></i>
        <h3>Hébergement, maintenance et assistance</h3>
        <p>Les conditions de fonctionnement après la mise en ligne sont distinguées des évolutions et nouveaux développements.</p>
        <p class="price-callout"><strong>Suivi technique annuel&nbsp;: 500&nbsp;€ / an</strong><span>Sauvegardes, vérifications, petites corrections et assistance simple dans le périmètre précisé au devis.</span></p>
      </article>
      <article class="card">
        <i data-lucide="chart-no-axes-combined" class="card-icon"></i>
        <h3>Communication et services externes</h3>
        <p>Publicité, campagnes e-mail et éventuels fournisseurs tiers sont définis séparément lorsque le projet les nécessite.</p>
      </article>
    </div>
    <p class="section-intro">La facturation électronique est actuellement en phase de recette. Elle n’est proposée qu’après validation du besoin, du cadre réglementaire et de l’intégration retenue.</p>
  </div>
</section>

<section class="section home-final-cta">
  <div class="container">
    <div class="split">
      <div class="split__item">
        <img src="<?= e(img('desk-sunlight.png')) ?>" alt="Bureau de travail avec ordinateur et carnet">
      </div>
      <div class="split__item">
        <h2>Une solution adaptée, un devis clair.</h2>
        <p>Chaque projet commence par vos besoins réels. Nous définissons ensemble les fonctionnalités nécessaires, les possibilités d’évolution et les conditions d’accompagnement.</p>
        <?php render('btn', ['route' => 'contact', 'label' => 'Parlons de votre projet']); ?>
      </div>
    </div>
  </div>
</section>
