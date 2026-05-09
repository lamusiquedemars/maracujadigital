<?php
$title = "Accueil";

/*HERO*/
render('hero', [
  'title' => 'Donner vie à ses idées.',
  'subtitle' => 'Création de sites web et accompagnement de projets digitaux.',
  'class' => ['hero--home', 'hero--image', 'hero--center', 'hero--full', 'hero--maracuja'],
  'link' => route('contact'),
  'label' => 'Parlons de votre projet'
]);
?>

<!-- OFFRES -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Création de sites & projets digitaux</h2>
    <p class="section-intro">
      Des solutions web pensées pour présenter une activité clairement, structurer les contenus et proposer un outil simple à utiliser au quotidien.
    </p>

    <div class="grid grid--2">
      <!-- Carte 1 : Site Web -->
      <a class="card" href="<?= route('site-web') ?>">
        <i data-lucide="layout-template" class="card-icon"></i>
        <h3>Création de site internet</h3>
        <p>
          Un site web conçu pour présenter une activité de manière claire, fluide et accessible.
        </p>
        <p>
          Chaque projet est construit autour des contenus, des usages et des besoins réels du client.
        </p>
        <span class="btn btn-ghost">Voir le service</span>
      </a>

      <!-- Carte 2 : Structuration / Accompagnement -->
      <a class="card" href="<?= route('pilotage') ?>">
        <i data-lucide="milestone" class="card-icon"></i>
        <h3>Cadrage & pilotage de projet digital</h3>
        <p>
          Analyse des besoins, organisation des idées et structuration des fonctionnalités avant ou pendant la réalisation d’un projet.
        </p>
        <p>
          L’objectif est de garder un cadre clair et des décisions compréhensibles à chaque étape.
        </p>
        <span class="btn btn-ghost">Découvrir le service</span>
      </a>
    </div>
  </div>
</section>

<!-- REALISATIONS -->
<section class="">
  <div class="container">
    <?php
    $realisations = require app_path('data/showcase.php');

    render('showcase', [
      'title' => 'Réalisations',
      'intro' => 'Quelques exemples de sites, cadrages et livrables réalisés.',

      'variant' => 'editorial',
      'items' => $realisations,
    ]);
    ?>
  </div>
</section>

<!-- APPROCHE / POSITIONNEMENT -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Approche & positionnement</h2>
    <div class="grid grid--3">
      <!-- VALEURS -->
      <div class="card card--featured">
        <i data-lucide="star" class="card-icon"></i>
        <h3>Valeurs</h3>
        <p>
          Chaque projet est abordé avec la même exigence qu’un projet stratégique :
          décisions posées, choix argumentés, cadre clair.
        </p>
        <p>
          Un site engage l’image et l’activité d’un client.
          La structure, les contenus et les fonctionnalités ont donc besoin d’être réfléchis en amont.
        </p>
        <p>
          L’objectif est de construire un outil compréhensible, utile et adapté à son usage réel.
        </p>
      </div>
      <!-- EXPÉRIENCE -->
      <div class="card card--featured">
        <i data-lucide="footprints" class="card-icon"></i>
        <h3>Expérience</h3>
        <p>
          Activité dans le web depuis 2009, avec une expérience du développement,
          du cadrage fonctionnel et du pilotage de projets digitaux depuis 2013.
        </p>
        <p>
          Cette expérience apporte une méthode de travail issue du terrain :
          analyse des besoins, structuration des contenus, organisation des fonctionnalités
          et suivi des décisions pendant la réalisation.
        </p>
        <p>
          Les projets sont abordés avec une logique de conception et d’usage,
          pas uniquement de production visuelle.
        </p>
      </div>

      <!-- MÉTHODE -->
      <div class="card card--featured">
        <i data-lucide="settings" class="card-icon"></i>
        <h3>Méthode</h3>
        <p>
          La méthode de travail suit 4 étapes : cadrer, structurer, réaliser et déployer.
        </p>
        <ul>
          <li>
            <strong>Cadrer</strong> — analyser et formaliser précisément les besoins,
            les objectifs et les priorités pour poser un cadre clair avant toute décision
          </li>

          <li>
            <strong>Structurer</strong> — transformer ces éléments en architecture cohérente :
            contenus, parcours, fonctionnalités et logique d’ensemble
          </li>

          <li>
            <strong>Réaliser</strong> — concevoir et développer en respectant les choix validés
            et l’intention définie au départ
          </li>

          <li>
            <strong>Déployer</strong> — mettre en ligne un outil aligné avec l’activité
            et pensé pour son usage réel
          </li>
        </ul>
      </div>
    </div>

  </div>
</section>

<!-- CTA FINAL -->
<section class="section home-final-cta">
  <div class="container">
    <div class="split">
      <div class="split__item">
        <img
          src="<?= e(img('desk-laptop-sheets.png')) ?>"
          alt="Bureau de travail avec ordinateur, carnet et jus de fruit">
      </div>
      <div class="split__item">
        <p>Démarrer simplement</p>
        <h2>Un projet en tête&nbsp;?</h2>
        <p>
          Un premier échange pour clarifier le besoin, organiser les idées et poser les bonnes bases du projet.
        </p>
        <div>
          <?php render('btn', [
            'route' => 'contact',
            'label' => 'Parlons-en'
          ]); ?>
        </div>
      </div>

    </div>
  </div>
</section>