<title>Produit: </title>
<link rel="stylesheet" href="./style/home.css">
<link rel="stylesheet" href="./style/item.css">
<div class="chercher floatLeft positionAbsolute">
    <div class="Cat1">
        <?php
        echo "<button class='CatBReturn'><a class='' href=category?id_category='".getCategoryId($pdo,$_GET["id_manga_title"])[0]["id_category"]."'>Retour</a></button>"
        ?>
    </div>
</div>
<div class="categoryTitle">
    <h1 class="categoryTitle">
        <?php
            //var_dump (getCategoryByItem($pdo,$_GET['id_manga_title']));
            echo getCategoryByItem($pdo,$_GET['id_manga_title'])[0]['name'];
         ?>
    </h1>
</div>
<div class="general">
    <?php
    foreach (getItem($pdo,$_GET['id_manga_title']) as $item) {
        echo "<div class='blockItem'>";
        echo "  <div class='left'>";
        echo "      <img class='image' src='".$item["image"]."'>";
        echo "  </div>";
        echo "  <div class='right'>";
        echo "      <div class='nameItem'>";
        echo "          <h3><strong>Titre : &nbsp&nbsp</strong>".$item['name']."</h3>";
        echo "          <div><strong>Autheur : </strong>".$item['authors']."</p></div>";
        echo "          <div><strong>Prix : </strong>".$item['price']."€</p></div>";
        echo "      </div>";
        echo "      <div class='Description'>";
        echo "          <strong>Description: </strong>".tronque_description($item['description'], 300);
        echo "      </div>";
        echo "      <div class='buyButtonDiv'>";
        echo "          <form action='item?id_manga_title=".$_GET["id_manga_title"]."&id_item=".$item['id']."&buy_item=1' method='post'>";
        echo "              <button id='buyButton' type='submit' name='buyButton'><h1>Ajouter au panier</h1></button>";
        echo "          </form>";
        echo "      </div>";
        echo "  </div>";
        echo "</div>";
    }
     ?>
</div>
