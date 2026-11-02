<?php
$title = 'Solutions sur mesure';

render('hero', [
  'title' => 'Une solution numérique construite autour de votre métier',
  'subtitle' => 'Un environnement simple et adapté à vos usages, pour présenter votre activité, développer votre clientèle ou simplifier votre gestion quotidienne.',
  'class' => ['hero--page', 'hero--center'],
  'link' => route('contact'),
  'label' => 'Parlons de votre projet',
]);
?>

<section class="section">
  <div class="container">
    <p class="section-intro">Chaque activité a ses besoins. Certains professionnels souhaitent présenter leur savoir-faire et recevoir des demandes. D’autres doivent suivre leurs clients, organiser leurs prestations, gérer leurs documents ou développer leur clientèle.</p>
    <p class="section-intro">Maracuja permet de réunir les fonctions nécessaires sans imposer un logiciel complexe. Un site web peut en être le point de départ, mais il n’est ni une obligation ni une limite.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Des besoins différents, une solution adaptable</h2>
    <div class="grid grid--3">
      <article class="card">
        <i data-lucide="hammer" class="card-icon"></i>
        <h3>Pour un artisan ou un atelier</h3>
        <p>Présentez votre travail, vos réalisations ou votre catalogue, recevez des demandes et suivez vos interventions.</p>
        <p>Selon votre activité, l’espace de gestion peut aussi intégrer les devis, les produits, les stocks, les contrats ou les locations.</p>
      </article>
      <article class="card">
        <i data-lucide="briefcase-business" class="card-icon"></i>
        <h3>Pour un indépendant ou une profession libérale</h3>
        <p>Présentez vos services, facilitez la prise de contact et retrouvez vos clients et vos échanges.</p>
        <p>Un assistant IA, des campagnes Google Ads ou des outils de communication peuvent accompagner le développement de votre clientèle.</p>
      </article>
      <article class="card">
        <i data-lucide="package-search" class="card-icon"></i>
        <h3>Pour une activité qui présente des produits</h3>
        <p>Un catalogue peut présenter des références, leurs caractéristiques et leurs disponibilités.</p>
        <p>Il peut aussi être relié à un espace de gestion pour accompagner les devis, les prestations et la facturation.</p>
      </article>
    </div>
    <p class="section-intro">La vente en ligne avec panier et paiement relève d’un projet spécifique, étudié selon vos besoins.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Les fonctionnalités qui travaillent ensemble</h2>
    <p class="section-intro">Les fonctions sont sélectionnées et configurées selon votre projet. Elles ne sont pas toutes incluses ni nécessaires dans chaque environnement.</p>
    <div class="grid grid--3">
      <article class="card">
        <i data-lucide="monitor-smartphone" class="card-icon"></i>
        <h3>Présence numérique</h3>
        <p>Sites professionnels, contenus administrables, galeries, catalogues, formulaires et référencement.</p>
      </article>
      <article class="card">
        <i data-lucide="messages-square" class="card-icon"></i>
        <h3>Relation client et communication</h3>
        <p>Contacts, demandes, échanges, rendez-vous, tâches, assistant IA, campagnes Google Ads et communication e-mail.</p>
      </article>
      <article class="card">
        <i data-lucide="folder-cog" class="card-icon"></i>
        <h3>Gestion quotidienne</h3>
        <p>Devis, documents, factures, règlements, dossiers métier, stocks, contrats et locations.</p>
      </article>
    </div>

    <div class="divider"></div>
    <?php
    $realisations = require app_path('data/showcase.php');
    render('showcase', [
      'title' => 'Quelques réalisations',
      'intro' => 'Des captures de projets réels, conçus pour des usages et des métiers différents.',
      'layout' => 'carousel',
      'lightbox' => true,
      'items' => $realisations,
    ]);
    ?>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="split">
      <div class="split__item">
        <h2 class="h2--moderne">Un périmètre clair, des fonctionnalités choisies</h2>
        <p>Chaque projet commence par une base adaptée à son objectif : un site professionnel, un espace de gestion ou un ensemble connecté.</p>
        <p>À cette base s’ajoutent uniquement les fonctions nécessaires. Une galerie, un catalogue, le suivi des clients ou la gestion des devis n’impliquent pas les mêmes développements.</p>
        <p>Certaines prestations, comme les campagnes publicitaires, l’hébergement, la maintenance ou l’accompagnement régulier, sont définies séparément.</p>
      </div>
      <div class="split__item">
        <img src="<?= e(img('desk-laptop-sheets.png')) ?>" alt="Bureau avec ordinateur et documents de travail">
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="card card--featured card--maracuja">
      <h2 class="h2--moderne">Des repères pour comprendre le budget</h2>
      <p>Un site professionnel simple peut démarrer à partir de 1&nbsp;500&nbsp;€. Les fonctionnalités supplémentaires et les solutions de gestion intégrées sont chiffrées selon leur périmètre.</p>
      <p>Le devis distingue clairement la conception et la mise en place, les fonctionnalités retenues, les prestations complémentaires et les éventuels frais récurrents.</p>
      <?php render('btn', [
        'route' => 'offre-site-web',
        'class' => 'btn btn-ghost',
        'label' => 'Consulter les prestations et les repères de prix',
      ]); ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Une solution qui évolue avec votre activité</h2>
    <p class="section-intro">Vous pouvez commencer avec un besoin précis et faire évoluer votre environnement lorsque votre activité le nécessite.</p>
    <p class="section-intro">Les fonctions sont configurées et personnalisées selon vos usages, avec la possibilité de développer des adaptations spécifiques. Maracuja Digital assure directement la conception, l’intégration et l’accompagnement : vous n’avez pas à coordonner plusieurs prestataires pour faire fonctionner l’ensemble.</p>
  </div>
</section>

<section class="section home-final-cta">
  <div class="container">
    <div class="split">
      <div class="split__item">
        <img src="<?= e(img('desk-sunlight.png')) ?>" alt="Bureau de travail avec ordinateur et carnet">
      </div>
      <div class="split__item">
        <h2>Parlons de ce dont vous avez réellement besoin.</h2>
        <p>Un site, un catalogue, un suivi client ou un outil de gestion : chaque projet commence par comprendre votre façon de travailler.</p>
        <?php render('btn', ['route' => 'contact', 'label' => 'Présenter mon projet']); ?>
      </div>
    </div>
  </div>
</section>
