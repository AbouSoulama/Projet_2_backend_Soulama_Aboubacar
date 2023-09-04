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
<section class="sect_8">

<h1>Messagerie privée</h1>


<div class="rowss">

<div class="mess-col">
<h3>Messages instantanés</h3>
<p>Envoyez des messages privés en direct pour discuter avec vos amis en ligne.</p><br>
<button><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
</div>

<div class="mess-col">
<h3>Intégration des images</h3>
<p>Partagez des images et des vidéos depuis votre téléphone portable ou votre ordinateur dans le fil de conversation.</p>
<button><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
</div>

<div class="mess-col">
<h3>Notifications instantanées</h3>
<p>Recevez des notifications instantanées lorsqu'un ami répond à votre message.</p><br>
<button><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
</div>



</div>


</section><br><br>


<section class="sect_10">
<h1>Paramètres de confidentialité</h1>


<div class="cont">

<div>
<div class="confi">
<div class="num">1</div>
<div class="gauch"><h3> Contenu public vs. privé</h3><br>
<p>Vous pouvez choisir de rendre <br> votre contenu public ou privé, à tout <br>moment.</p></div>
</div><br>

<div class="confi">
<div class="num">2</div>
<div class="gauch"><h3> Contrôle des notifications</h3><br>
<p>Recevez des notifications seulement <br> pour les personnes et les événements qui <br> vous intéressent.</p></div>
</div><br>

</div>


<div>
<div class="confi">
<div class="num">3</div>
<div class="gauch"><h3> Blocage d'utilisateurs</h3><br>
<p>Bloquez des utilisateurs gênants ou <br> indésirables pour protéger votre compte.</p></div>
</div><br>

<div class="confi">
<div class="num">4</div>
<div class="gauch"><h3> Gestion des données personnelles</h3><br>
<p>Nous mettons à votre disposition des outils <br> pour gérer vos données personnelles et <br> contrôler qui peut y accéder.</p></div>
</div><br>
</div>
</div>


</section>

<br><br>
<?php
include('footer.php')
?>