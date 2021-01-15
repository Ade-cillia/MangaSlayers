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
        echo "      <h2>".$item['name']."</h2>";
        echo "      </div>";
        echo "      <div class='Description'>";
        echo "      <strong>Description: </strong>".$item['description'];
        echo "      </div>";
        echo "  </div>";
        echo "</div>";
    }
     ?>
</div>
