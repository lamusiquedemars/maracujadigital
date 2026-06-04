<?php
$title = "Accueil";

/*
|--------------------------------------------------------------------------
| HERO
|--------------------------------------------------------------------------
| La home doit maintenant vendre le produit principal :
| création de sites sur mesure avec deux niveaux clairs :
| Maracuja Site et Maracuja CMS.
*/
render('hero', [
  'title' => 'Des sites web clairs, utiles et pratiques à faire vivre.',
  'subtitle' => 'Maracuja Digital crée des sites vitrine sur mesure et des sites administrables avec Maracuja CMS, selon les besoins réels de votre activité.',
  'class' => ['hero--home', 'hero--image', 'hero--center', 'hero--full', 'hero--maracuja'],
  'link' => route('site-web'),
  'label' => 'Découvrir les solutions'
]);
?>

<!-- PRODUIT PRINCIPAL -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Deux façons de construire votre site</h2>
    <p class="section-intro">
      Maracuja Digital propose deux niveaux de réalisation : un site vitrine simple quand l’objectif est de présenter clairement une activité, ou un site administrable quand le client doit gérer des contenus, des demandes ou des modules métier.
    </p>
    <div class="grid grid--2">
      <div class="card">
        <i data-lucide="layout-template" class="card-icon"></i>
        <h3>Maracuja Site</h3>
        <p>
          Pour les sites vitrines simples, rapides et sur mesure.
        </p>
        <p>
          Une structure claire, des pages bien construites, un formulaire de contact,
          une direction visuelle cohérente et aucune administration inutile.
        </p>
      </div>
      <div class="card">
        <i data-lucide="panel-top" class="card-icon"></i>
        <h3>Maracuja CMS</h3>
        <p>
          Pour les sites qui doivent vivre dans le temps.
        </p>
        <p>
          Une administration simple pour gérer les contenus utiles :
          actualités, galerie, catalogue, demandes qualifiées, réservation ou module métier.
        </p>
      </div>
    </div>

    <div>
      <?php render('btn', [
        'route' => 'site-web',
        'label' => 'Découvrir les solutions de site web'
      ]); ?>
    </div>
  </div>
</section>

<!-- POSITIONNEMENT -->
<section class="section">
  <div class="container">
    <div class="split">
      <div class="split__item">
        <h2 class="h2--moderne">Un site construit autour de l’usage</h2>

        <p>
          Maracuja Digital ne part pas d’une solution standard à paramétrer.
          Le projet commence par une question simple : que doit permettre le site, concrètement ?
        </p>

        <p>
          Si une vitrine claire suffit, le site reste léger. Si le client doit gérer des contenus
          ou des demandes, Maracuja CMS apporte une administration ciblée, sans tableau de bord généraliste lourd.
        </p>

        <p>
          L’objectif est de garder un site propre, compréhensible, maintenable et adapté au quotidien réel du client.
        </p>
      </div>

      <div class="split__item">
        <img
          src="<?= e(img('desk-process.png')) ?>"
          alt="Bureau de travail avec schémas, carnet et jus de fruit">
      </div>
    </div>
  </div>
</section>

<!-- OFFRES -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Trois niveaux de projet</h2>
    <p class="section-intro">
      Les offres correspondent à des niveaux de besoin : présence simple, site plus complet ou outil administrable avec module métier.
    </p>
    <div class="grid grid--3">
      <div class="card card--featured">
        <i data-lucide="leaf" class="card-icon"></i>
        <h3>Essence</h3>
        <p>
          Pour présenter une activité avec un site clair, professionnel et bien structuré.
        </p>
        <p>
          Généralement réalisé avec <strong>Maracuja Site</strong>.
        </p>
      </div>
      <div class="card card--featured">
        <i data-lucide="star" class="card-icon"></i>
        <h3>Signature</h3>
        <p>
          Pour valoriser un savoir-faire avec plus de contenus, de pages et d’autonomie si utile.
        </p>
        <p>
          Réalisé avec <strong>Maracuja Site enrichi</strong> ou <strong>Maracuja CMS léger</strong>.
        </p>
      </div>
      <div class="card card--featured">
        <i data-lucide="globe" class="card-icon"></i>
        <h3>Univers</h3>
        <p>
          Pour construire un site plus complet avec catalogue, demandes qualifiées,
          réservation ou module métier.
        </p>
        <p>
          Généralement réalisé avec <strong>Maracuja CMS</strong>.
        </p>
      </div>
    </div>
    <p class="section-intro">
      <a href="<?= route('site-web') ?>" class="btn">Comparer les formules</a>
    </p>
  </div>
