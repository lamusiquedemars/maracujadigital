<?php
$title = "Accueil";
?>

  <!-- HERO -->
  <section class="hero section hero--home hero--image hero--center hero--full hero--maracuja">
    <div class="container">
      
      <div class="hero__content">
        
        <h1 class="hero__title">
          Donner vie à ses idées.
        </h1>

        <p class="hero__subtitle">
          Je vous aide à structurer, clarifier et transformer votre activité sur le web.
        </p>

        <div class="hero__actions">
          <?php render('btn', [
            'route' => 'contact',
            'label' => 'Parlons de votre projet'
          ]); ?>
        </div>

      </div>

    </div>
  </section>

  <!-- ORIENTATION -->
  <section class="section">
      <div class="container">
          <h2>Orientation</h2>
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
                      Un travail d'accompagnement, de l'expression des besoins à la réalisation.
                  </p>
                  <p>
                    Deux objectifs : garantir les résultats et la satisfaction du client.
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
    <h2>Approche & positionnement</h2>
    <div class="grid grid--3">
      <!-- VALEURS -->
      <div class="card card--featured">
        <i data-lucide="star" class="card-icon"></i>
        <h3>Valeurs</h3>
        <p>Guidé par la simplicité et le service des personnes, je cherche l’équilibre entre le beau et l’utile.</p>
        <p>Mon travail repose sur l’écoute, la précision et le soin du détail.</p>
      </div>
      <!-- EXPÉRIENCE -->
      <div class="card card--featured">
        <i data-lucide="footprints" class="card-icon"></i>
        <h3>Expérience</h3>
        <p>
          Dans le numérique depuis 2009, développeur puis chef de projet depuis 2013,
          j’interviens principalement sur des projets complexes et stratégiques.</p>
        <p>Mon rôle est de formaliser les besoins, structurer les processus et garder l’utilisateur au centre.
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
          <li><strong>Cadrer</strong> — besoins et objectifs</li>
          <li><strong>Structurer</strong> — processus et fonctionnalités</li>
          <li><strong>Réaliser</strong> — construire et ajuster</li>
          <li><strong>Déployer</strong> — garantir valeur et usage</li>
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