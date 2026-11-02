<!-- HERO -->
<?php
render('hero', [
  'title' => 'Parlons de votre projet.',
  'subtitle' => 'Vous souhaitez créer un site, développer votre clientèle ou simplifier la gestion de votre activité ? Présentez votre besoin, même s’il n’est pas encore précisément défini. Maracuja Digital vous accompagne pour identifier une solution adaptée, sans complexité inutile.',
  'class' => ['hero--page', 'hero--center'],
]);
?>

<!-- PRESENTATION -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Maracuja Digital</h2>

    <div class="contact-about">
      <figure class="contact-about__portrait">
        <img src="<?= e(img('ivo.png')) ?>" alt="Portrait d’Ivo Correia de Melo">
        <figcaption>Ivo Correia de Melo, fondateur de Maracuja Digital</figcaption>
      </figure>

      <div class="contact-about__content">
        <p>
          Maracuja Digital est une agence numérique indépendante, spécialisée dans la conception
          de solutions modulaires et personnalisables pour les artisans, les indépendants et les petites entreprises.
        </p>
        <p>
          Chaque projet associe proximité, développement sur mesure et accompagnement direct, pour identifier
          une solution adaptée sans complexité inutile. Un interlocuteur unique accompagne le projet de sa définition
          à sa mise en service, puis dans ses évolutions lorsque cela est nécessaire.
        </p>

        <h3>Ivo Correia de Melo</h3>
        <p>
          Fondateur de Maracuja Digital, Ivo Correia de Melo est développeur, consultant et chef de projet.
        </p>
        <p>
          Il travaille dans le numérique et les systèmes d’information depuis 2010, avec une expérience
          dans la conception web, la transformation des processus et la gestion de projets complexes.
        </p>
        <p>
          Il a travaillé pour des entreprises telles qu’Orange, Saint-Gobain, EDF, Engie, Criteo,
          Groupe SEB et GL Events, en coordonnant enjeux opérationnels, technologie et réalisation.
        </p>
        <p>
          Parallèlement, il est violoniste et archetier, avec un parcours musical entre Recife,
          Rome, Lyon et Paris. Cette double culture, digitale et musicale, nourrit une approche
          attentive aux usages, aux métiers et à l’identité de chaque projet.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- COORDONNEES -->
<section class="section contact-section">
  <div class="container">
    <h2 class="h2--moderne">Coordonnées</h2>

    <address class="contact-details">
      <a class="contact-detail" href="mailto:contact@maracujadigital.fr">
        <i data-lucide="mail" class="card-icon"></i>
        <span><strong>E-mail</strong>contact@maracujadigital.fr</span>
      </a>
      <a class="contact-detail" href="tel:+33786431583">
        <i data-lucide="phone" class="card-icon"></i>
        <span><strong>Téléphone</strong>+33 7 86 43 15 83</span>
      </a>
      <a class="contact-detail" href="https://maracujadigital.fr">
        <i data-lucide="globe" class="card-icon"></i>
        <span><strong>Site</strong>maracujadigital.fr</span>
      </a>
      <p class="contact-detail">
        <i data-lucide="map-pin" class="card-icon"></i>
        <span><strong>Adresse</strong>30 chemin de l’Écully<br>69660 Collonges-au-Mont-d’Or</span>
      </p>
    </address>
  </div>
</section>
