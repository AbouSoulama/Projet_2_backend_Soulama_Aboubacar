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

<section class="sect_13">

<h1>Modifier votre profil</h1>

<div class="rowss">

<div class="modi-col">
<h3>Personnalisation du profil</h3>
<p>Changez votre photo de profil, votre photo de couverture et ajoutez une brève description pour présenter aux autres votre personnalité.</p>
<button><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
</div>

<div class="modi-col">
<h3>Paramètres de confidentialité</h3>
<p>Définissez vos paramètres de confidentialité pour avoir un contrôle total sur qui peut voir votre profil et vos publications.</p>
<button><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
</div>

<div class="modi-col">
<h3>Gestion de compte</h3>
<p>Gérez votre compte à partir d'un seul emplacement en modifiant vos informations personnelles et de compte.</p>
<button><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
</div>
<br><br>



</div>

</section>



<section class="sect_14">
<h1>Découvrez le monde a travers notre page</h1>
<div>

<div class="card mb-3 dern" style="max-width: 750px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img
        src="actualite-logo.jpg"
        alt="Trendy Pants and Shoes"
        class="img-fluid rounded-start"
      />
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Le monde</h5>
        <p class="card-text">
          This is a wider card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
        <p class="card-text">
          <small class="text-muted">Last updated 3 mins ago</small>
        </p>
      </div>
    </div>
  </div>
</div>





</div>



</section><br><br>



<?php
include('footer.php')
?>