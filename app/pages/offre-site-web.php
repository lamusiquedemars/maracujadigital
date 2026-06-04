<?php
$title = "Détail de l’offre site web";
$description = "Détail du périmètre des offres de création de sites web : base web, modules, prestations complémentaires et maintenance.";
?>

<!-- HERO -->
<?php
render('hero', [
  'title' => 'Détail de l’offre site web',
  'subtitle' => 'Une page de référence pour comprendre la base du site, les modules possibles et les prestations complémentaires.',
  'class' => ['hero--page', 'hero--center']
]);
?>

<!-- INTRO -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Construire le bon périmètre</h2>

    <p class="section-intro">
      Un site web peut rester une vitrine simple, ou devenir un outil administrable avec des contenus,
      des demandes, un catalogue ou des modules métier. Cette page sert à clarifier ce qui fait partie
      de la base du projet, ce qui peut être ajouté, et ce qui relève d’un accompagnement séparé.
    </p>

    <p class="section-intro">
      Maracuja Digital travaille avec deux solutions : <strong>Maracuja Site</strong> pour les vitrines
      simples, et <strong>Maracuja CMS</strong> pour les sites administrables avec modules adaptés.
    </p>
  </div>
</section>

<!-- BASE WEB -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">La base web</h2>

    <p class="section-intro">
      La base web correspond au cœur du projet. Elle permet de présenter l’activité, structurer les informations,
      rassurer les visiteurs et recevoir des demandes.
    </p>

    <table class="table--simple">
      <thead>
        <tr>
          <th>Élément</th>
          <th>Ce que cela couvre</th>
          <th>Concrètement</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><strong>Cadrage</strong></td>
          <td>Clarifier le besoin, les pages, les priorités et le parcours visiteur.</td>
          <td>Objectifs, arborescence, contenus attendus, CTA et périmètre du projet.</td>
        </tr>

        <tr>
          <td><strong>Pages principales</strong></td>
          <td>Présenter l’activité, l’offre, la méthode, les preuves et le contact.</td>
          <td>Pages sur mesure, adaptées à la formule choisie.</td>
        </tr>

        <tr>
          <td><strong>Structure éditoriale</strong></td>
          <td>Organiser les informations pour guider clairement le visiteur.</td>
          <td>Sections, titres, hiérarchie de contenu et parcours de lecture.</td>
        </tr>

        <tr>
          <td><strong>Direction visuelle</strong></td>
          <td>Créer une interface cohérente avec l’univers du client.</td>
          <td>Mise en page, typographies, couleurs, composants et adaptation mobile.</td>
        </tr>

        <tr>
          <td><strong>Contact</strong></td>
          <td>Permettre aux visiteurs d’envoyer une demande facilement.</td>
          <td>Formulaire simple, liens utiles, carte si nécessaire, réception par email.</td>
        </tr>

        <tr>
          <td><strong>SEO de base</strong></td>
          <td>Construire des pages propres pour l’indexation.</td>
          <td>Titles, descriptions, H1/H2, URLs propres, performance et responsive.</td>
        </tr>

        <tr>
          <td><strong>Mise en ligne</strong></td>
          <td>Installer le site sur le nom de domaine du client.</td>
          <td>Déploiement, configuration de base, SSL et tests principaux.</td>
        </tr>

        <tr>
          <td><strong>Document de référence</strong></td>
          <td>Garder une trace claire du site et de son fonctionnement.</td>
          <td>Structure du site, choix réalisés, accès utiles et consignes d’usage.</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- FORMULES -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Repères par formule</h2>

    <table class="table--featured">
      <thead>
        <tr>
          <th>Formule</th>
          <th>Besoin principal</th>
          <th>Solution habituelle</th>
          <th>Budget indicatif</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><strong>Essence</strong></td>
          <td>Présenter une activité clairement, sans outil complexe.</td>
          <td>Maracuja Site : site vitrine, environ 5 pages, formulaire, SEO de base, mise en ligne.</td>
          <td><strong>à partir de 1&nbsp;500 – 2&nbsp;000 €</strong></td>
        </tr>

        <tr>
          <td><strong>Signature</strong></td>
          <td>Valoriser un savoir-faire avec plus de contenus et une première autonomie si utile.</td>
          <td>Maracuja Site enrichi ou Maracuja CMS léger : galerie, actualités ou contenus récurrents.</td>
          <td><strong>à partir de 2&nbsp;200 – 2&nbsp;800 €</strong></td>
        </tr>

        <tr>
          <td><strong>Univers</strong></td>
          <td>Ajouter un usage métier ou un parcours plus structuré.</td>
          <td>Maracuja CMS : catalogue vitrine, demandes qualifiées, réservation ou module dédié.</td>
          <td><strong>à partir de 3&nbsp;000 – 3&nbsp;800 €</strong></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- MODULES -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Bibliothèque de modules</h2>

    <p class="section-intro">
      Les modules ne sont pas ajoutés automatiquement. Ils servent à répondre à un usage précis :
      montrer, publier, qualifier une demande, organiser un contenu ou connecter un outil externe.
    </p>

    <table class="table--simple">
      <thead>
        <tr>
          <th>Module</th>
          <th>Usage</th>
          <th>Solution</th>
          <th>Repère de prix</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><strong>Galerie / réalisations</strong></td>
          <td>Montrer des projets, instruments, photos d’atelier ou références.</td>
          <td>Galerie simple sur Maracuja Site, ou galerie administrable avec Maracuja CMS.</td>
          <td>+150 à 700 €</td>
        </tr>

        <tr>
          <td><strong>Actualités / contenus</strong></td>
          <td>Publier des nouvelles, conseils, événements ou contenus récurrents.</td>
          <td>Section administrable avec Maracuja CMS.</td>
          <td>+400 à 800 €</td>
        </tr>

        <tr>
          <td><strong>FAQ / témoignages</strong></td>
          <td>Rassurer les visiteurs et répondre aux questions fréquentes.</td>
          <td>Bloc simple intégré au site, administrable ou non selon le besoin.</td>
          <td>+150 à 400 €</td>
        </tr>

        <tr>
          <td><strong>Catalogue vitrine</strong></td>
          <td>Présenter des produits, instruments, services ou références sans vente en ligne.</td>
          <td>Fiches, catégories, statuts et filtres simples avec Maracuja CMS.</td>
          <td>+700 à 1 500 €</td>
        </tr>

        <tr>
          <td><strong>Formulaire qualifié</strong></td>
          <td>Recevoir des demandes plus précises qu’un simple message de contact.</td>
          <td>Champs adaptés au métier, réception organisée, éventuel suivi dans l’administration.</td>
          <td>+300 à 800 €</td>
        </tr>

        <tr>
          <td><strong>Newsletter simple</strong></td>
          <td>Collecter des emails depuis le site.</td>
          <td>Formulaire relié à un outil emailing externe.</td>
          <td>+200 à 400 €</td>
        </tr>

        <tr>
          <td><strong>Prise de rendez-vous</strong></td>
          <td>Réduire les échanges pour fixer un créneau.</td>
          <td>Intégration d’un outil externe adapté, ou module simple si le besoin est limité.</td>
          <td>+300 à 700 €</td>
        </tr>

        <tr>
          <td><strong>Statistiques</strong></td>
          <td>Comprendre les visites principales sans dispositif lourd.</td>
          <td>Installation d’un outil de mesure et repères simples de lecture.</td>
          <td>+150 à 300 €</td>
        </tr>

        <tr>
          <td><strong>Multilingue</strong></td>
          <td>Présenter le site en plusieurs langues.</td>
          <td>Structure bilingue ou multilingue, navigation adaptée, pages traduites.</td>
          <td>+700 à 1 800 €</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- PRESTATIONS SEPAREES -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Prestations complémentaires</h2>

    <p class="section-intro">
      Certains besoins sont liés au site, mais dépassent la création du site lui-même.
      Ils peuvent être proposés à part, ou confiés à un partenaire selon le niveau attendu.
    </p>

    <table class="table--simple">
      <thead>
        <tr>
          <th>Besoin</th>
          <th>Pourquoi c’est séparé</th>
          <th>Traitement possible</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><strong>Emailing régulier</strong></td>
          <td>Il faut écrire, segmenter, envoyer et suivre les campagnes.</td>
          <td>Prestation de communication digitale.</td>
        </tr>

        <tr>
          <td><strong>CRM complet</strong></td>
          <td>La gestion client dépasse le site : suivi commercial, relances, historique.</td>
          <td>Mission de cadrage ou outil externe dédié.</td>
        </tr>

        <tr>
          <td><strong>SEO avancé</strong></td>
          <td>La visibilité durable demande recherche, contenus, suivi et ajustements.</td>
          <td>Prestation SEO séparée.</td>
        </tr>

        <tr>
          <td><strong>Réseaux sociaux</strong></td>
          <td>La publication régulière relève de la communication continue.</td>
          <td>Accompagnement éditorial ou community management.</td>
        </tr>

        <tr>
          <td><strong>Publicité en ligne</strong></td>
          <td>Les campagnes payantes demandent budget, suivi et optimisation.</td>
          <td>Prestation spécialisée ou partenaire.</td>
        </tr>

        <tr>
          <td><strong>Photos / vidéos</strong></td>
          <td>La qualité des visuels dépend d’une production dédiée.</td>
          <td>Photographe, vidéaste ou partenaire.</td>
        </tr>

        <tr>
          <td><strong>E-commerce complet</strong></td>
          <td>Vente, paiement, livraison, stock, emails, CGV et maintenance forment un projet à part.</td>
          <td>Projet spécifique sur devis.</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- MAINTENANCE -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Support annuel</h2>

    <p class="section-intro">
      Le support annuel permet de garder le site stable après la mise en ligne,
      sans le transformer en abonnement de production illimitée.
    </p>

    <table class="table--simple">
      <thead>
        <tr>
          <th>Forfait</th>
          <th>Inclus</th>
          <th>Limites</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><strong>500 € / an</strong></td>
          <td>
            Vérification technique périodique, sauvegardes, mises à jour si nécessaire,
            test du formulaire, petites corrections, remplacement ponctuel de contenu fourni
            et assistance simple par email.
          </td>
          <td>
            Les nouvelles pages, nouveaux modules, refonte graphique, rédaction régulière,
            SEO avancé, campagnes emailing et urgences prioritaires ne sont pas inclus.
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- SYNTHESE -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Lecture simple</h2>

    <div class="grid grid--3">
      <div class="card">
        <i data-lucide="layout-template" class="card-icon"></i>
        <h3>Base web</h3>
        <p>
          Elle présente, structure, rassure et permet d’être contacté.
          C’est le cœur de chaque projet.
        </p>
      </div>

      <div class="card">
        <i data-lucide="blocks" class="card-icon"></i>
        <h3>Modules</h3>
        <p>
          Ils ajoutent des usages précis : galerie, actualités, catalogue,
          réservation, newsletter ou statistiques.
        </p>
      </div>

      <div class="card">
        <i data-lucide="megaphone" class="card-icon"></i>
        <h3>Prestations complémentaires</h3>
        <p>
          Elles concernent l’exploitation après mise en ligne :
          communication, emailing, SEO avancé, publicité ou gestion client.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container">
    <div class="split">
      <div class="split__item">
        <img
          src="<?= e(img('desk-sunlight.png')) ?>"
          alt="Bureau de travail avec ordinateur, carnet et jus de fruit">
      </div>

      <div class="split__item">
        <h2>Construire le bon périmètre</h2>

        <p>
          Le premier échange sert à distinguer la base web nécessaire,
          les modules utiles et les éléments qui doivent être traités séparément.
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