</section>

<!-- REALISATIONS 
<section class="section">
  <div class="container">
    <?php
    $realisations = require app_path('data/showcase.php');
    render('showcase', [
      'title' => 'Réalisations',
      'intro' => 'Quelques exemples de sites, cadrages et livrables réalisés.',
      'layout' => 'carousel',
      'lightbox' => true,
      'items' => $realisations,
    ]);
    ?>
  </div>
</section>-->

<!-- METHODE -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Une méthode de travail claire</h2>
    <p class="section-intro">
      Avant de produire, il faut poser le cadre : comprendre l’activité, organiser les contenus,
      choisir les bons modules et définir ce que le site doit réellement permettre.
    </p>
    <div class="grid grid--4">
      <div class="card">
        <i data-lucide="search" class="card-icon"></i>
        <h3>Cadrer</h3>
        <p>
          Clarifier l’objectif, les pages, les contenus, les priorités et les actions attendues.
        </p>
      </div>
      <div class="card">
        <i data-lucide="list-tree" class="card-icon"></i>
        <h3>Structurer</h3>
        <p>
          Organiser les informations, les parcours et les fonctionnalités utiles.
        </p>
      </div>
      <div class="card">
        <i data-lucide="code-2" class="card-icon"></i>
        <h3>Réaliser</h3>
        <p>
          Concevoir et développer le site en respectant les choix validés.
        </p>
      </div>
      <div class="card">
        <i data-lucide="rocket" class="card-icon"></i>
        <h3>Déployer</h3>
        <p>
          Mettre en ligne, tester les points essentiels et accompagner la prise en main.
        </p>
      </div>
    </div>
    <p class="section-intro">
      <a href="<?= route('methode') ?>" class="btn btn-ghost">Voir la méthode de travail</a>
    </p>
  </div>
</section>

<!-- PILOTAGE SECONDAIRE -->
<section class="section">
  <div class="container">
    <div class="card card--ghost card--maracuja">
      <h2 class="h2--moderne">Besoin de cadrer un projet digital ?</h2>
      <p>
        Le cadrage et le pilotage peuvent aussi être proposés pour structurer une idée,
        préparer une réalisation ou organiser des fonctionnalités avant développement.
      </p>
      <p>
        Cette compétence nourrit directement la création de sites : elle permet de mieux choisir
        les pages, les contenus, les modules et les priorités du projet.
      </p>
      <p>
        <a href="<?= route('pilotage') ?>" class="btn btn-ghost">Voir l’accompagnement projet</a>
      </p>
    </div>
  </div>
</section>

<!-- CTA FINAL -->
<section class="section home-final-cta">
  <div class="container">
    <div class="split">
      <div class="split__item">
        <img
          src="<?= e(img('desk-sunlight.png')) ?>"
          alt="Bureau de travail avec ordinateur, carnet et jus de fruit">
      </div>

      <div class="split__item">
        <p>Démarrer simplement</p>

        <h2>Un site à créer ou à reprendre&nbsp;?</h2>

        <p>
          Un premier échange permet de clarifier le besoin, choisir le bon niveau d’outil
          et définir un périmètre réaliste.
        </p>

        <div>
          <?php render('btn', [
            'route' => 'contact',
            'label' => 'Parlons de votre projet'
          ]); ?>
        </div>
      </div>
    </div>
  </div>
</section>