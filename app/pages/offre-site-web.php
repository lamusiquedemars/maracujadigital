<?php
$title = "Détail de l’offre site web";
$description = "Détail du périmètre des offres de création de sites web : socle inclus, modules, packs, options, prestations séparées et maintenance.";
?>

<!-- HERO -->
<?php
render('hero', [
  'title' => 'Détail de l’offre site web',
  'subtitle' => 'Une page de référence pour comprendre ce qui est inclus dans le site, ce qui peut être ajouté en module, et ce qui relève d’une prestation séparée.',
  'class' => ['hero--page', 'hero--center']
]);
?>

<!-- INTRO -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Un site web, un socle, des modules</h2>
    <p class="section-intro">
      Le site web constitue le socle : il présente l’activité, structure les informations,
      rassure les visiteurs et permet de recevoir des demandes. Autour de ce socle,
      certains modules peuvent être ajoutés selon les usages réels : galerie, actualités,
      catalogue, newsletter, réservation ou statistiques.
    </p>
    <p class="section-intro">
      Cette page sert à clarifier le périmètre. Elle distingue ce qui relève du site,
      ce qui relève d’un outil connecté, et ce qui devient une prestation de communication,
      de gestion client ou d’exploitation après mise en ligne.
    </p>
  </div>
</section>

<!-- SOCLE -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Socle inclus dans toute création de site</h2>

    <table class="table--simple">
      <thead>
        <tr>
          <th>Élément</th>
          <th>Ce qui est livré</th>
          <th>Déploiement concret</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Cadrage</strong></td>
          <td>Clarification du besoin, des pages, des contenus, des priorités et du parcours visiteur.</td>
          <td>Dossier de cadrage simple : objectifs, arborescence, pages, CTA, périmètre.</td>
        </tr>
        <tr>
          <td><strong>Pages principales</strong></td>
          <td>Pages nécessaires pour présenter l’activité, l’offre, la méthode et le contact.</td>
          <td>Pages PHP structurées ou pages WordPress selon la formule retenue.</td>
        </tr>
        <tr>
          <td><strong>Structure éditoriale</strong></td>
          <td>Organisation claire des informations pour rendre le site lisible et cohérent.</td>
          <td>Sections, titres, hiérarchie de contenu et parcours de lecture.</td>
        </tr>
        <tr>
          <td><strong>Direction visuelle</strong></td>
          <td>Interface sobre, cohérente et adaptée à l’univers existant du client.</td>
          <td>Styles, composants, typographies, couleurs, mise en page responsive.</td>
        </tr>
        <tr>
          <td><strong>Formulaire de contact</strong></td>
          <td>Réception des demandes depuis le site.</td>
          <td>Formulaire simple avec champs utiles, anti-spam léger et email de réception.</td>
        </tr>
        <tr>
          <td><strong>SEO de base</strong></td>
          <td>Pages techniquement propres pour l’indexation.</td>
          <td>Titles, descriptions, H1/H2, URLs propres, performance, responsive.</td>
        </tr>
        <tr>
          <td><strong>Mise en ligne</strong></td>
          <td>Installation du site sur le nom de domaine.</td>
          <td>Déploiement, configuration de base, SSL, tests principaux.</td>
        </tr>
        <tr>
          <td><strong>Dossier de livraison</strong></td>
          <td>Document de référence sur le site livré.</td>
          <td>Structure du site, choix réalisés, consignes d’usage et points d’attention.</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- FORMULES -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Formules de départ</h2>

    <table class="table--featured">
      <thead>
        <tr>
          <th>Formule</th>
          <th>Pour quel besoin</th>
          <th>Contenu typique</th>
          <th>Budget indicatif</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Essence</strong></td>
          <td>Présenter une activité clairement, sans outil complexe.</td>
          <td>Site vitrine, environ 5 pages, formulaire, carte, SEO de base, mise en ligne.</td>
          <td><strong>à partir de 1&nbsp;500 – 2&nbsp;000 €</strong></td>
        </tr>
        <tr>
          <td><strong>Signature</strong></td>
          <td>Valoriser un savoir-faire avec plus de contenus et plus d’autonomie.</td>
          <td>6 à 8 pages, galerie ou actualités administrables, contenus récurrents.</td>
          <td><strong>à partir de 2&nbsp;200 – 2&nbsp;800 €</strong></td>
        </tr>
        <tr>
          <td><strong>Univers</strong></td>
          <td>Ajouter un usage métier simple au site.</td>
          <td>Catalogue vitrine, réservation, formulaire métier, newsletter ou outil connecté.</td>
          <td><strong>à partir de 3&nbsp;000 – 3&nbsp;800 €</strong></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- PACKS -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Packs possibles</h2>
    <p class="section-intro">
      Les packs permettent d’ajouter des usages cohérents sans transformer le site en catalogue d’options.
      Ils sont choisis selon le besoin réel, pas systématiquement.
    </p>

    <div class="grid grid--3">
      <div class="card">
        <i data-lucide="image" class="card-icon"></i>
        <h3>Pack Présentation</h3>
        <p>
          Galerie simple, bloc témoignages, PDF téléchargeable ou page de réalisations.
        </p>
        <p><strong>+300 à 700 €</strong></p>
      </div>

      <div class="card">
        <i data-lucide="file-text" class="card-icon"></i>
        <h3>Pack Contenus</h3>
        <p>
          Actualités, FAQ, contenus administrables ou structure de blog simple.
        </p>
        <p><strong>+400 à 800 €</strong></p>
      </div>

      <div class="card">
        <i data-lucide="briefcase" class="card-icon"></i>
        <h3>Pack Métier</h3>
        <p>
          Catalogue vitrine, formulaire de demande qualifiée, réservation ou parcours dédié.
        </p>
        <p><strong>+700 à 1 500 €</strong></p>
      </div>

      <div class="card">
        <i data-lucide="mail" class="card-icon"></i>
        <h3>Pack Relation client</h3>
        <p>
          Formulaire newsletter, outil emailing, listes simples, modèle d’email initial.
        </p>
        <p><strong>+400 à 900 €</strong></p>
      </div>

      <div class="card">
        <i data-lucide="bar-chart-2" class="card-icon"></i>
        <h3>Pack Mesure</h3>
        <p>
          Installation d’un outil de statistiques et repères simples pour lire les visites.
        </p>
        <p><strong>+150 à 300 €</strong></p>
      </div>

      <div class="card">
        <i data-lucide="globe" class="card-icon"></i>
        <h3>Pack Multilingue</h3>
        <p>
          Structure bilingue ou multilingue, pages traduites et navigation adaptée.
        </p>
        <p><strong>+700 à 1 800 €</strong></p>
      </div>
    </div>
  </div>
