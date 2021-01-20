<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/home.css">
    <link rel="stylesheet" href="./style/item.css">
    <title>Accueil</title>
</head>
<body>
<div class="chercher floatLeft positionAbsolute">
    <div class="Cat1">
        <button class="CatB">Catégories</button>
        <div class="Cat2 positionAbsolute ">
        <a href="category?id_category=1">Horreur</a>
        <a href="category?id_category=2">Aventure</a>
        <a href="category?id_category=3">Heroic-Fantasy</a>
        <a href="category?id_category=4">Romance</a>
        <a href="category?id_category=5">Slice-Of-Life</a>
        <a href="category?id_category=6">Action</a>
        <a href="category?id_category=7">Thriller</a>
        </div>
    </div>
    <form action="" class="search-bar">
	<input type="search" name="search" pattern=".*\S.*" required>
	<button class="search-btn" type="submit">
		<span>Chercher</span>
	</button>
</form>
</div>
<div class="titletitle">
        <h1>Selectionnés pour vous</h1>
</div>
<div class="fleex">
    <div class="generalhome">
        <?php
        foreach ($itemforyou as $itemsforyou) {
            //echo($itemsforyou);
            foreach (getItem($pdo,-1,$itemsforyou) as $item) {
                echo "<div class='blockItemhome'>";
                echo "  <div class='lefthome'>";
                echo "      <img class='image' src='".$item["image"]."'>";
                echo "  </div>";
                echo "  <div class='right'>";
                echo "      <div class='nameItem'>";
                echo "          <h3><strong>Titre : &nbsp&nbsp</strong>".$item['name']."</h3>";
                echo "          <div><strong>Autheur : </strong>".$item['authors']."</p></div>";
                echo "          <div><strong>Prix : </strong>".$item['price']."€</p></div>";
                echo "      </div>";
                echo "      <div class='Description'>";
                echo "          <strong>Description: </strong>".tronque_description($item['description'], 250);
                echo "      </div>";
                echo "      <div class='buyButtonDiv'>";
                echo "          <form action='home?id_manga_title=".$itemsforyou."&id_item=".$item['id']."&buy_item=1&home_buy=true' method='post'>";
                echo "              <button id='buyButton' type='submit' name='buyButton'><h1>Ajouter au panier</h1></button>";
                echo "          </form>";
                echo "      </div>";
                echo "  </div>";
                echo "</div>";
            }
        }
        ?>
    </div>
</div>
<div class="titletitle">
<h1>Meilleurs Ventes</h1>
</div>
</body>
</html>
