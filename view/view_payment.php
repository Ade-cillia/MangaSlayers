<title>Payment</title>
<link rel="stylesheet" href="./style/payment.css">
<div class="generalPrice">
    <div class="showPriceAndNBItem">
        <div class="NBItem">
            <h1>Nombre de Lives: <?= $_SESSION['itemPannier']?></h1>
        </div>
        <div class="priceAndTVA">
            <div class="price">
                <h1>Montant Totale (TTC): <?= $_SESSION['totalPrice']?> €</h1>
            </div>
            <div class="tva">
                <h3>TVA (20%): <?= $_SESSION['totalPrice']?> €</h3>
            </div>
        </div>
    </div>
</div>

<div class="generalPayment">
    <div class="formAddress">
        <label>Adresse de livraison: </label><br>
        <input type="text" name=""><br>
    </div>
    <div class="PaymentMethode">
        <div class="PaymentMethodeBlock">
            <div class="PaymentImage"></div>
            <div class="checkButton"></div>
        </div>
    </div>
    <div class="formPayment">
        <label>Numéro de carte: </label><br>
        <input type="text" name="cardNumber" value=""><br>
        <label>Nom du propriétaire: </label><br>
        <input type="text" name="nameCardUser" value=""><br>
        <div class="expiAndCrypto">
            <div class="expi">
                <label>Date d'Expiration: </label><br>
                <input type="date" name="nameCardUser" value="">
            </div>
            <div class="crypto">
                <label>Cryptogramme: </label><br>
                <input type="number" name="nameCardUser" value="">
            </div>
        </div>
        <div class="PaymentButton">

        </div>
    </div>
</div>
