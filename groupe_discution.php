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
<br><br>
<section class="sect_7">

<h1>Groupe de discution</h1>

<div>

<div class="rowss">
  
  
  <div class="group-col">
  <img src="How-to-Create-a-Social-Media-Marketing-Strategy-in-9-Easy-Steps-Free-Template.png" alt="">
  <h3>Rejoignez des groupes</h3>
  <p>Rejoignez des groupes pour discuter de sujets tels que la cuisine, la politique, les voyages et bien plus encore.</p><br><br>
  <button><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
  </div>
  <div class="group-col">
  <img src="5-cles-pour-reussir-sa-photo-de-profil-facebook.jpeg" alt="">
  <h3>Créez votre propre groupe</h3>
  <p>Créez votre propre groupe pour partager des idées, des conseils et des expériences avec d'autres personnes ayant les mêmes centres d'intérêt.</p>
  <button><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
  </div>
  <div class="group-col">
  <img src="communaute.jpg" alt="">
  <h3>Discussions en groupe</h3>
  <p>Discutez avec les membres de votre groupe en temps réel pour partager des informations et créer des communautés actives et dynamiques.</p><br>
  <button><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
  </div>


</div>



</section><br><br>

<section class="sect_9">

<div class="term">
<h1>Terminé ?</h1>
<p>Rejoignez notre communauté dès aujourd'hui pour être connecté, informé et inspiré.</p>
</div>

</section><br><br><br>





<?php
include('footer.php')
?>