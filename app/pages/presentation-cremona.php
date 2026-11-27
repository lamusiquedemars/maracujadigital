<?php
/**
 * Présentation métier ponctuelle de Cremona.
 * Pas de navigation ajoutée au site : l'URL peut être partagée directement.
 * Styles dédiés : public/assets/css/cremona.css.
 */
$apercus = require app_path('data/showcase-cremona.php');
?>
<div class="cremona-page">

  <section class="cremona-intro" aria-labelledby="cremona-title">
    <div class="container">
      <p class="cremona-eyebrow">Une solution métier par Maracuja Digital</p>
      <h1 id="cremona-title">Cremona</h1>
      <p class="cremona-intro__subtitle">La gestion des ateliers de lutherie et d’archèterie</p>
      <p class="cremona-intro__lead">Conçu en collaboration avec un luthier, Cremona réunit instruments, locations, travaux d’atelier, clients et gestion commerciale dans un même environnement.</p>
      <div class="cremona-intro__note">
        <strong>Pensé pour les pratiques du métier.</strong>
        <span>Des modules complémentaires et un niveau de suivi ajustable, du plus simple au plus détaillé.</span>
      </div>
      <a class="cremona-jump" href="#apercus">
        Voir les écrans de la solution
        <i data-lucide="arrow-down" aria-hidden="true"></i>
      </a>
    </div>
  </section>

  <section class="section cremona-section" aria-labelledby="cremona-metier">
    <div class="container">
      <p class="cremona-eyebrow">01 · Le quotidien de l’atelier</p>
      <h2 id="cremona-metier" class="cremona-heading">Chaque activité a sa place</h2>
      <p class="cremona-section__intro">Un instrument n’est pas une simple référence de catalogue : il peut être proposé à la vente, confié à l’atelier, réservé ou loué. Cremona suit ces situations et les opérations qui les accompagnent.</p>

      <div class="cremona-features">
        <article class="cremona-feature">
          <div class="cremona-feature__head">
            <span class="cremona-feature__icon" aria-hidden="true">
              <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M23 7v12m2-12v12"/>
                <circle cx="24" cy="5" r="2.1"/>
                <path d="M24 19c-3-3-7-5-10-2-3 3-1 7 2 10-4 3-5 7-3 11 2.3 4.5 7 5 11 2 4 3 8.7 2.5 11-2 2-4 1-8-3-11 3-3 5-7 2-10-3-3-7-1-10 2Z"/>
                <path d="M21 27c-2 1-2 3-1 5m7-5c2 1 2 3 1 5M24 19v21"/>
              </svg>
            </span>
            <h3>Instruments</h3>
          </div>
          <p>Inventaire, fiches techniques, photographies, prix, disponibilités et historique. Les instruments choisis peuvent être publiés dans un catalogue en ligne, sans mélanger données publiques et informations d’atelier.</p>
        </article>

        <article class="cremona-feature">
          <div class="cremona-feature__head">
            <span class="cremona-feature__icon" aria-hidden="true"><i data-lucide="file-check-2"></i></span>
            <h3>Parc locatif</h3>
          </div>
          <p>Grilles tarifaires, assurances, contrats PDF, accord en ligne nominatif et horodaté, remise et restitution. Les échéances et actions d’encaissement sont suivies ; les opérations bancaires restent à la banque.</p>
        </article>

        <article class="cremona-feature">
          <div class="cremona-feature__head">
            <span class="cremona-feature__icon" aria-hidden="true">
              <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M31 8a5 5 0 0 1 7 7L24 29l-7-7L31 8Z"/>
                <path d="m17 22 7 7-12 12-6 1 1-6 10-14Z"/>
                <path d="m8 39 3 3M32 15l4 4"/>
              </svg>
            </span>
            <h3>Travaux d’atelier</h3>
          </div>
          <p>Réglages, entretien, réparations et restaurations : réception, diagnostic, prestations, pièces, devis et suivi jusqu’à la restitution. Le niveau de détail s’adapte aux habitudes de l’atelier.</p>
        </article>

        <article class="cremona-feature">
          <div class="cremona-feature__head">
            <span class="cremona-feature__icon" aria-hidden="true"><i data-lucide="users-round"></i></span>
            <h3>Relation client</h3>
          </div>
          <p>Fiches clients, demandes, correspondances et historique. E-mails, essais, rendez-vous, tâches et relances restent reliés aux instruments, locations et interventions concernés.</p>
        </article>

        <article class="cremona-feature">
          <div class="cremona-feature__head">
            <span class="cremona-feature__icon" aria-hidden="true"><i data-lucide="calendar-days"></i></span>
            <h3>Agenda et suivi</h3>
          </div>
          <p>Une vue commune pour les rendez-vous, appels, tâches, interventions planifiées et retours de location. L’agenda est autonome ; une synchronisation externe peut être étudiée selon les besoins.</p>
        </article>

        <article class="cremona-feature">
          <div class="cremona-feature__head">
            <span class="cremona-feature__icon" aria-hidden="true"><i data-lucide="notebook-tabs"></i></span>
            <h3>Devis et activité</h3>
          </div>
          <p>Prestations et tarifs réutilisables, devis personnalisés, PDF, suivi des propositions et tableaux de bord. Chaque opération reste rattachée aux clients, instruments et dossiers de l’atelier.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section cremona-section cremona-section--gallery" id="apercus" aria-label="Aperçus de Cremona">
    <div class="container">
      <p class="cremona-eyebrow">02 · Quelques écrans</p>
      <?php
      render('showcase', [
        'title' => 'L’atelier en images',
        'intro' => 'Parcourez des vues de gestion et touchez une image pour l’agrandir.',
        'layout' => 'carousel',
        'class' => 'cremona-showcase',
        'lightbox' => true,
        'items' => $apercus,
      ]);
      ?>
    </div>
  </section>

  <section class="section cremona-section" aria-labelledby="cremona-services">
    <div class="container">
      <p class="cremona-eyebrow">03 · Services connectés</p>
      <h2 id="cremona-services" class="cremona-heading">Les outils spécialisés, au bon endroit</h2>
      <p class="cremona-section__intro">Les fonctions propres à la lutherie sont conçues dans Cremona. Pour d’autres usages, la solution s’appuie sur des services reconnus plutôt que de les recréer.</p>

      <div class="cremona-services">
        <article class="cremona-service">
          <div class="cremona-service__heading">
            <span class="cremona-service__icon" aria-hidden="true"><i data-lucide="receipt-text"></i></span>
            <div><p class="cremona-service__meta">Facturation électronique</p><h3>Super PDP</h3></div>
          </div>
          <p>Plateforme agréée pour les échanges réglementaires de factures électroniques. Cremona conserve une gestion commerciale liée au métier, sans se transformer en logiciel de comptabilité générale.</p>
        </article>
        <article class="cremona-service">
          <div class="cremona-service__heading">
            <span class="cremona-service__icon" aria-hidden="true"><i data-lucide="mail"></i></span>
            <div><p class="cremona-service__meta">Newsletters et e-mailing</p><h3>Brevo</h3></div>
          </div>
          <p>Une infrastructure professionnelle pour diffuser les campagnes e-mail, gérer les destinataires et les désinscriptions, avec les fonctionnalités de communication de Maracuja Site.</p>
        </article>
        <article class="cremona-service">
          <div class="cremona-service__heading">
            <span class="cremona-service__icon" aria-hidden="true"><i data-lucide="chart-no-axes-combined"></i></span>
            <div><p class="cremona-service__meta">Publicité en ligne</p><h3>Google Ads</h3></div>
          </div>
          <p>Préparation, activation et suivi des campagnes publicitaires, avec diffusion et facturation assurées directement par Google.</p>
        </article>
        <article class="cremona-service">
          <div class="cremona-service__heading">
            <span class="cremona-service__icon" aria-hidden="true"><i data-lucide="shield-check"></i></span>
            <div><p class="cremona-service__meta">Documents privés</p><h3>Scaleway</h3></div>
          </div>
          <p>Documents hors du site public, stockage privé, accès authentifié et contrôle des autorisations. Une solution souple pour les besoins courants, distincte d’un coffre-fort électronique certifié.</p>
        </article>
      </div>

      <div class="cremona-connected">
        <div class="cremona-connected__icon" aria-hidden="true"><i data-lucide="monitor-smartphone"></i></div>
        <div>
          <h3>Site internet et catalogue connectés</h3>
          <p>Avec <strong>Maracuja Site</strong>, l’atelier présente ses instruments, ses services et ses réalisations. Seules les données destinées au public sont publiées ; les demandes peuvent rejoindre le suivi client de Cremona.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section cremona-section cremona-section--closing" aria-labelledby="cremona-evolution">
    <div class="container">
      <div class="cremona-closing">
        <p class="cremona-eyebrow">04 · Une solution qui évolue</p>
        <h2 id="cremona-evolution" class="cremona-heading">Le niveau de détail qui convient à votre atelier</h2>
        <p>Les modules peuvent être combinés, configurés et complétés. Un atelier peut commencer par le suivi de ses instruments et de ses clients, puis approfondir les locations, les interventions ou la communication selon ses pratiques.</p>
        <p class="cremona-closing__credit">Cremona est développé par Maracuja Digital <strong>en collaboration avec un luthier</strong>, à partir des besoins réels de son atelier.</p>
        <a href="<?= e(route('contact')) ?>" class="btn btn-primary cremona-closing__cta">Prendre contact pour en savoir plus</a>
      </div>
    </div>
  </section>

</div>
