<?php
$title = "Pourquoi un site web ?";
?>

<!-- HERO -->
 <?php
  render('hero', [
  'title' => 'Un site web n’est plus une vitrine. C’est un outil de décision.',
  'subtitle' => 'Aujourd’hui, le vrai enjeu n’est pas d’être visible en ligne, mais d’être compris rapidement, 
  perçu correctement, et choisi sans hésitation.',
  'class' => ['hero--page', 'hero--center']
]);
?>
<!-- INTRO GÉNÉRALE -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Un site web n’est plus une vitrine</h2>
    <p class="lead">
      Aujourd’hui, une activité artisanale ou indépendante n’a plus vraiment un problème de visibilité.
      Les gens trouvent, regardent, comparent — souvent en quelques secondes.
    </p>
    <p>
      Le vrai blocage se situe ailleurs : ils ne comprennent pas assez vite ce que vous faites,
      ce qui vous distingue, ni pourquoi cela justifie votre positionnement.
    </p>
    <p>
      Le site web moderne n’est plus une simple présence en ligne.
      C’est l’endroit où une activité devient lisible, où une offre prend forme,
      et où une décision commence à se construire.
    </p>
    <hr>
    <p class="text-accent">
      Voici 5 situations concrètes, comparées à ce qu’un site web professionnel change réellement.
    </p>
  </div>
</section>


<!-- CAS 1 -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">1. Présence uniquement sur Instagram / Etsy / plateformes</h2>

    <p>
      Ici, l’activité existe uniquement via une plateforme comme Instagram ou Etsy.
      L’artisan publie ses créations, reçoit des messages privés et vend parfois directement via ces canaux.
      Il n’a pas de site web indépendant.
    </p>

    <table class="table--featured">
      <thead>
        <tr>
          <th>Situation actuelle</th>
          <th>Ce qui est en jeu</th>
          <th>Ce qui est perdu</th>
          <th>Site web professionnel</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Activité dépendante d’Instagram / Etsy</td>
          <td>Visibilité contrôlée par une plateforme externe</td>
          <td>Dépendance à l’algorithme et instabilité du trafic</td>
          <td>Canal indépendant et stable</td>
        </tr>

        <tr>
          <td>Communication via DM</td>
          <td>Échanges individuels avant conversion</td>
          <td>Forte friction et perte de prospects</td>
          <td>Parcours clair vers contact ou achat</td>
        </tr>

        <tr>
          <td>Découverte par feed</td>
          <td>Visibilité aléatoire</td>
          <td>Manque de trafic qualifié constant</td>
          <td>Acquisition via Google (intention forte)</td>
        </tr>

        <tr>
          <td>Pas de structure d’offre</td>
          <td>Informations dispersées</td>
          <td>Compréhension lente</td>
          <td>Offre claire et lisible immédiatement</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>


<!-- CAS 2 -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">2. Site ancien (10 ans ou plus)</h2>

    <p>
      Ici, l’activité possède déjà un site web, mais celui-ci n’a pas été réellement mis à jour depuis longtemps.
      Le design, la structure et le contenu reflètent une autre époque du web.
    </p>

    <table class="table--featured">
      <thead>
        <tr>
          <th>Situation actuelle</th>
          <th>Ce qui est en jeu</th>
          <th>Ce qui est perdu</th>
          <th>Site web professionnel</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Design daté</td>
          <td>Première impression visuelle</td>
          <td>Baisse immédiate de crédibilité</td>
          <td>Image moderne et premium</td>
        </tr>

        <tr>
          <td>Non adapté mobile</td>
          <td>Expérience utilisateur principale sur smartphone</td>
          <td>Perte importante de visiteurs</td>
          <td>Expérience mobile-first optimisée</td>
        </tr>

        <tr>
          <td>SEO obsolète</td>
          <td>Visibilité sur Google</td>
          <td>Acquisition gratuite perdue</td>
          <td>Trafic organique continu</td>
        </tr>

        <tr>
          <td>Contenu figé</td>
          <td>Perception de l’activité</td>
          <td>Image d’activité inactive</td>
          <td>Image actuelle et vivante</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>


<!-- CAS 3 -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">3. Site généré via IA / builders (Ionos, Hostinger, Wix AI…)</h2>

    <p>
      Ici, le site a été créé rapidement avec un outil automatisé ou un constructeur assisté par IA.
      Il est fonctionnel, mais repose sur des modèles standardisés.
    </p>

    <table class="table--featured">
      <thead>
        <tr>
          <th>Situation actuelle</th>
          <th>Ce qui est en jeu</th>
          <th>Ce qui est perdu</th>
          <th>Site web professionnel</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Templates automatiques</td>
          <td>Rapidité de création</td>
          <td>Absence d’identité forte</td>
          <td>Différenciation réelle</td>
        </tr>

        <tr>
          <td>Design générique</td>
          <td>Présence en ligne</td>
          <td>Manque de mémorisation</td>
          <td>Marque reconnaissable</td>
        </tr>

        <tr>
          <td>Contenu standard</td>
          <td>Facilité de mise en place</td>
          <td>Faible impact émotionnel</td>
          <td>Narration sur mesure</td>
        </tr>

        <tr>
          <td>SEO basique</td>
          <td>Visibilité initiale</td>
          <td>Faible acquisition long terme</td>
          <td>Acquisition durable</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>


