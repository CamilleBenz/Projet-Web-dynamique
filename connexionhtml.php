

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
