<?php
$title = 'Solutions numériques sur mesure';

render('hero', [
  'eyebrow' => 'MARACUJA DIGITAL · SOLUTIONS NUMÉRIQUES SUR MESURE',
  'title' => 'Bien plus qu’un site web. Un outil pensé pour votre activité.',
  'subtitle' => 'Votre site, vos clients et votre gestion quotidienne réunis dans un environnement simple, modulaire et adapté à votre métier. Sans fonctionnalités superflues. Sans multiplier les logiciels.',
  'class' => ['hero--home', 'hero--image', 'hero--center', 'hero--full', 'hero--maracuja'],
  'link' => route('contact'),
  'label' => 'Parlons de votre projet',
]);
?>

<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Une solution qui accompagne votre activité</h2>
    <div class="grid grid--3">
      <article class="card">
        <i data-lucide="store" class="card-icon"></i>
        <h3>Faites connaître votre activité</h3>
        <p>Présentez votre savoir-faire, vos services et vos produits avec un site professionnel, conçu pour votre identité et vos besoins.</p>
        <p><small>Site vitrine · Catalogue · Référencement · Galeries</small></p>
      </article>
      <article class="card">
        <i data-lucide="users-round" class="card-icon"></i>
        <h3>Développez votre clientèle</h3>
        <p>Recevez vos demandes, retrouvez vos échanges et suivez vos contacts. Communiquez avec vos clients et mesurez les résultats de vos actions.</p>
        <p><small>Suivi clients · Rendez-vous · Google Ads · E-mailing · Assistant IA</small></p>
      </article>
      <article class="card">
        <i data-lucide="folders" class="card-icon"></i>
        <h3>Simplifiez votre gestion</h3>
        <p>Préparez vos devis, suivez vos prestations, organisez vos documents et retrouvez vos informations au même endroit.</p>
        <p><small>Devis · Facturation · Dossiers métier · Stock · Locations</small></p>
      </article>
    </div>

  </div>
</section>

<section class="section">
  <div class="container">
    <div class="split">
      <div class="split__item">
        <h2 class="h2--moderne">Votre activité ne devrait pas s’adapter à un logiciel. C’est votre outil qui doit s’adapter à votre métier.</h2>
        <p>Plutôt que d’imposer un logiciel généraliste, Maracuja associe les fonctions réellement nécessaires et les adapte à vos usages.</p>
        <p>La solution reste modulaire, personnalisable et évolutive, avec un interlocuteur qui conçoit, configure et suit votre projet.</p>
        <p><a href="<?= e(route('methode')) ?>" class="btn btn-ghost">Découvrir la méthode</a></p>
      </div>
      <div class="split__item">
        <img src="<?= e(img('desk-process.png')) ?>" alt="Bureau de travail avec schémas et carnet">
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php
    $realisations = require app_path('data/showcase.php');
    render('showcase', [
      'title' => 'Des réalisations concrètes',
      'intro' => 'Chaque solution est conçue à partir d’un métier, de ses habitudes et de ses besoins réels.',
      'layout' => 'grid',
      'items' => $realisations,
    ]);
    ?>
  </div>
</section>

<section class="section home-final-cta">
  <div class="container">
    <div class="split">
      <div class="split__item">
        <img src="<?= e(img('desk-sunlight.png')) ?>" alt="Bureau de travail avec ordinateur et carnet">
      </div>
      <div class="split__item">
        <h2>Et si vos outils travaillaient enfin ensemble&nbsp;?</h2>
        <p>Vous avez un site à créer, des clients à suivre ou une organisation à simplifier&nbsp;?</p>
        <p>Parlons de votre activité, de vos habitudes et de ce qui vous fait perdre du temps. Nous verrons ensemble comment construire une solution adaptée, sans ajouter de complexité inutile.</p>
        <?php render('btn', ['route' => 'contact', 'label' => 'Discutons de votre projet']); ?>
      </div>
    </div>
  </div>
</section>
