<link rel="stylesheet" href="./style/cart.css">
<title>Pannier</title>
<h1 class="titleCart">Votre pannier :</h1>
<?php
$totalPrice=0;
foreach (getAllContentOrder($pdo,$_SESSION['id']) as $key => $allcontentOrder) {
    foreach ($allcontentOrder as $key => $id_item) {
        if ($key=="id_item"){
            echo '<form action="cart" method="post">';
            foreach (getItem($pdo,-1,$id_item) as $key => $allItem) {
                ?>
                <div class="general">
                    <div class="item">
                        <div class="imageDiv">
                            <img class="image" src="<?=$allItem['image']?>">
                        </div>
                        <div class="midle">
                            <div class="titleItem">
                                <h2>Titre: <?=$allItem['name']?></h2>
                                <h4>Autheurs: <?=$allItem['authors']?></h4>
                            </div>
                            <div class="description">
                                <p><strong>Description: </strong><?=tronque_description($allItem['description'], 600)?></p>
                            </div>
                        </div>
                        <div class="threeBlock">
                            <div class="littleBlock3">
                                <h2 class="BigText">Prix Unitaire:</h2>
                            </div>
                            <div class="littleBlock3">
                                <p><span class="priceItem"><?=$allItem['price']?>€</span></p>
                            </div>
                        </div>
                        <div class="threeBlock">
                            <div class="littleBlock3">
                                <h2 class="BigText">Quantité:</h2>
                            </div>
                            <div class="littleBlock3">
                                <input class="quantity" type="number" name="<?=$allItem['id']?>" value="<?=$allcontentOrder['quantity']?>" min="1">
                            </div>
                            <div class="littleBlock3">
                                <input type="submit" value="Modifier"></input>
                            </div>
                        </div>
                        <div class="threeBlock">
                            <div class="littleBlock3">
                                <h2 class="BigText">Prix total:</h2>
                            </div>
                            <div class="littleBlock3">
                                <p><span class="priceItem"><?=$allcontentOrder['quantity']*$allItem['price']?>€</span></p>
                            </div>
                            <div class="littleBlock3">
                                <button type="button"><a href="cart?del_item_cart=<?=$allcontentOrder['id_item']?>">Suprimer</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $totalPrice = $totalPrice + $allcontentOrder['quantity']*$allItem['price'];
                $_SESSION['totalPrice'] = $totalPrice;
            }
        }
    }
}
?>
</form>
<div class="generalForBuy">
    <div class="stats">
        <div class="threeBlockForBuyModif">
            <div class="littleBlock3">
                <h1>Prix total (TTC) </h1>
            </div >
            <div class="littleBlock3"></div >
            <div class="littleBlock3"></div >
        </div>
        <div class="threeBlockForBuy">
            <div class="littleBlock3">
                <div class="totalPrice">
                    <p><?=$totalPrice?> €</p>
                </div>
            </div >
            <div class="littleBlock3">
                <form class="" action="payment" method="post">
                    <input type="submit" name="buy" value="Valider le pannier">
                </form>
            </div >
            <div class="littleBlock3"></div >

        </div>
    </div>
</div>
