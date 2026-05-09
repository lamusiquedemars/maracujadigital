<?php
$title = "Création de sites web";
?>

<!-- HERO -->
<?php
render('hero', [
  'title' => 'Création de sites web',
  'subtitle' => 'Des sites sur-mesure, 
  avec la même exigence de structure et de méthode que dans des projets digitaux.',
  'class' => ['hero--page', 'hero--center']
]);
?>

<!-- FORMULES -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Nos trois formules</h2>
    <p class="section-intro">
      Les formules donnent un cadre de départ selon le niveau de contenu, d’autonomie et de fonctionnalités attendu.
      Le périmètre exact est confirmé après un premier cadrage.
    </p>
    <div class="divider"></div>

    <table class="table--featured">
      <thead>
        <tr>
          <th>Critère</th>
          <th><i data-lucide="leaf"></i><strong>Essence</strong><br>1 500 – 2 000 €</th>
          <th><i data-lucide="star"></i><strong>Signature</strong><br>2 200 – 2 800 €</th>
          <th><i data-lucide="globe"></i><strong>Univers</strong><br>3 000 – 3 800 €</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Objectif</strong></td>
          <td>Avoir une vitrine simple, rapide et professionnelle</td>
          <td>Valoriser son savoir-faire et partager régulièrement du contenu</td>
          <td>Ajouter des outils pratiques (réservations ou petites ventes en ligne)</td>
        </tr>
        <tr>
          <td><strong>Structure du site</strong></td>
          <td>5 pages principales</td>
          <td>6 à 8 pages avec section Actualités</td>
          <td>Jusqu’à 8 pages avec section Actualités + espace réservations ou petites ventes</td>
        </tr>
        <tr>
          <td><strong>Technologie</strong></td>
          <td>Site maison statique (léger, rapide, sécurisé)</td>
          <td>Site maison statique ou WordPress selon vos habitudes</td>
          <td>WordPress + outils pour réservations ou petites ventes</td>
        </tr>
        <tr>
          <td><strong>Autonomie sur le contenu</strong></td>
          <td>Modification limitée à certains textes et photos</td>
          <td>Vous gérez vous-même les actualités et photos</td>
          <td>Vous gérez vous-même actualités, photos, réservations ou produits</td>
        </tr>
        <tr>
          <td><strong>Maintenance technique</strong></td>
          <td>1 mois de support après mise en ligne (corrections, ajustements, conseils)</td>
          <td colspan="2">2 mois de support après mise en ligne (corrections, ajustements, conseils)</td>
        </tr>
        <tr>
          <td><strong>Support annuel en option</strong></td>
          <td colspan="3">400 € TTC / an</td>
        </tr>
        <tr>
          <td><strong>Hébergement</strong></td>
          <td colspan="3">À votre charge, avec guide fourni pour choisir et configurer un hébergement adapté</td>
        </tr>
        <tr>
          <td><strong>Délais</strong></td>
          <td colspan="3">Environ 3 à 6 semaines après validation du devis et réception des éléments nécessaires</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- INCLUS -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Un site conçu comme un vrai projet</h2>
    <div class="split">
      <div class="split__item">
        <p>
          Chaque site est cadré comme un projet à part entière : analyse des besoins, structuration des contenus, définition précise des fonctionnalités.
          Cette approche issue des environnements grands comptes permet d’éviter l’approximation et de construire un site cohérent, pensé dans sa globalité.
        </p>
        <h3>Éléments inclus dans toutes les offres</h3>
        <ul class="ul-icon">
          <li><i data-lucide="leaf"></i>Cadrage du projet avec une méthode issue de l’AMOA</li>
          <li><i data-lucide="leaf"></i>Design sobre et élégant réalisé sur mesure avec vos photos et votre univers</li>
          <li><i data-lucide="leaf"></i>Galerie photos avec agrandissement au clic et légendes</li>
          <li><i data-lucide="leaf"></i>Formulaire de contact + carte de localisation + liens vers vos réseaux sociaux</li>
          <li><i data-lucide="leaf"></i>Développement complet, tests sur tous les appareils et optimisation pour un chargement rapide</li>
          <li><i data-lucide="leaf"></i>Mise en ligne sur votre nom de domaine</li>
          <li><i data-lucide="leaf"></i>Dossier de livraison du site</li>
        </ul>
        <p><a href=<?= route('methode') ?> class="btn">Connaître l'approche dans le détail</a></p>
      </div>
      <div class="split__item">
        <img src="<?= img('desk-process.png') ?>" alt="Bureau de travail avec schémas, carnet et jus de fruit">
      </div>
    </div>
</section>

<!-- OPTIONS -->
<section class="section">
  <div class="container no-padding ">
    <h2 class="h2--moderne">Socle inclus et renforts possibles</h2>
    <p class="section-intro">
      Chaque site intègre les bases nécessaires pour être clair, rapide, consultable sur tous les appareils et correctement structuré.
      Certains besoins peuvent demander un accompagnement complémentaire, notamment pour le référencement, l’identité visuelle, la photographie ou le suivi des performances.
    </p>
    <div class="grid grid--3">
      <div class="card">
        <i data-lucide="search" class="card-icon"></i>
        <h3>Référencement</h3>
        <p>
          Les bases techniques et structurelles sont intégrées au site : titres, hiérarchie des contenus, performance, responsive et pages indexables.
          Une stratégie SEO plus avancée peut être ajoutée si l’objectif est de travailler la visibilité dans la durée.
        </p>
      </div>
      <div class="card">
        <i data-lucide="palette" class="card-icon"></i>
        <h3>Identité visuelle</h3>
        <p>
          Le site est conçu avec une direction sobre et cohérente à partir de votre univers existant.
          Un travail graphique plus poussé peut être prévu si l’identité visuelle doit être créée ou retravaillée.
        </p>
      </div>
      <div class="card">
        <i data-lucide="bar-chart-2" class="card-icon"></i>
        <h3>Suivi & mesure</h3>
        <p>
          Les outils de suivi peuvent être installés pour comprendre les visites, les prises de contact et les pages consultées.
          Une lecture régulière des résultats peut être ajoutée après la mise en ligne.
        </p>
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
          src="<?= e(img('desk-sunlight.png')) ?>"
          alt="Bureau de travail avec ordinateur, carnet et jus de fruit">
      </div>
      <div class="split__item">
        <h2>Prochaine étape</h2>
        <p>
        Un premier échange permet de clarifier le besoin, le niveau d’accompagnement nécessaire et la formule la plus adaptée.
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