<!-- CAS 4 -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">4. Site Wix ou WordPress fait soi-même</h2>

    <p>
      Ici, le site est construit directement par l’artisan lui-même avec des outils comme Wix ou WordPress.
      L’objectif est d’être autonome, mais sans accompagnement stratégique.
    </p>

    <table class="table--featured">
      <thead>
        <tr>
          <th>Situation actuelle</th>
          <th>Ce qui est en jeu</th>
          <th>Ce qui est perdu</th>
          <th>Site web professionnel</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Création autonome</td>
          <td>Économie de coût initial</td>
          <td>Manque de vision globale</td>
          <td>Structure stratégique</td>
        </tr>

        <tr>
          <td>Design variable</td>
          <td>Liberté de construction</td>
          <td>Perte de cohérence</td>
          <td>Identité visuelle forte</td>
        </tr>

        <tr>
          <td>WordPress/plugins empilés</td>
          <td>Puissance technique</td>
          <td>Complexité et lenteur</td>
          <td>Système optimisé et stable</td>
        </tr>

        <tr>
          <td>Site informatif</td>
          <td>Présence digitale</td>
          <td>Faible conversion</td>
          <td>Site orienté business</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- CAS 5 -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">5. Site existant mais non exploité</h2>

    <p>
      Ici, un site existe déjà, mais il ne joue quasiment aucun rôle dans l’activité.
      Il n’est pas optimisé, peu visité et rarement utilisé dans le parcours client.
    </p>

    <table class="table--featured">
      <thead>
        <tr>
          <th>Situation actuelle</th>
          <th>Ce qui est en jeu</th>
          <th>Ce qui est perdu</th>
          <th>Site web professionnel</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Site en ligne mais inactif</td>
          <td>Présence digitale passive</td>
          <td>Potentiel totalement inutilisé</td>
          <td>Actif d’acquisition</td>
        </tr>

        <tr>
          <td>Pas de trafic</td>
          <td>Visibilité sur le web</td>
          <td>Opportunités perdues</td>
          <td>Trafic qualifié Google</td>
        </tr>

        <tr>
          <td>Non intégré au parcours client</td>
          <td>Décision d’achat</td>
          <td>Aucun impact commercial</td>
          <td>Rôle central dans la conversion</td>
        </tr>

        <tr>
          <td>Contenu faible</td>
          <td>Image perçue</td>
          <td>Manque de crédibilité</td>
          <td>Contenu structuré et convaincant</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>


<!-- SYNTHÈSE -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Synthèse</h2>

    <table class="table--featured">
      <thead>
        <tr>
          <th>Situation globale</th>
          <th>Constat</th>
          <th>Impact business</th>
          <th>Rôle du site pro</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Instagram seul</td>
          <td>Dépendance plateforme + friction</td>
          <td>Conversion instable</td>
          <td>Structure + indépendance</td>
        </tr>

        <tr>
          <td>Site ancien</td>
          <td>Crédibilité dégradée</td>
          <td>Perte de clients premium</td>
          <td>Image modernisée</td>
        </tr>

        <tr>
          <td>Site builder IA</td>
          <td>Présence générique</td>
          <td>Faible différenciation</td>
          <td>Positionnement fort</td>
        </tr>

        <tr>
          <td>DIY Wix / WordPress</td>
          <td>Structure non optimisée</td>
          <td>Conversion faible</td>
          <td>Optimisation business</td>
        </tr>

        <tr>
          <td>Site invisible</td>
          <td>Actif sous-exploité</td>
          <td>Opportunités perdues</td>
          <td>Acquisition continue</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>


<!-- INCLUS -->
<section class="section">
  <div class="container no-padding">
    <div class="card card--featured card--maracuja">
      <h2 class="h2--moderne">Ce qu’un site web professionnel change réellement</h2>

      <ul class="ul-icon">
        <li><i data-lucide="target"></i>Clarifie instantanément la valeur de l’activité</li>
        <li><i data-lucide="award"></i>Augmente la crédibilité dès les premières secondes</li>
        <li><i data-lucide="message-circle"></i>Transforme l’intérêt en prise de contact</li>
        <li><i data-lucide="trending-up"></i>Améliore la perception de valeur et le positionnement prix</li>
        <li><i data-lucide="mail"></i>Génère des demandes qualifiées en continu</li>
        <li><i data-lucide="share2"></i>Réduit la dépendance aux plateformes externes</li>
      </ul>
    </div>
  </div>
</section>


<!-- OPTIONS -->
<section class="section">
  <div class="container no-padding">
    <h2 class="h2--moderne">Ce qui fait réellement la différence</h2>

    <div class="grid grid--3">
      <div class="card">
        <i data-lucide="target" class="card-icon"></i>
        <h3>Clarté immédiate</h3>
        <p>
          Le visiteur comprend l’activité et sa valeur en quelques secondes, sans effort.
        </p>
      </div>

      <div class="card">
        <i data-lucide="award" class="card-icon"></i>
        <h3>Crédibilité instantanée</h3>
        <p>
          Le site influence directement la perception de qualité et de sérieux.
        </p>
      </div>

      <div class="card">
        <i data-lucide="trending-up" class="card-icon"></i>
        <h3>Conversion naturelle</h3>
        <p>
          Le parcours est structuré pour transformer l’intérêt en action sans friction.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- PROCESS -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Conclusion</h2>

    <div class="card card--ghost">
      <span class="btn btn-ghost">
        La différence entre une présence digitale classique et un site web professionnel ne se joue pas sur la visibilité, mais sur la capacité à transformer une attention en décision.
      </span>
    </div>
  </div>
</section>