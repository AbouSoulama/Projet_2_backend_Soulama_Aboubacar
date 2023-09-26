<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=Mon_réseau', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());

}
?>


    
<?php

include('navigation.php')

?>

    
    
    
    <section class="sect_1">

    <div>
      <h1>Réseau clicseer</h1><br><br>
      <p>Bienvenue sur notre réseau social innovant,<br> conçu pour connecter les personnes du <br> monde entier et faciliter la communication.</p>
    </div>
    
    <div class="fott">
    <img src="depositphotos_84426898-stock-photo-woman-holding-social-media-doodle.jpg" alt="">
    </div>

    </section>
    

  <section class="sect_2">
  
  <h1>Fonctionnalités principales</h1>
  
  <div class="rows">
  
  
  <div class="fonc-col">
  <img src="aa.jpeg" alt="" style="margin-left: 30%;"> 
  <h3>Création de profil</h3><br>
  <p>Créez votre profil en quelques clics et partagez vos informations, vos intérêts et vos activités.Changez votre photo de profil, votre photo de couverture et ajoutez une brève description pour...</p><br>
  <button><a href="profil.php" style="text-decoration: none; color: wheat;">Joindre votre profil</a></button>
  </div>
  <div class="fonc-col">
  <img src="heureux-amis-filles-heureux-assis-dans-cafe-aide-ordinateur-portable-prendre-selfie-par-telephone_171337-94262.avif" alt="">
  <img src="5-cles-pour-reussir-sa-photo-de-profil-facebook.jpeg" alt="">
  <img src="iy1ex3cookmf9cme5qlnxa.jpg" alt="">
  <h3>Recherche et ajout d'amis</h3><br>
  <p>Recherchez et ajoutez des amis sur notre plateforme. Restez connecté avec ceux que vous connaissez et découvrez de nouveaux amis.</p><br><br>
  <button> <a href="retouvez des amis.php" style="text-decoration: none; color: wheat;">Retrouvez des amis</a></button>
  </div>
  <div class="fonc-col">
  <i class="fa-solid fa-file-video i"></i>
  <i class="fa-solid fa-file-audio i"></i>
  <i class="fa-brands fa-playstation i"></i>
  <i class="fa-brands fa-google-play i"></i><br><br>
  <h3>Publication de contenu multimédia</h3><br>
  <p>Partagez des photos, des vidéos, et des articles intéressants et parcourez les publications de vos amis pour découvrir ce qui se passe dans leur vie.</p>
   <button>Faire une publications</button>
  </div>
  <div class="fonc-col">
    <i class="fas fa-comments u"></i>
    <i class="fas fa-users u"></i><br><br>
  <h3>Messagerie privée</h3><br>
  <p>Contactez vos amis et discutez en toute sécurité avec notre service de messagerie privée.Envoyez des messages privés en direct pour discuter...</p><br><br><br>
 <button>Entré dans la messagerie</button>
  
  </div>
  
  </section>
    
    
    
    <section class="sect_3">
    
    <h1>Fil d'actualitées</h1><br><br>
    <img src="1200px-L'Actualité_(logo).svg.png" alt="" class="im">
   
   
    <div>
    
    
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="padding: 10% 10%;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="iy1ex3cookmf9cme5qlnxa.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Découvrez de nouvelles publications</h5>
              <p>Voyez les publications les plus populaires de vos amis et découvrez-en de nouveaux</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="e34c067_86d0a1a87d55426abc5481fe88f3ac97-86d0a1a87d55426abc5481fe88f3ac97-0.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>J'aime et commentaires</h5>
              <p>Exprimez votre soutien ou votre désaccord en aimant ou en commentant les publications que vous voyez.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="8945490-14187532.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Réactions émotionnelles</h5>
              <p>Appuyez sur les réactions émotionnelles pour montrer vos sentiments envers une </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Communaute_reduite_acquets_Shutterstock_897x505.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color: rgb(0, 0, 0);">Réactions émotionnelles</h5>
              <p style="color: rgb(0, 0, 0);">Appuyez sur les réactions émotionnelles pour montrer vos sentiments envers une </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="maxresdefault.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Réactions émotionnelles</h5>
              <p>Appuyez sur les réactions émotionnelles pour montrer vos sentiments envers une </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="300d2b82883e217e4d2e34e0dfc5ac1a.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Réactions émotionnelles</h5>
              <p>Appuyez sur les réactions émotionnelles pour montrer vos sentiments envers une </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="000000060204.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Réactions émotionnelles</h5>
              <p>Appuyez sur les réactions émotionnelles pour montrer vos sentiments envers une </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
   
    
    </div>
    </section>
    
    
    <section class="sect_4">
    
    <h1>Événements</h1><br>
    
    
    <div class="rows">
    
    
    <div class="even-col">
    <h3>Création d'événements</h3><br><br>
    <p>Créez un événement pour inviter des amis, célébrer une occasion spéciale ou organiser une rencontre en ligne.</p><br>
    <a href="#" class="btn btn-primary">Button</a>
    </div>
    
    <div class="even-col">
    <h3>Participation à des événements</h3><br>
    <p>Participez à des événements organisés par vos amis ou votre communauté locale.</p><br>
    <a href="#" class="btn btn-primary">Button</a>
    </div>
    
    <div class="even-col">
    <h3>Planification d'activités en groupe</h3><br>
    <p>Planifiez une activité en groupe en créant un événement ou en rejoignant un groupe existant.</p><br>
    <a href="#" class="btn btn-primary">Button</a>
    </div>
  
    </div>
    </section>
    
    <section class="sect_5">
    <h1>Offres et options premium</h1>
    
    
    <!-- <div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 10% 10%;">
      <div class="col">
        <div class="card">
          <img src="over-3.4-billion-people-actively-use-social-media--october-22-2018.webp" class="card-img-top" alt="Hollywood Sign on The Hill"/>
          <div class="card-body">
            <h5 class="card-title">Abonnement</h5>
            <p class="card-text">
              Profitez d'avantages exclusifs avec notre abonnement premium, y compris un accès illimité aux fonctionnalités premium.
            </p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="X-Brands-That-Have-No-Competition-on-Social-Media-in-2021.jpg" class="card-img-top" alt="Palm Springs Road"/>
          <div class="card-body">
            <h5 class="card-title">Boutique en Ligne</h5>
            <p class="card-text">
              Découvrez notre boutique en ligne pour acheter des articles uniques exclusivement pour les membres premium.
            </p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="How-to-Create-a-Social-Media-Marketing-Strategy-in-9-Easy-Steps-Free-Template.png" class="card-img-top" alt="Los Angeles Skyscrapers"/>
          <div class="card-body">
            <h5 class="card-title">Annonces Publicitaires</h5>
            <p class="card-text">Augmentez la visibilité de votre entreprise avec nos offres publicitaires personnalisées. egalement</p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
      </div>
    </div> -->
    
    <div class="rows">
    
    <div class="offre-col">
    <img src="over-3.4-billion-people-actively-use-social-media--october-22-2018.webp" alt=""><br><br>
    <h3>Abonnement</h3>
    <p>Profitez d'avantages exclusifs avec notre abonnement premium, y compris un accès illimité aux fonctionnalités premium.</p>
    </div>
    
    <div class="offre-col">
    <img src="X-Brands-That-Have-No-Competition-on-Social-Media-in-2021.jpg" alt=""><br><br>
    <h3>Boutique en Ligne</h3>
    <p>Découvrez notre boutique en ligne pour acheter des articles uniques exclusivement pour les membres premium.</p>
    </div>
    
    <div class="offre-col">
      <img src="aa.jpeg" alt=""><br><br>
      <h3>Annonces Publicitaires</h3>
      <p>Augmentez la visibilité de votre entreprise avec nos offres publicitaires personnalisées.</p>
    </div>
    
    
    </div>
    </section>
    
    
    <section class="sect_6">
    
    <h1>Communauté</h1>
    
    <div>
    
    
      <div class="card bg-dark text-white" style="margin-left: 15%;margin-right: 15%; border: none; margin-bottom: 5%;">
        <img src="communaute-engagee.jpg" class="card-img" alt="Stony Beach"/>
        <div class="card-img-overlay">
          <h5 class="card-title">Communauté</h5><br>
          <h6 class="card-text">
            Rejoignez une communauté active de personnes de partout dans le monde. Interagissez, partagez vos opinions et vos idées et découvrez de nouveaux amis. Rejoignez-nous aujourd'hui et commencez à vous connecter.
          </h6><br>
          <p class="card-text">Il ya 3 minutes</p>
        </div>
      </div>
    
    </div>
    
    </section>
    
    
    
    <?php
    include('footer.php')
    ?>
    
    
    
    