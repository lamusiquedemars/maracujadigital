<?php
$title = "Pilotage de projets digitaux";
?>
<!-- HERO -->
<?php
render('hero', [
  'title' => 'Accompagnement de projets digitaux',
  'subtitle' => 'Clarifier les besoins, structurer les décisions et remettre du cadre dans les projets web ou numériques.',
  'class' => ['hero--page', 'hero--center']
]);
?>
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Les trois offres d’accompagnement</h2>
    <p class="section-intro">
      Ces accompagnements s’adressent aux projets qui ont besoin d’être clarifiés, structurés ou remis sous contrôle.
      Le format exact dépend du contexte, du niveau d’avancement et du nombre d’acteurs impliqués.
    </p>
    <div class="grid grid--3">

      <!-- OFFRE 1 -->
      <div class="card">
        <i data-lucide="lightbulb" class="card-icon"></i>
        <h3>Clarifier pour décider</h3>
        <p class="service-duration">Format court — quelques jours selon le contexte</p>
        <p>
          Pour les projets où la situation manque de clarté : objectifs flous, décisions difficiles,
          priorités instables ou acteurs non alignés.
        </p>
        <p><strong>Ce que l’accompagnement permet</strong></p>
        <ul>
          <li>Analyser le contexte</li>
          <li>Identifier les blocages</li>
          <li>Clarifier les objectifs</li>
          <li>Comparer les options possibles</li>
          <li>Faciliter la prise de décision</li>
        </ul>
        <p class="service-deliverable">
          Livrable possible : note de synthèse avec options et recommandations.
        </p>
      </div>

      <!-- OFFRE 2 -->
      <div class="card">
        <i data-lucide="compass" class="card-icon"></i>
        <h3>Structurer pour lancer</h3>
        <p class="service-duration">Format cadrage — de quelques jours à une courte mission</p>
        <p>
          Pour les projets qui existent déjà sous forme d’idée, de besoin ou d’intention,
          mais qui doivent être organisés avant d’être confiés à une équipe ou lancés en production.
        </p>
        <p><strong>Ce que l’accompagnement permet</strong></p>
        <ul>
          <li>Formaliser le besoin</li>
          <li>Définir le périmètre</li>
          <li>Structurer les objectifs</li>
          <li>Prioriser les fonctionnalités</li>
          <li>Construire une première roadmap</li>
        </ul>
        <p class="service-deliverable">
          Livrable possible : note de cadrage avec besoins, périmètre et premières priorités.
        </p>
      </div>

      <!-- OFFRE 3 -->
      <div class="card">
        <i data-lucide="anchor" class="card-icon"></i>
        <h3>Recadrer pour piloter</h3>
        <p class="service-duration">Format suivi — mission courte ou accompagnement sur plusieurs semaines</p>
        <p>
          Pour les projets déjà lancés qui manquent de pilotage : retards, responsabilités floues,
          décisions dispersées, suivi irrégulier ou perte de vision d’ensemble.
        </p>
        <p><strong>Ce que l’accompagnement permet</strong></p>
        <ul>
          <li>Analyser l’existant</li>
          <li>Identifier les dérives</li>
          <li>Clarifier les rôles</li>
          <li>Remettre en place un cadre de suivi</li>
          <li>Réaligner les parties prenantes</li>
        </ul>
        <p class="service-deliverable">
          Livrable possible : cadre de pilotage avec organisation, priorités et suivi.
        </p>
      </div>
    </div>
    <p class="section-note">
      Les durées, livrables et budgets sont précisés après un premier échange,
      selon le contexte du projet, le périmètre à traiter et le niveau d’accompagnement nécessaire.
    </p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="card card--ghost card--maracuja">
      <h2 class="h2--moderne">Pourquoi ces trois accompagnements ?</h2>
      <p>
        Les projets digitaux ne bloquent pas toujours au même endroit.
        Certains ont besoin d’une décision claire, d’autres d’un cadrage initial, d’autres encore d’un pilotage plus stable.
      </p>
      <p>
        Ces trois formats permettent d’intervenir au bon moment, sans imposer une méthode lourde quand le besoin est simple,
        ni traiter comme une simple réunion un projet qui demande un vrai cadre de suivi.
      </p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="card card--ghost">
      <h2 class="h2--moderne">Évaluer le besoin</h2>
      <p>
        Un premier échange permet d’identifier la situation du projet, le niveau d’accompagnement utile et le format le plus adapté.
      </p>
      <p>
        <a href="<?= route('contact') ?>" class="btn btn-ghost">Présenter un projet</a>
      </p>
    </div>
  </div>
</section>