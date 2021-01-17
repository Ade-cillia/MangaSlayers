<link rel="stylesheet" href="./style/cart.css">
<title>Pannier</title>
<h1 class="titleCart">Votre pannier :</h1>
<?php

foreach (getAllContentOrder($pdo,$_SESSION['id']) as $key => $allcontentOrder) {
    foreach ($allcontentOrder as $key => $value) {
        if ($key=="id_item"){
            foreach (getItem($pdo,-1,$value) as $key => $allItem) {
                //var_dump($allItem);
                echo '<div class="general">';
                echo '  <div class="item">';
                echo '      <div class="imageDiv">';
                echo '            <img class="image" src="'.$allItem['image'].'">';
                echo '       </div>';
                echo '       <div class="midle">';
                echo '            <div class="titleItem">';
                echo '                <h2>Titre: '.$allItem['name'].'</h2>';
                echo '                <h4>Autheurs: '.$allItem['authors'].'</h4>';
                echo '            </div>';
                echo '            <div class="description">';
                echo '                <p><strong>Description: </strong>'.tronque_description($allItem['description'], 600).'</p>';
                echo '            </div>';
                echo '        </div>';
                echo '        <div class="twoBlock">';
                echo '            <div class="littleBlock">';
                echo '            <h1 class="BigText">Prix Unitaire:</h1>';
                echo '            </div>';
                echo '            <div class="littleBlock">';
                echo '            <p><span class="priceItem">'.$allItem['price'].'€</span></p>';
                echo '            </div>';
                echo '        </div>';
                echo '        <div class="twoBlock">';
                echo '            <div class="littleBlock">';
                echo '                 <h1 class="BigText">Quantité:</h1>';
                echo '            </div>';
                echo '            <div class="littleBlock">';
                echo '                 <input class="quantity" type="number" name="quantity" value="'.$allcontentOrder['quantity'].'">';
                echo '            </div>';
                echo '        </div>';
                echo '        <div class="topright">';
                echo '                 <button type="button"><a href="cart?del_item_cart='.$allcontentOrder['id_item'].'">Suprimer</a></button>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
        }
    }
}
?>




















<?php
/*
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
*/
 ?>
