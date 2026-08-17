<!-- HERO -->
<?php
render('hero', [
  'title' => 'Contact',
  'subtitle' => 'Maracuja Digital, studio digital indépendant basé à Collonges-au-Mont-d’Or.',
  'class' => ['hero--page', 'hero--center'],
  'link' => '',
  'label' => ''
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
          Maracuja Digital est un studio digital indépendant fondé en 2025, spécialisé dans
          la conception et le développement de solutions digitales sur mesure pour les entreprises,
          les professionnels et les organisations.
        </p>
        <p>
          Le studio réunit conseil, cadrage, conception et développement, avec un interlocuteur
          unique pour accompagner le projet de sa définition à sa mise en ligne.
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
