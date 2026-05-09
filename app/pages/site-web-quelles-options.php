<?php
$title = "Faire son site web : quelles options ?";
?>

<!-- HERO -->
<?php
render('hero', [
  'title' => 'Faire son site web : quelles options selon son besoin, son budget et son niveau d’autonomie ?',
  'subtitle' => 'Builder IA, Wix, Webflow, WordPress, site sur mesure : chaque solution peut être pertinente, à condition de comprendre ce qu’elle implique en temps de construction, en coût et en maintenance.',
  'class' => ['hero--page', 'hero--center']
]);
?>

<!-- INTRO -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Il n’existe pas une seule “bonne solution”</h2>
    <p class="lead">
      Aujourd’hui, pour créer un site web, il n’y a pas qu’une seule “bonne solution”.
      Il y a des solutions adaptées à des contextes différents.
    </p>
    <p>
      Ainsi, un site très simple, fait pour exister en ligne, ne demande pas le même niveau de conception
      qu’un site qui doit porter une image professionnelle, publier régulièrement des actualités ou évoluer dans le temps.
    </p>
    <p>
      Prenons donc le temps de comparer les options les plus populaires aujourd’hui.
      Partons d’un exemple assez courant : un site vitrine de 5 pages avec une petite partie actualités.
      C’est parlant, parce que ça force à parler contenu, structure, maintenance, coûts, autonomie et évolutivité.
    </p>
  </div>
</section>

<!-- SOLUTIONS -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Les différentes options</h2>
    <h3>1. Le site-builder-hébergeur : Hostinger, IONOS, GoDaddy, etc.</h3>
    <p>
      C’est la solution la plus directe. On prend un hébergement, on utilise son constructeur intégré, on choisit un modèle,
      on modifie les textes et les images. Hostinger met par exemple en avant un builder sans code avec outils IA et des prix d’appel très bas ;
      IONOS présente aussi son Website Builder comme une solution utilisable sans compétence en code ou design.
    </p>
    <p>
      C’est adapté à quelqu’un qui veut une présence en ligne rapidement, avec un budget réduit, et qui accepte une personnalisation limitée.
      Pour un site de 5 pages, c’est souvent suffisant si l’enjeu principal est seulement d’avoir une carte de visite en ligne.
    </p>
    <p>
      Le coût est faible au départ, souvent quelques euros par mois, mais il faut faire attention aux prix promotionnels
      et aux tarifs de renouvellement, qui remontent après la période initiale.
    </p>
    <div class="divider"></div>
    <h3>2. Wix ou Squarespace : le builder plus complet</h3>
    <p>
      Ici, on reste dans le no-code, mais avec plus de modèles, plus d’options, plus de confort graphique.
      Wix est souvent présenté comme l’un des builders les plus complets, avec templates, IA et fonctions marketing ;
      Squarespace est plutôt reconnu pour ses templates visuels et son positionnement créatif.
    </p>
    <p>
      C’est pertinent pour un indépendant, un artisan, un créatif ou une petite structure qui veut un rendu plus soigné sans
      entrer dans la technique. Le coût devient généralement plus élevé qu’un builder d’hébergeur, surtout si l’on ajoute domaine, email, fonctionnalités marketing ou e-commerce léger.
    </p>
    <p>
      Pour notre client avec son site vitrine, le point important serait : Wix ou Squarespace ne vendent pas seulement un site,
      ils vendent un environnement fermé et confortable. C’est pratique, mais la liberté technique reste limitée.
    </p>
    <div class="divider"></div>
    <h3>3. Webflow ou Framer : plus de design, plus d’exigence</h3>
    <p>
      Webflow et Framer sont intéressants parce qu’ils ne s’adressent pas exactement au même public que les builders grand public.
      Ils permettent une construction visuelle plus fine, des animations, une vraie logique de design, et parfois un CMS pour gérer des contenus.
      Webflow indique que les plans de site sont nécessaires pour publier, avec options CMS selon l’offre ;
      Framer propose aussi des plans avec CMS, localisation et domaine personnalisé selon les niveaux.
    </p>
    <p>
      C’est adapté à quelqu’un qui veut un rendu plus moderne, plus maîtrisé visuellement, mais qui accepte un outil plus technique.
      Pour un site de 5 pages avec actualités, Webflow ou Framer peuvent être très bons, mais l’inconvénient est que ce n’est plus vraiment “simple”
      pour un débutant. La prise en main, le responsive, la gestion du contenu et des modules demandent du temps.
    </p>
    <p>
      Certes, ce sont des outils puissants, mais pas magiques. Ils réduisent le code visible, pas le travail de conception.
    </p>
    <div class="divider"></div>

    <h3>4. WordPress : flexible, répandu, mais à cadrer</h3>
    <p>
      WordPress est probablement la solution la plus connue pour un site vitrine avec actualités : c’est même son ADN.
      Avec un thème ou un builder moderne comme Elementor, on peut créer un site administrable, publier des articles, ajouter des pages, gérer le SEO, les formulaires, les extensions. Elementor affiche des offres payantes à partir d’un abonnement annuel, en plus de l’hébergement WordPress éventuel.
    </p>
    <p>
      C’est pertinent si le site doit vivre : actualités, articles, pages qui évoluent, autonomie du client. Mais WordPress demande de la méthode et un effort d’administration régulier. Sans cadrage, on peut vite empiler thème, plugins, widgets, réglages et dépendances. Le site reste fonctionnel, mais devient plus lourd à maintenir.
    </p>
    <p>
      C’est ici que cette solution peut perdre sa puissance : WordPress est excellent quand il est structuré. Il devient pénible quand il est mal administré.
    </p>
    <div class="divider"></div>

    <h3>5. Shopify : surtout pour vendre</h3>
    <p>
      Shopify n’est pas vraiment une solution naturelle pour un site vitrine simple. C’est une plateforme e-commerce. Elle devient pertinente dès qu’il y a catalogue, panier, paiement, livraison, gestion de commandes. Shopify affiche bien un abonnement mensuel, et prélève une commission sur les ventes.
    </p>
    <p>
      Pour notre cas, nous pouvons dire simplement : Shopify est très fort pour vendre, mais ne convient pas pour un simple site de présentation avec quelques actualités. Le coût mensuel et l’écosystème d’apps se justifient si le commerce est au cœur du projet.
    </p>
    <div class="divider"></div>

    <h3>6. Site sur mesure léger : HTML/CSS/PHP ou framework simple</h3>
    <p>
      Un site sur mesure léger n’est pas forcément une usine à gaz, bien au contraire. Pour cinq pages, une galerie et des actualités simples, on peut construire une base propre, rapide, claire, avec un code parfaitement adapté et maîtrisé. Le coût initial est plus élevé qu’un builder, mais c’est un investissement unique, et donc amorti souvent dès la deuxième année.
    </p>
    <p>
      La valeur de cette solution se situe dans trois choses : le contenu est pensé, la structure est adaptée, et le code est optimisé. Ce n’est pas “plus technologique” pour impressionner. C’est plus maîtrisé.
    </p>
    <p>
      C’est la solution adaptée à quelqu’un qui veut un site professionnel, sobre, durable, sans abonnement lourd à une plateforme de création, et qui préfère déléguer les choix de structure, de contenu et de mise en œuvre, afin de de concentrer sur son propre métier.
    </p>
    <div class="divider"></div>

    <h3>7. Site accompagné par un professionnel</h3>
    <p>
      Ici, in ne s’agit pas d’appliquer une technologie en soi, mais de la définir en fonction du besoin du client.
    </p>
    <p>
      Un professionnel peut travailler avec WordPress, Webflow, un builder, du code maison ou une solution hybride.
      La différence ne vient donc pas seulement de l’outil. Elle vient de la manière dont le projet est cadré.
    </p>
    <p>
      C’est là où se situe la valeur : <strong> professionnel ne remplace pas seulement le client devant l’écran. Il l’aide à décider</strong>.
    </p>
  </div>
