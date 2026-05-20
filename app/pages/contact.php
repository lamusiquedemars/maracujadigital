<!-- HERO -->
<?php
render('hero', [
  'title' => 'Entrons en contact.',
  'subtitle' => 'Pour parler d’un site web, d’un projet digital ou d’une collaboration.',
  'class' => ['hero--page', 'hero--center'],
  'link' => '',
  'label' => ''
]);
?>

<!-- VALEUR -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Un premier échange pour étudier le besoin</h2>
    <div class="grid grid--2-3">
      <div class="card card--ghost">
        <p>
          Un projet web commence rarement par une solution toute faite.
          Il faut d’abord comprendre l’activité, les objectifs, les contenus disponibles, les contraintes et le niveau d’accompagnement nécessaire.
        </p>

        <p>
          Cette étape permet de vérifier si le besoin relève d’un site vitrine, d’un accompagnement plus structuré, d’une refonte, ou d’un projet digital plus large.
        </p>

        <p>
          Maracuja Digital fonctionne avec un interlocuteur principal, une méthode de cadrage issue de l’AMOA, et la possibilité de mobiliser des compétences complémentaires selon le projet : photographie, graphisme, référencement ou communication.
        </p>

        <p class="lead">
          Avant de produire, le besoin est clarifié.
          Avant de développer, la structure est posée.
          Avant de mettre en ligne, les choix sont validés.
        </p>
      </div>

      <div class="card">
        <h3>Ce premier échange permet de vérifier</h3>
        <ul class="ul-icon">
          <li><i data-lucide="check"></i>le type de projet à engager</li>
          <li><i data-lucide="check"></i>le niveau de cadrage nécessaire</li>
          <li><i data-lucide="check"></i>les contenus déjà disponibles</li>
          <li><i data-lucide="check"></i>les compétences complémentaires à prévoir</li>
          <li><i data-lucide="check"></i>la formule ou l’approche la plus adaptée</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- COORDONNEES -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Un projet, une mission, une idée&nbsp;?</h2>

    <p class="text-muted">
      Maracuja Digital est une structure indépendante basée près de Lyon, portée par Ivo Correia de Melo.
      Pour un site web, une refonte ou un accompagnement de projet digital, vous pouvez envoyer un message directement par email.
    </p>
    <div class="split">
      <div class="split__item">
        <img src="<?= e(img('desk-maracuja.png')) ?>" alt="Bureau de travail avec ordinateur, carnet et jus de fruit">
      </div>
      <div class="split__item">
        <div class="card card--featured card--maracuja">
          <i data-lucide="mail" class="card-icon"></i>
          <h3>Contacter Maracuja Digital</h3>
          <p>
            Votre message sera lu directement par Ivo Correia de Melo.
            Indiquez simplement le contexte, le besoin et l’état d’avancement du projet.
          </p>
          <p>
            <a href="mailto:contact@maracujaconsulting.fr" class="btn btn-primary">Écrire un message</a>
          </p>
        </div>
      </div>
    </div>


  </div>
</section>