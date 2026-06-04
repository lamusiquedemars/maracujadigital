<?php
$title = "Création de sites web";
?>

<!-- HERO -->
<?php
render('hero', [
  'title' => 'Création de sites web',
  'subtitle' => 'Des sites sur mesure : vitrine claire ou site administrable avec Maracuja CMS, selon le besoin réel.',
  'class' => ['hero--page', 'hero--center']
]);
?>

<!-- FORMULES -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Nos trois formules</h2>

    <p class="section-intro">
      Chaque formule correspond à un niveau de besoin : présenter clairement votre activité,
      gagner en autonomie sur certains contenus, ou ajouter un usage métier adapté.
      Le choix ne part pas d’une technologie imposée, mais de ce que votre site doit vraiment permettre.
    </p>

    <div class="divider"></div>

    <table class="table--featured">
      <thead>
        <tr>
          <th>Critère</th>
          <th>
            <i data-lucide="leaf"></i>
            <strong>Essence</strong><br>
            à partir de 1&nbsp;500 – 2&nbsp;000 €
          </th>
          <th>
            <i data-lucide="star"></i>
            <strong>Signature</strong><br>
            à partir de 2&nbsp;200 – 2&nbsp;800 €
          </th>
          <th>
            <i data-lucide="globe"></i>
            <strong>Univers</strong><br>
            à partir de 3&nbsp;000 – 3&nbsp;800 €
          </th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><strong>Objectif</strong></td>
          <td>Présenter votre activité avec un site clair, professionnel et bien structuré.</td>
          <td>Valoriser votre savoir-faire avec plus de contenus, de pages et d’autonomie si utile.</td>
          <td>Construire un site plus complet avec des usages métier précis.</td>
        </tr>

        <tr>
          <td><strong>Format</strong></td>
          <td>Environ 5 pages principales.</td>
          <td>Jusqu’à 8 pages, avec contenus plus riches.</td>
          <td>Jusqu’à 12 pages, avec parcours ou module métier cadré.</td>
        </tr>

        <tr>
          <td><strong>Solution</strong></td>
          <td>Maracuja Site : vitrine simple, rapide et sur mesure.</td>
          <td>Maracuja Site enrichi ou Maracuja CMS léger.</td>
          <td>Maracuja CMS : site administrable métier avec modules adaptés.</td>
        </tr>

        <tr>
          <td><strong>Autonomie</strong></td>
          <td>Contenus stables, avec modifications ponctuelles si nécessaire.</td>
          <td>Actualités, galerie ou contenus récurrents selon le besoin.</td>
          <td>Catalogue, demandes qualifiées, réservations ou contenus structurés.</td>
        </tr>

        <tr>
          <td><strong>Pour qui ?</strong></td>
          <td>Une activité qui veut une présence claire et durable.</td>
          <td>Une activité qui doit montrer davantage de réalisations ou de contenus.</td>
          <td>Une activité qui a besoin d’un véritable outil de travail.</td>
        </tr>

        <tr>
          <td><strong>Support inclus</strong></td>
          <td>1 mois après mise en ligne.</td>
          <td colspan="2">2 mois après mise en ligne.</td>
        </tr>

        <tr>
          <td><strong>Frais externes</strong></td>
          <td colspan="3">
            Hébergement, nom de domaine, outils tiers, licences ou abonnements restent à votre charge.
          </td>
        </tr>

        <tr>
          <td><strong>Délais</strong></td>
          <td colspan="3">
            Environ 3 à 6 semaines après validation du devis et réception des éléments nécessaires.
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- PRODUITS -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Maracuja Site ou Maracuja CMS</h2>

    <p class="section-intro">
      Tous les projets n’ont pas besoin du même niveau d’outil.
      Un site simple suffit parfois. Dans d’autres cas, une administration ciblée devient utile.
    </p>

    <div class="grid grid--2">
      <div class="card">
        <i data-lucide="layout-template" class="card-icon"></i>
        <h3>Maracuja Site</h3>
        <p>
          Pour les sites vitrines simples : pages sur mesure, structure claire,
          formulaire de contact, direction visuelle et mise en ligne.
        </p>
        <p>
          Il n’impose pas d’administration inutile lorsque le site n’a pas vocation
          à changer souvent.
        </p>
      </div>

      <div class="card">
        <i data-lucide="panel-top" class="card-icon"></i>
        <h3>Maracuja CMS</h3>
        <p>
          Pour les sites qui doivent vivre dans le temps : actualités, galerie,
          catalogue, demandes qualifiées, réservation simple ou modules métier.
        </p>
        <p>
          L’administration reste volontairement ciblée : vous ne voyez que les contenus
          utiles à votre activité.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- PERIMETRE -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Base web, modules et prestations complémentaires</h2>
    <p>
      Le projet est découpé clairement : ce qui constitue la base du site,
      ce qui peut être ajouté comme module, et ce qui relève d’un accompagnement séparé.
    </p>
    <table>
      <thead>
        <tr>
          <th></th>
          <th>Base web</th>
          <th>Modules</th>
          <th>Prestations complémentaires</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Rôle</strong></td>
          <td>Construire le site : structure, pages, design, formulaire, mise en ligne.</td>
          <td>Ajouter un usage précis au site.</td>
          <td>Accompagner l’exploitation du site après ou autour du projet.</td>
        </tr>
        <tr>
          <td><strong>Exemples</strong></td>
          <td>
            Cadrage, pages principales, intégration des contenus fournis,
            responsive, tests principaux.
          </td>
          <td>
            Galerie, actualités, contenus administrables, catalogue simple,
            formulaire qualifié, réservation.
          </td>
          <td>
            SEO avancé, rédaction régulière, emailing, publicité,
            réseaux sociaux, e-commerce complet.
          </td>
        </tr>
        <tr>
          <td><strong>Quand ?</strong></td>
          <td>Inclus dans chaque formule.</td>
          <td>Ajoutés uniquement s’ils répondent à un vrai besoin.</td>
          <td>Chiffrées séparément selon le niveau d’accompagnement demandé.</td>
        </tr>
      </tbody>
    </table>
    <p>
      L’objectif n’est pas de tout rendre modifiable. L’objectif est de donner de l’autonomie
      là où elle est utile, tout en gardant le site clair, stable et maintenable.
    </p>
        <div>
      <?php render('btn', [
        'route' => 'offre-site-web',
        'label' => 'Découvrir le détail de l’offre de site web'
      ]); ?>
    </div>
  </div>
</section>

<!-- SUPPORT -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Support et maintenance</h2>

    <table class="table--simple">
      <thead>
        <tr>
          <th>Type</th>
          <th>Ce qui est compris</th>
          <th>Limites</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><strong>Support inclus</strong></td>
          <td>
            Assistance simple après la mise en ligne, pendant la durée prévue dans la formule.
          </td>
          <td>
            Corrections mineures et aide à la prise en main, sans ajout de nouvelles fonctionnalités.
          </td>
        </tr>

        <tr>
          <td><strong>Support annuel</strong><br>500 € / an</td>
          <td>
            Vérifications techniques, sauvegardes, mises à jour si nécessaire,
            test du formulaire, petites corrections et assistance simple.
          </td>
          <td>
            Les nouvelles pages, refontes, campagnes email, contenus réguliers
            ou SEO avancé font l’objet d’un devis séparé.
          </td>
        </tr>
      </tbody>
    </table>
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
          Un premier échange permet de clarifier le besoin, le niveau d’accompagnement nécessaire
          et la formule la plus adaptée.
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