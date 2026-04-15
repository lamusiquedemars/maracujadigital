<!-- HERO -->
<?php
render('hero', [
  'title' => 'Entrons en contact.',
  'subtitle' => 'Pour échanger sur un projet ou une collaboration, vous pouvez me contacter ici.',
  'class' => ['hero--page', 'hero--center'],
  'link' => '',
  'label' => ''
]);
?>
<!-- VALEUR -->
<section class="section">
  <div class="container">
    <div class="grid grid--2-3">
      <div class="card card--ghost">
        <h2 class="h2--moderne">Pourquoi travailler avec moi</h2>
        <p>
          Chaque projet commence par un échange pour comprendre vos besoins, qu’il s’agisse d’un site web ou d’un accompagnement en gestion de projet.
          Cela permet de cadrer rapidement la bonne approche et d’avancer de manière claire et structurée.
        </p>
        <p>
          J’ai travaillé sur des projets de grande ampleur en environnements grands comptes, ce qui m’a donné une vraie rigueur dans le pilotage,
          la structuration et la prise de décision.
        </p>
        <p>
          D'un parcours également issu de la musique et de la pédagogie, ainsi que d’une pratique artisanale,
          j’ai développé une sensibilité à l’écoute, au détail et à la relation humaine.
        </p>
        <p>
          J’ai choisi de travailler au plus près des artisans, indépendants et TPE, parce que j’aime la proximité,
          les échanges directs, et le fait de rendre leur travail visible.
        </p>
        <p>
          Je cherche à mettre cette combinaison de rigueur et de sensibilité au service de ces personnes, avec des solutions utiles et adaptées à leur réalité.
        </p>
      </div>
      <div class="card card--ghost">
        <img src="<?= asset('img/ivo.png') ?>" alt="Photo de Ivo Correia" class="card-image">
      </div>
    </div>
  </div>
</section>

<!-- COORDONNEES -->
<section class="section">
  <div class="container">
    <div class="grid">
      <h2 class="h2--moderne">Un projet, une mission, une idée&nbsp;?</h2>
      <p class="text-muted">
        Je réponds personnellement à chaque message sous 24–48h.
        Décrivez-moi votre besoin, je vous propose une approche claire et adaptée.
      </p>
    </div>
    <div class="grid grid--3">
      <a href="mailto:contact@maracujaconsulting.fr" class="card">
        <i data-lucide="mail" class="card-icon"></i>
        <h3>Email</h3>
        <p>contact@maracujaconsulting.fr</p>
        <span class="btn btn-ghost">Écrire un message</span>
      </a>
      <a href="https://fr.linkedin.com/in/ivo-correia" target="_blank" class="card">
        <i data-lucide="briefcase" class="card-icon"></i>
        <h3>LinkedIn</h3>
        <p>Pour échanger professionnellement...</p>
        <span class="btn btn-ghost">Voir le profil</span>
      </a>
      <a href="https://www.instagram.com/ivo_incidit/" target="_blank" class="card">
        <i data-lucide="camera" class="card-icon"></i>
        <h3>Instagram</h3>
        <p>... Ou suivre mon travail d’archetier !</p>
        <span class="btn btn-ghost">Découvrir</span>
      </a>
    </div>
  </div>
</section>