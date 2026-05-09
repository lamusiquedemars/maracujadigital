<?php
$title = "Quelle est la valeur d'un site web ?";
?>

<!-- HERO -->
<?php
render('hero', [
  'title' => 'Votre site web doit faire une chose : aider à décider.',
  'subtitle' => 'Vos clients vous trouvent déjà. La vraie question est : comprennent-ils assez vite votre valeur pour vous choisir ?',
  'class' => ['hero--page', 'hero--center']
]);
?>

<!-- INTRO -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Le problème n’est pas la visibilité</h2>
    <p class="lead">
      Aujourd’hui, vos clients arrivent déjà jusqu’à vous : recommandation, Instagram, réseau.
    </p>
    <p>
      Leur premier réflexe est toujours le même : ils vont voir votre site.
    </p>
    <p>
      Et en quelques secondes, ils se posent des questions simples :
      est-ce que c’est pour moi ? est-ce que c’est sérieux ? est-ce que je comprends la valeur ?
    </p>
    <p>
      Si la réponse n’est pas immédiate, ils repartent.
    </p>
    <div class="divider"></div>

    <p class="text-accent">
      Un site efficace ne sert pas à être présent. Il sert à être compris et choisi.
    </p>
  </div>
</section>

<!-- AVANT / APRÈS -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Ce qui se passe réellement</h2>

    <table class="table--featured">
      <thead>
        <tr>
          <th>Situation actuelle</th>
          <th>Ce qui se passe</th>
          <th>Conséquence</th>
          <th><strong>Site structuré</strong></th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Vous expliquez votre activité en message ou en rendez-vous</td>
          <td>Le client ne comprend pas seul</td>
          <td>Temps perdu, friction</td>
          <td><strong>Le site fait le travail en amont</strong></td>
        </tr>

        <tr>
          <td>Votre offre est floue</td>
          <td>Difficile de se projeter</td>
          <td>Hésitation ou abandon</td>
          <td><strong>Offre claire et lisible immédiatement</strong></td>
        </tr>

        <tr>
          <td>Positionnement mal perçu</td>
          <td>Comparaison au prix uniquement</td>
          <td>Pression sur les tarifs</td>
          <td><strong>Valeur comprise avant le prix</strong></td>
        </tr>

        <tr>
          <td>Demandes peu qualifiées</td>
          <td>Beaucoup d’échanges inutiles</td>
          <td>Perte d’énergie</td>
          <td><strong>Contacts plus pertinents</strong></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- CE QUE FAIT UN BON SITE -->
<section class="section">
  <div class="container no-padding">
    <div class="card card--featured card--maracuja">
      <h2 class="h2--moderne">Ce qu’un site bien structuré doit permettre</h2>
      <ul class="ul-icon">
        <li class="spacing-sm"><i data-lucide="target"></i>Clarifier ce que vous faites réellement</li>
        <li class="spacing-sm"><i data-lucide="layers"></i>Structurer votre offre pour qu’elle soit comprise</li>
        <li class="spacing-sm"><i data-lucide="layout"></i>Construire un site lisible et cohérent</li>
        <li><i data-lucide="user-check"></i>Faciliter la décision du client</li>
      </ul>
    </div>
  </div>
</section>

<!-- MÉTHODE -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Du besoin à la mise en ligne</h2>
    <p class="section-intro">
      Le projet avance étape par étape, avec une méthode claire pour organiser les besoins,
      structurer le contenu et construire un site cohérent.
    </p>
    <div class="grid grid--4">
      <div class="card">
        <h3>Cadrer</h3>
        <p>Comprendre votre activité, vos clients, vos enjeux</p>
      </div>
      <div class="card">
        <h3>Structurer</h3>
        <p>Clarifier votre offre et votre positionnement</p>
      </div>
      <div class="card">
        <h3>Réaliser</h3>
        <p>Créer un site clair, cohérent et lisible</p>
      </div>
      <div class="card">
        <h3>Déployer</h3>
        <p>Mettre en ligne un outil utile pour votre activité</p>
      </div>
    </div>
  </div>
</section>

<!-- RÉSULTAT -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Ce que le site doit produire</h2>
    <p class="section-intro">
      Un site bien construit doit aider le visiteur à comprendre rapidement l’activité,
      à se faire une opinion claire et à savoir quoi faire ensuite.
    </p>
    <div class="grid grid--3">
      <div class="card">
        <i data-lucide="eye" class="card-icon"></i>
        <h3>Compréhension immédiate</h3>
        <p>Le visiteur comprend ce que vous faites sans effort</p>
      </div>

      <div class="card">
        <i data-lucide="shield-check" class="card-icon"></i>
        <h3>Crédibilité renforcée</h3>
        <p>Votre niveau est perçu dès les premières secondes</p>
      </div>

      <div class="card">
        <i data-lucide="arrow-right-circle" class="card-icon"></i>
        <h3>Décision facilitée</h3>
        <p>Le passage à l’action devient naturel</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA FINAL -->
<section class="section">
  <div class="container">
    <div class="split">
      <div class="split__item">
        <img
          src="<?= e(img('desk-lamp.png')) ?>"
          alt="Bureau de travail avec ordinateur, carnet et jus de fruit">
      </div>
      <div class="split__item">
        <h2>Conclusion</h2>
      <p>
        Si aujourd’hui votre site ne génère pas de demandes, ce n’est pas un problème technique.
        C’est un problème de clarté.
      </p>
      <p>
        Un premier échange permet d’identifier la situation du projet, le niveau d’accompagnement utile et le format le plus adapté.
      </p>
        <div>
          <?php render('btn', [
            'route' => 'contact',
            'label' => 'Présenter un projet'
          ]); ?>
        </div>
      </div>

    </div>
  </div>
</section>