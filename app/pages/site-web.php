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
      Chaque formule correspond à un niveau de besoin : présenter clairement votre activité,
      gagner en autonomie sur vos contenus, ou ajouter des fonctionnalités métier simples.
      Le périmètre exact est confirmé après un premier cadrage.
    </p>
    <div class="divider"></div>

    <table class="table--featured">
      <thead>
        <tr>
          <th>Critère</th>
          <th><i data-lucide="leaf"></i><strong>Essence</strong><br>à partir de 1&nbsp;500 – 2&nbsp;000 €</th>
          <th><i data-lucide="star"></i><strong>Signature</strong><br>à partir de 2&nbsp;200 – 2&nbsp;800 €</th>
          <th><i data-lucide="globe"></i><strong>Univers</strong><br>à partir de 3&nbsp;000 – 3&nbsp;800 €</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Objectif</strong></td>
          <td>Présenter votre activité avec un site clair, professionnel et bien structuré.</td>
          <td>Valoriser votre savoir-faire avec plus de contenus, de pages et d’autonomie.</td>
          <td>Ajouter des usages précis : catalogue, demandes qualifiées, réservation ou outil connecté.</td>
        </tr>
        <tr>
          <td><strong>Structure</strong></td>
          <td>Environ 5 pages principales.</td>
          <td>Jusqu’à 8 pages, avec galerie, actualités ou contenus administrables selon le besoin.</td>
          <td>Jusqu’à 12 pages, avec un module métier cadré et un parcours plus complet.</td>
        </tr>
        <tr>
          <td><strong>Technologie</strong></td>
          <td>Site maison léger, rapide et sécurisé.</td>
          <td>Site maison ou WordPress selon le niveau d’autonomie attendu.</td>
          <td>WordPress ou solution hybride avec outil externe connecté si nécessaire.</td>
        </tr>
        <tr>
          <td><strong>Autonomie</strong></td>
          <td>Modifications ponctuelles possibles sur certains contenus cadrés.</td>
          <td>Gestion autonome des actualités, images ou contenus récurrents.</td>
          <td>Gestion autonome de contenus structurés : catalogue, demandes, réservations ou modules dédiés.</td>
        </tr>
        <tr>
          <td><strong>Fonctionnalités</strong></td>
          <td>Pages, formulaire de contact, carte, liens sociaux, galerie simple si utile.</td>
          <td>Socle + actualités, galerie administrable ou module de contenu simple.</td>
          <td>Signature + module métier cadré : catalogue, réservation ou outil connecté.</td>
        </tr>
        <tr>
          <td><strong>Support après mise en ligne</strong></td>
          <td>1 mois de support simple.</td>
          <td colspan="2">2 mois de support simple.</td>
        </tr>
        <tr>
          <td><strong>Frais externes</strong></td>
          <td colspan="3">Hébergement, nom de domaine, outils tiers, licences ou abonnements restent à votre charge.</td>
        </tr>
        <tr>
          <td><strong>Délais</strong></td>
          <td colspan="3">Environ 3 à 6 semaines après validation du devis et réception des éléments nécessaires.</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- INCLUS -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Ce qui est inclus dans le site</h2>
    <p class="section-intro">
      Le site couvre le socle nécessaire pour présenter votre activité, rassurer vos visiteurs
      et recevoir des demandes. Les outils de communication, de vente ou de gestion client sont ajoutés
      uniquement lorsqu’ils répondent à un besoin réel.
    </p>

    <div class="split">
      <div class="split__item">
        <h3>Le socle commun</h3>
        <ul class="ul-icon">
          <li><i data-lucide="leaf"></i>Cadrage du projet : besoin, pages, contenus, parcours et priorités.</li>
          <li><i data-lucide="leaf"></i>Structure claire des pages et organisation des informations.</li>
          <li><i data-lucide="leaf"></i>Direction visuelle personnalisée à partir de votre univers existant.</li>
          <li><i data-lucide="leaf"></i>Intégration des textes, images et éléments fournis.</li>
          <li><i data-lucide="leaf"></i>Formulaire de contact, carte de localisation et liens utiles.</li>
          <li><i data-lucide="leaf"></i>Développement responsive, tests principaux et optimisation du chargement.</li>
          <li><i data-lucide="leaf"></i>Mise en ligne sur votre nom de domaine.</li>
          <li><i data-lucide="leaf"></i>Dossier de livraison : structure du site, choix réalisés et consignes d’usage.</li>
        </ul>

        <p><a href="<?= route('methode') ?>" class="btn">Connaître l'approche dans le détail</a></p>
      </div>

      <div class="split__item">
        <img src="<?= img('desk-process.png') ?>" alt="Bureau de travail avec schémas, carnet et jus de fruit">
      </div>
    </div>
  </div>
