<?php
$title = "Accueil";
?>

<!-- HERO -->
<?php
render('hero', [
  'title' => 'Donner vie à ses idées.',
  'subtitle' => 'Je vous aide à structurer, clarifier et transformer votre activité sur le web.',
  'class' => ['hero--home', 'hero--image', 'hero--center', 'hero--full', 'hero--maracuja'],
  'link' => route('contact'),
  'label' => 'Parlons de votre projet'
]);
?>

<!-- ORIENTATION -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Orientation</h2>
    <p class="section-intro">
      Vous avez un projet digital.
      Je vous propose la création de sites et le pilotage de projet, avec méthode et exigence, pour un résultat clair et utile.
    </p>

    <div class="grid grid--2">
      <!-- Carte 1 : Site Web -->
      <a class="card" href="<?= route('site-web') ?>">
        <i data-lucide="layout-template" class="card-icon"></i>
        <h3>Création de site internet</h3>
        <p>
          Un site web qui vous ressemble, pensé pour être pratique, fluide, un véritable outil.
        </p>
        <p>
          Il permet de présenter clairement votre activité et de donner à vos visiteurs un moyen simple d'intéragir.
        </p>
        <span class="btn btn-ghost">Voir le service</span>
      </a>

      <!-- Carte 2 : Structuration / Accompagnement -->
      <a class="card" href="<?= route('pilotage') ?>">
        <i data-lucide="milestone" class="card-icon"></i>
        <h3>Cadrage & pilotage de projet digital</h3>
        <p>
          J’interviens sur des projets pour clarifier les besoins, organiser les idées et poser une structure solide avant ou pendant la réalisation.</p>
        <p> L’objectif : garder une vision claire et des choix cohérents à chaque étape.
        </p>
        <span class="btn btn-ghost">Découvrir le service</span>
      </a>
    </div>
  </div>
</section>

<!-- REALISATIONS -->
<?php
render('realisations', [
  'title' => $SITE['realisations']['title'],
  'items' => $SITE['realisations']['items']
]);
?>
<!-- APPROCHE / POSITIONNEMENT -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Approche & positionnement</h2>
    <div class="grid grid--3">
      <!-- VALEURS -->
      <div class="card card--featured">
        <i data-lucide="star" class="card-icon"></i>
        <h3>Valeurs</h3>
        <p>Je travaille avec la même exigence que sur un projet stratégique : décisions posées, choix argumentés, cadre clair.
          Un site engage votre image et votre activité. Il mérite plus qu’une exécution rapide.
        </p>
        <p>Mon approche repose sur la précision, la cohérence et le respect du travail de mes clients.
        </p>
      </div>
      <!-- EXPÉRIENCE -->
      <div class="card card--featured">
        <i data-lucide="footprints" class="card-icon"></i>
        <h3>Expérience</h3>
        <p>Développeur depuis 2009, chef de projet depuis 2013, j’ai piloté des projets où chaque besoin devait être analysé,
          reformulé et validé avant production.
        </p>
        <p>Mon rôle ne consiste pas à “exécuter”, mais à comprendre, structurer et sécuriser.
          C’est cette compétence de formalisation que j’applique aujourd’hui à la création de sites.
        </p>
        <p>
          Je ne découvre pas la méthode : je l’ai pratiquée pendant des années dans des environnements exigeants.
        </p>
      </div>

      <!-- MÉTHODE -->
      <div class="card card--featured">
        <i data-lucide="settings" class="card-icon"></i>
        <h3>Méthode</h3>
        <p>
          J’applique une méthode de travail en 4 étapes, issue de la gestion de projets.
        </p>
        <ul>
          <li><strong>Cadrer</strong> — analyser et formaliser précisément vos besoins, 
          vos objectifs et vos priorités pour poser un cadre clair avant toute décision</li>
          <li><strong>Structurer</strong> — transformer ces éléments en architecture cohérente : contenus, parcours, 
          fonctionnalités et logique d’ensemble</li>
          <li><strong>Réaliser</strong> — concevoir et développer avec rigueur, en respectant les choix validés et l’intention initiale</li>
          <li><strong>Déployer</strong> — mettre en ligne un outil maîtrisé, aligné avec votre activité et pensé pour durer</li>
        </ul>
      </div>
    </div>

  </div>
</section>

<!-- CTA FINAL -->
<section class="section">
  <div class="container">
    <h2>Un projet en tête ?</h2>
    <?php render('btn', [
      'route' => 'contact',
      'label' => 'Parlons-en !'
    ]); ?>
  </div>
</section>