</section>

<!-- TABLEAU -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Comparaison des solutions</h2>

    <table class="table--featured">
      <thead>
        <tr>
          <th>Solution</th>
          <th>Pour quel besoin</th>
          <th>Budget récurrent</th>
          <th>Temps à prévoir</th>
          <th>Point fort</th>
          <th>Limite</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Builder hébergeur</td>
          <td>Présence rapide</td>
          <td>faible</td>
          <td>faible à moyen</td>
          <td>rapide et économique</td>
          <td>personnalisation limitée</td>
        </tr>

        <tr>
          <td>Wix / Squarespace</td>
          <td>Site propre sans technique</td>
          <td>moyen</td>
          <td>moyen</td>
          <td>confort et rendu visuel</td>
          <td>dépendance plateforme</td>
        </tr>

        <tr>
          <td>Webflow / Framer</td>
          <td>Site design moderne</td>
          <td>moyen à élevé</td>
          <td>moyen à fort</td>
          <td>liberté visuelle</td>
          <td>prise en main réelle</td>
        </tr>

        <tr>
          <td>WordPress</td>
          <td>Site vivant avec actualités</td>
          <td>variable</td>
          <td>moyen</td>
          <td>flexible et répandu</td>
          <td>maintenance à cadrer</td>
        </tr>

        <tr>
          <td>Shopify</td>
          <td>Vente en ligne</td>
          <td>mensuel + frais</td>
          <td>moyen</td>
          <td>e-commerce solide</td>
          <td>inutile pour vitrine simple</td>
        </tr>

        <tr>
          <td>Sur mesure léger</td>
          <td>Site durable et maîtrisé</td>
          <td>faible à variable</td>
          <td>faible côté client</td>
          <td>code et structure propres</td>
          <td>moins administrable sans CMS</td>
        </tr>

        <tr>
          <td>Pro accompagné</td>
          <td>Besoin de recul et cohérence</td>
          <td>prestation initiale</td>
          <td>faible côté client</td>
          <td>clarté, structure, livraison</td>
          <td>coût initial plus élevé</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- CTA FINAL -->
<section class="section">
  <div class="container">
    <h2 class="h2--moderne">Conclusion</h2>
    <div class="split">
      <div class="split__item">
        <img
          src="<?= e(img('desk-lamp.png')) ?>"
          alt="Bureau de travail avec ordinateur, carnet et jus de fruit">
      </div>
      <div class="split__item">
        <div class="card card--featured card--maracuja">
          <p>
            La bonne solution n’est pas forcément la plus puissante.
            C’est celle qui correspond au vrai besoin du client, au temps disponible, au niveau d’autonomie souhaité 
            et à l’importance du site dans l’activité.
          </p>
          <p>
            Si l’objectif est simplement d’exister en ligne, un builder peut suffire.
          </p>
          <p>
            Si l’objectif est d’avoir un site clair, cohérent, évolutif et aligné avec son activité, l’accompagnement prend tout son sens.
          </p>
          <p>
            <a href="<?= route('contact') ?>" class="btn">Présenter un projet</a>
          </p>
        </div>
      </div>

    </div>
  </div>
</section>