</section>

<!-- MODULES DETAILLES -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Modules détaillés</h2>

    <table class="table--simple">
      <thead>
        <tr>
          <th>Module</th>
          <th>Besoin couvert</th>
          <th>Type</th>
          <th>Déploiement concret</th>
          <th>Repère de prix</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Galerie simple</strong></td>
          <td>Montrer des réalisations, instruments ou photos d’atelier.</td>
          <td>Module du site</td>
          <td>Composant <code>Gallery.php</code> + fichier <code>data/gallery.php</code>.</td>
          <td>+150 à 300 €</td>
        </tr>
        <tr>
          <td><strong>Galerie administrable</strong></td>
          <td>Permettre au client d’ajouter lui-même des photos.</td>
          <td>Module du site</td>
          <td>WordPress avec type de contenu dédié et champs image/légende/catégorie.</td>
          <td>+400 à 700 €</td>
        </tr>
        <tr>
          <td><strong>Catalogue vitrine</strong></td>
          <td>Présenter des produits sans vente en ligne.</td>
          <td>Module métier</td>
          <td>Fiches, catégories, statuts, filtres simples, sans paiement.</td>
          <td>+700 à 1 500 €</td>
        </tr>
        <tr>
          <td><strong>Actualités / blog</strong></td>
          <td>Publier régulièrement des nouvelles ou conseils.</td>
          <td>Module du site</td>
          <td>WordPress natif ou section administrable dédiée.</td>
          <td>+400 à 800 €</td>
        </tr>
        <tr>
          <td><strong>FAQ</strong></td>
          <td>Répondre aux questions fréquentes.</td>
          <td>Module du site</td>
          <td>Composant <code>Faq.php</code> + fichier <code>data/faq.php</code>.</td>
          <td>+150 à 300 €</td>
        </tr>
        <tr>
          <td><strong>Avis clients</strong></td>
          <td>Rassurer avec des témoignages.</td>
          <td>Module du site</td>
          <td>Composant <code>Testimonials.php</code> ou <code>QuoteCarousel.php</code> + fichier data.</td>
          <td>+150 à 300 €</td>
        </tr>
        <tr>
          <td><strong>Newsletter simple</strong></td>
          <td>Collecter des emails depuis le site.</td>
          <td>Option connectée</td>
          <td>Formulaire sur le site relié à un outil emailing externe.</td>
          <td>+200 à 400 €</td>
        </tr>
        <tr>
          <td><strong>Emailing ciblé</strong></td>
          <td>Envoyer un message à certaines catégories de clients.</td>
          <td>Prestation séparée</td>
          <td>Paramétrage listes/tags, modèle d’email, import initial.</td>
          <td>+400 à 800 €</td>
        </tr>
        <tr>
          <td><strong>Prise de rendez-vous</strong></td>
          <td>Réduire les échanges pour fixer un créneau.</td>
          <td>Option connectée</td>
          <td>Outil externe intégré en bouton, lien ou iframe.</td>
          <td>+300 à 700 €</td>
        </tr>
        <tr>
          <td><strong>Statistiques</strong></td>
          <td>Comprendre les visites principales.</td>
          <td>Option connectée</td>
          <td>Installation Plausible, Matomo ou GA4 selon le besoin.</td>
          <td>+150 à 300 €</td>
        </tr>
        <tr>
          <td><strong>Multilingue</strong></td>
          <td>Présenter le site en plusieurs langues.</td>
          <td>Module du site</td>
          <td>Pages séparées par langue ou WordPress multilingue selon autonomie attendue.</td>
          <td>+700 à 1 800 €</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- HORS PERIMETRE -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Ce qui relève d’une prestation séparée</h2>
    <p class="section-intro">
      Certains besoins sont proches du site, mais ne sont pas la création du site lui-même.
      Ils peuvent être proposés à part, ou confiés à un partenaire selon le niveau attendu.
    </p>

    <table class="table--simple">
      <thead>
        <tr>
          <th>Besoin</th>
          <th>Pourquoi ce n’est pas inclus par défaut</th>
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
          <td>La gestion client dépasse le site : statuts, suivi commercial, relances, historique.</td>
          <td>Mission de cadrage ou outil externe dédié.</td>
        </tr>
        <tr>
          <td><strong>SEO avancé</strong></td>
          <td>La visibilité durable demande recherche, contenus, suivi et ajustements.</td>
          <td>Prestation SEO séparée.</td>
        </tr>
        <tr>
          <td><strong>Réseaux sociaux</strong></td>
          <td>Publier régulièrement relève de la communication continue.</td>
          <td>Community management ou accompagnement éditorial.</td>
        </tr>
        <tr>
          <td><strong>Publicité en ligne</strong></td>
          <td>Les campagnes payantes demandent budget, suivi et optimisation.</td>
          <td>Traffic manager ou prestation spécialisée.</td>
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
            test du formulaire, petites corrections, remplacement ponctuel de contenu fourni,
            assistance simple par email.
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
        <h3>Le site</h3>
        <p>
          Il présente, structure, rassure et permet d’être contacté.
          C’est le cœur de l’offre.
        </p>
      </div>

      <div class="card">
        <i data-lucide="blocks" class="card-icon"></i>
        <h3>Les modules</h3>
        <p>
          Ils ajoutent des usages précis : galerie, actualités, catalogue,
          réservation, newsletter ou statistiques.
        </p>
      </div>

      <div class="card">
        <i data-lucide="megaphone" class="card-icon"></i>
        <h3>Les prestations séparées</h3>
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
          Le premier échange sert à distinguer le socle nécessaire, les modules utiles
          et les éléments qui doivent être traités séparément.
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