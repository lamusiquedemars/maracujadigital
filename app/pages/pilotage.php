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
          <strong>Objectif :</strong> clarifier la situation et permettre une prise de décision rapide
        </p>

        <p><strong>Actions</strong></p>
        <ul>
          <li>Analyse du contexte</li>
          <li>Identification des blocages</li>
          <li>Clarification des objectifs</li>
          <li>Aide à la décision</li>
        </ul>

        <p>
          <strong>Exemple :</strong> Une entreprise lance un projet interne, mais les objectifs changent constamment.
          Les équipes ne savent plus quoi prioriser.
        </p>

        <p class="service-deliverable">
          Note de synthèse avec options et recommandations
        </p>

        <p>
          <strong>Résultat :</strong> décisions claires<br>
          <strong>Prix :</strong> 1 200 € – 1 800 €
        </p>
      </div>

      <!-- OFFRE 2 -->
      <div class="card">
        <i data-lucide="compass" class="card-icon"></i>
        <h3>Structurer pour lancer</h3>
        <p class="service-duration">1 à 2 jours</p>

        <p>
          <strong>Situation :</strong> une idée existe mais rien n’est structuré<br>
          <strong>Objectif :</strong> transformer une idée en projet structuré et prêt à être lancé
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
          <strong>Exemple :</strong> Une organisation veut créer un site web mais n’a ni périmètre,
          ni priorités, ni vision claire du projet.
        </p>

        <p class="service-deliverable">
          Note de cadrage avec besoins et roadmap
        </p>

        <p>
          <strong>Résultat :</strong> projet structuré<br>
          <strong>Prix :</strong> 900 € – 1 500 €
        </p>
      </div>

      <!-- OFFRE 3 -->
      <div class="card">
        <i data-lucide="anchor" class="card-icon"></i>
        <h3>Recadrer pour piloter</h3>
        <p class="service-duration">3 à 6 semaines</p>

        <p>
          <strong>Situation :</strong> projet lancé mais dérive, rôles flous, suivi insuffisant<br>
          <strong>Objectif :</strong> recréer un cadre de pilotage stable et efficace
        </p>

        <p><strong>Actions</strong></p>
        <ul>
          <li>Reprise du projet existant</li>
          <li>Clarification des rôles</li>
          <li>Analyse des dérives</li>
          <li>Mise en place du pilotage</li>
          <li>Réalignement des équipes</li>
        </ul>

        <p>
          <strong>Exemple :</strong> Un projet en cours accumule les retards, les responsabilités sont floues
          et aucune vision claire de l’avancement n’existe.
        </p>

        <p class="service-deliverable">
          Cadre de pilotage avec organisation et plan de contrôle
        </p>

        <p>
          <strong>Résultat :</strong> projet stabilisé et piloté<br>
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
        Ces trois offres couvrent les besoins de pilotage que j’ai le plus souvent rencontrés sur des projets digitaux,
        et dans lesquels j’apporte le plus de valeur. Elles traduisent mon expertise et mon mode d’intervention.
        Je peux aussi intervenir en régie sur des projets plus longs, en m’adaptant au projet et à son fonctionnement,
        en restant toujours à l’écoute des personnes impliquées.
      </p>
    </div>
  </div>
  <section class="section">
    <div class="container no-padding">
      <?php render('btn', [
        'route' => 'contact',
        'label' => 'Parlons-en !'
      ]); ?>
    </div>
  </section>

</section>