</section>

<!-- SOCLE / MODULES / HORS SITE -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Socle, modules et prestations séparées</h2>

    <p class="section-intro">
      Un site web n’est pas automatiquement un outil de communication complet.
      Certains besoins relèvent du site lui-même, d’autres d’outils connectés,
      et d’autres encore d’un accompagnement séparé.
    </p>

    <table class="table--simple">
      <thead>
        <tr>
          <th>Besoin</th>
          <th>Réponse proposée</th>
          <th>Position</th>
          <th>Repère de prix</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Présenter l’activité</td>
          <td>Pages principales, structure, design, formulaire, mise en ligne.</td>
          <td><strong>Inclus dans le site</strong></td>
          <td>Inclus</td>
        </tr>
        <tr>
          <td>Montrer des réalisations</td>
          <td>Galerie simple, portfolio ou sélection de projets.</td>
          <td><strong>Module du site</strong></td>
          <td>Inclus selon formule ou +150 à 400 €</td>
        </tr>
        <tr>
          <td>Administrer des contenus</td>
          <td>Actualités, galerie administrable, contenus récurrents.</td>
          <td><strong>Module du site</strong></td>
          <td>+400 à 800 €</td>
        </tr>
        <tr>
          <td>Présenter un catalogue sans vendre en ligne</td>
          <td>Fiches, catégories, statuts, filtres simples.</td>
          <td><strong>Module métier</strong></td>
          <td>+700 à 1 500 €</td>
        </tr>
        <tr>
          <td>Collecter des contacts</td>
          <td>Formulaire newsletter relié à un outil externe.</td>
          <td><strong>Option connectée</strong></td>
          <td>+200 à 400 €</td>
        </tr>
        <tr>
          <td>Informer certains clients</td>
          <td>Listes, tags, modèle d’email, paramétrage initial.</td>
          <td><strong>Prestation séparée</strong></td>
          <td>+400 à 800 €</td>
        </tr>
        <tr>
          <td>Prendre rendez-vous</td>
          <td>Intégration d’un outil de réservation adapté.</td>
          <td><strong>Option connectée</strong></td>
          <td>+300 à 700 €</td>
        </tr>
        <tr>
          <td>Vendre en ligne</td>
          <td>Paiement, produits, livraison, emails, conditions de vente.</td>
          <td><strong>Projet spécifique</strong></td>
          <td>Sur devis</td>
        </tr>
        <tr>
          <td>Développer la visibilité</td>
          <td>SEO avancé, contenus réguliers, publicité ou réseaux sociaux.</td>
          <td><strong>Prestation séparée</strong></td>
          <td>Sur devis</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- LIMITES CLAIRES -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Des limites claires dès le départ</h2>

    <div class="grid grid--3">
      <div class="card">
        <i data-lucide="layout-template" class="card-icon"></i>
        <h3>Le site</h3>
        <p>
          Il sert à présenter, structurer, rassurer et recevoir des demandes.
          C’est le cœur de l’offre.
        </p>
      </div>

      <div class="card">
        <i data-lucide="plug" class="card-icon"></i>
        <h3>Les modules</h3>
        <p>
          Galerie, actualités, catalogue, réservation ou newsletter peuvent être ajoutés
          selon l’usage attendu.
        </p>
      </div>

      <div class="card">
        <i data-lucide="megaphone" class="card-icon"></i>
        <h3>L’exploitation</h3>
        <p>
          Emailing, SEO avancé, publicité, réseaux sociaux ou communication régulière
          sont des prestations séparées.
        </p>
      </div>
    </div>

    <p class="section-intro">
      Cette séparation permet de construire un site utile sans transformer le projet
      en dispositif trop lourd. Le devis précise ce qui est inclus, ce qui est optionnel,
      et ce qui relève d’un accompagnement complémentaire.
    </p>
  </div>
</section>

<!-- SUPPORT -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Support et maintenance</h2>

    <p class="section-intro">
      Après la mise en ligne, un support simple est inclus pendant la période indiquée dans la formule.
      Un support annuel peut ensuite être ajouté pour garder le site propre et éviter les petits blocages.
    </p>

    <table class="table--simple">
      <thead>
        <tr>
          <th>Support annuel</th>
          <th>Ce qui est compris</th>
          <th>Limites</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>500 € / an</strong></td>
          <td>
            Vérifications techniques, sauvegardes, mises à jour si nécessaire,
            test du formulaire, petites corrections et assistance simple.
          </td>
          <td>
            Les nouvelles pages, nouvelles fonctionnalités, refontes, campagnes email,
            contenus réguliers ou SEO avancé font l’objet d’un devis séparé.
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