<title>history</title>
<link rel="stylesheet" href="./style/home.css">
<link rel="stylesheet" href="./style/item.css">
<link rel="stylesheet" href="./style/history.css">
<div class="chercher floatLeft positionAbsolute">
    <div class="Cat1">
        <?php
        echo "<button class='CatBReturn'><a href=account>Retour</a></button>"
        ?>
    </div>
</div>
<h1 class="categoryTitle">Commande numéro : <?= $_GET['order']." du ".$date?> </h1>

<?php
foreach (getOrderedItemSnapshot($pdo,$_GET['order']) as $orderSnapshot) {
?>
<div class="generalContentSnapshot">
    <div class="contentSnapshot">
        <div class="border large">
            <h2>Titre: <?= $orderSnapshot['name_item'];?></h2>
        </div>
        <div class="border small">
            <h2>Prix: <?= $orderSnapshot['price'];?> €</h2>
        </div>
        <div class="border small">
            <h2>Quantité: <?= $orderSnapshot['quantity'];?></h2>
        </div>
        <div class="border large">
            <h2>Manga: <?= getTitle($pdo,$orderSnapshot['category'])[0]['name']; ?></h2>
        </div>
        <div class="large">
            <h2>Catégorie: <?= getCategoryName($pdo,$orderSnapshot['category'])[0]['name']?></h2>
        </div>
    </div>
</div>
<?php
}
?>
<div class="generalContentSnapshot">
    <div class="price">
        <h1>Prix total TTC: <?= getPayment($pdo,$_GET['order'])[0]['total_ht']+getPayment($pdo,$_GET['order'])[0]['tva']?> €</h1>
    </div>
<div>
