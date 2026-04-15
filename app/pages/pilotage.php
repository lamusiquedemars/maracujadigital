<?php
$title = "Pilotage de projets digitaux";
?>
<!-- HERO -->
<?php
render('hero', [
  'title' => 'Accompagnement projet digital',
  'subtitle' => 'J’interviens sur des projets pour clarifier les décisions, structurer les idées 
  ou rétablir un cadre de pilotage afin de les faire avancer.
  Ce sont plus de 13 ans d’expérience en gestion de projets informatiques et développement.',
  'class' => ['hero--page', 'hero--center']
]);
?>
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Mes trois offres d’accompagnement</h2>
    <div class="grid grid--3">

      <!-- OFFRE 1 -->
      <div class="card">
        <i data-lucide="lightbulb" class="card-icon"></i>
        <h3>Clarifier pour décider</h3>
        <p class="service-duration">2 à 3 jours</p>

        <p>
          <strong>Situation :</strong> projet flou, décisions difficiles, équipes non alignées<br>
          <strong>Objectif :</strong> clarifier la situation et faciliter la prise de décision
        </p>

        <p><strong>Actions</strong></p>
        <ul>
          <li>Analyse du contexte</li>
          <li>Identification des blocages</li>
          <li>Clarification des objectifs</li>
          <li>Aide à la décision</li>
        </ul>

        <p>
          <strong>Exemple :</strong> une organisation lance un projet interne sans direction stable, les priorités changent régulièrement.
        </p>

        <p class="service-deliverable">
          Note de synthèse avec options et recommandations
        </p>

        <p>
          <strong>Prix :</strong> 1 200 € – 1 800 €
        </p>
      </div>

      <!-- OFFRE 2 -->
      <div class="card">
        <i data-lucide="compass" class="card-icon"></i>
        <h3>Structurer pour lancer</h3>
        <p class="service-duration">1 à 2 jours</p>

        <p>
          <strong>Situation :</strong> idée existante mais non structurée<br>
          <strong>Objectif :</strong> transformer une idée en projet cadré et actionnable
        </p>

        <p><strong>Actions</strong></p>
        <ul>
          <li>Formalisation du besoin</li>
          <li>Structuration des objectifs</li>
          <li>Définition du périmètre</li>
          <li>Priorisation</li>
          <li>Première roadmap</li>
        </ul>

        <p>
          <strong>Exemple :</strong> création d’un site web sans vision claire du périmètre ni des priorités.
        </p>

        <p class="service-deliverable">
          Note de cadrage avec besoins et roadmap
        </p>

        <p>
          <strong>Prix :</strong> 900 € – 1 500 €
        </p>
      </div>

      <!-- OFFRE 3 -->
      <div class="card">
        <i data-lucide="anchor" class="card-icon"></i>
        <h3>Recadrer pour piloter</h3>
        <p class="service-duration">3 à 6 semaines</p>

        <p>
          <strong>Situation :</strong> projet en cours avec dérives ou manque de pilotage<br>
          <strong>Objectif :</strong> remettre en place un cadre de pilotage clair et stable
        </p>

        <p><strong>Actions</strong></p>
        <ul>
          <li>Analyse du projet existant</li>
          <li>Clarification des rôles</li>
          <li>Identification des dérives</li>
          <li>Mise en place du pilotage</li>
          <li>Réalignement des parties prenantes</li>
        </ul>

        <p>
          <strong>Exemple :</strong> projet en retard, responsabilités floues, absence de suivi structuré.
        </p>

        <p class="service-deliverable">
          Cadre de pilotage avec organisation et suivi
        </p>

        <p>
          <strong>Prix :</strong> 3 000 € – 7 000 €
        </p>
      </div>

    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="card card--ghost card--maracuja">
      <h2 class="h2--moderne">Pourquoi ces trois offres ?</h2>
      <p>
        Ces offres couvrent les principaux besoins d’accompagnement sur des projets digitaux :
        clarification, structuration et pilotage. Elles correspondent aux situations dans lesquelles j’interviens le plus souvent.
      </p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container no-padding">
    <?php render('btn', [
      'route' => 'contact',
      'label' => 'Parlons-en !'
    ]); ?>
  </div>
</section>