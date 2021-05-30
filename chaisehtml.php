<?php
require 'db.class.php';
require 'panier.php';
$DB = new DB();
$panier = new panier();
?>
<!DOCTYPE html>
<head>
 <title>Ece MarketPlace</title>
 <link href="home.css" rel="stylesheet" type="text/css" />
 <link href="favicon.ico" rel="icon" type="images/x-icon" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 <meta charset="utf-8" />

 <div >
  <!--Affichage du logo-->
  <a href = "homehtml.php">
    <img src="logo.png" alt=""/>
  </a>


  <!--Bande défilante-->
  <marquee behavior="scroll" direction="left" width="100%" bgcolor="#EEEEEE">
   <h2>SITE DE VENTE DE MEUBLES / OBJETS D'ART / ACCESSOIRES VIP / MATERIEL SCOLAIRE</h2>
 </marquee><br></h1>
</div>
</div >


<!-- création des boutons-->
<div>
  <ul>
    <!--Bouton classique-->
    <a href="homehtml.php" onclick="myFunction()" class="dropbtn" class = "button">Accueil</a>
    <!--Bouton à liste défilante-->
    <div class="dropdown">
     <button onclick="myFunction()" class="dropbtn">Tout Parcourir</button>
     <div id="myDropdown" class="dropdown-content">
       <a href="meublehtml.php">Meubles et objets d'art</a>
       <a href="accessoirehtml.php">Accessoires VIP</a>
       <a href="scolairehtml.php">Matériels scolaires</a>
       <script type="text/javascript">
        function myFunction() {
         document.getElementById("myDropdown").classList.toggle("show");
       }
       window.onclick = function(event) {
         if (!event.target.matches('.dropbtn')) {
           var dropdowns = document.getElementsByClassName("dropdown-content");
           var i;
           for (i = 0; i < dropdowns.length; i++) {
             var openDropdown = dropdowns[i];
             if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
    </script>
  </div>
</div>
<!--Bouton classique-->
<a href="notificationhtml.php" onclick="myFunction()" class="dropbtn" class = "button">Notification</a>
<a href="panierhtml.php" onclick="myFunction()" class="dropbtn" class = "button">Panier</a>
<a href="comptehtml.php" onclick="myFunction()" class="dropbtn" class = "button">Votre compte</a>
</ul>
</div>

</head>


<body>


<?php
$products=$DB->query("SELECT * FROM article WHERE ID_article=3");
?>
<?php foreach($products as $product): ?>
  <main class="main">
    <h1><?php echo $product['nom']; ?></h1>
  </main>
  <br>
  <br>
  <div class ="row">
    <div class = "col-sm-4" align="center">
      <img src="chaise.png" alt="" height="400" width="400">
    </div>
    <div class="col-sm-4">
      <h2><?php echo $product['prix']; ?> euros</h2><br><br>
      <ul>
        <li><?php echo $product['description']; ?></li>
        <li>Envoi sous 48h</li>
        <li>Satisfait ou remboursé</li>
      </ul>
    </div>

    <div class="col-sm-4">
      <a href="addpanier.php?ID_article=<?= $product['ID_article'];?>" class = "button">Achat immédiat</a>
      <a href="encherehtml.php" class = "button">Enchère</a>
      <a href="offrehtml.php" class = "button">Meilleur offre</a>

    </div>
  </div>
  <br>
  <br>

<?php endforeach ?>
</body>
</html>
