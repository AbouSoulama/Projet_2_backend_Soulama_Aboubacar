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
include("navigation.php")
?>

<section class="sect_11">

<h1>Recherche d'amis</h1>

<div class="rowss">

<div class="rech-col">
<h3>Recherche facile</h3>
<p>Entrez le nom ou l'adresse e-mail de votre ami pour le trouver rapidement.</p><br>
<button><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
</div>

<div class="rech-col">
<h3>Suggestion d'amis</h3>
<p>Connectez-vous avec des amis que vous avez perdu de vue en utilisant la suggestion d'amis basée sur votre réseau social.</p>
<button><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
</div>

<div class="rech-col">
<h3>Ajout facile</h3>
<p>Ajoutez un ami d'un simple clic sur le bouton "Ajouter un ami".</p><br><br>
<button><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
</div>

</div>

</section>

<section class="sect_12">
<h1>Notre réseau social</h1>

<div>



<div class="clearfix divi">
  <img src="1520129183869.jpeg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">

<p>Gratuit : Rejoignez notre réseau social gratuitement et connectez-vous avec des amis, des familles, et des collègues de travail.</p>
<p>Multilingue :

Notre site est disponible en plusieurs langues, y compris le français, l'anglais, l'allemand et l'espagnol.</p>
  <p>Multilingue :

Notre site est disponible en plusieurs langues, y compris le français, l'anglais, l'allemand et l'espagnol.</p>
  <p>
    Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue. Fusce dapibus, tellus ac cursus commodo, tortor mauris paddenstoel nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
  </p>

  <p>
    Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Id nullam tellus relem amet commodo telemque olemit. Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
  </p>

  <p>
    Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lantaarnpaal quam venenatis vestibulum. Donec sed odio dui. Maecenas faucibus mollis interdum. Nullam quis risus eget urna salsa tequila vel eu leo. Donec id elit non mi porta gravida at eget metus.
  </p>
</div>


</div>





</div>

</section>


<?php
include("footer.php")
?>