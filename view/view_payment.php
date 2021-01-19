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
                <h3>TVA (5.5%): <?= round($_SESSION['totalPrice']-($_SESSION['totalPrice']/(1.055)), 2) ?> €</h3>
            </div>
        </div>
    </div>
</div>

<div class="generalPayment">
    <div class="centerGeneralPayment">
        <form action="thanksBuy" method="post">
            <div class="formAddress">
                <div>
                    <label>Adresse de livraison: </label><br>
                    <input class="inputForm" type="text" name="adress"><br>
                </div>
            </div>
            <div class="PaymentMethode">
                <label class="PaymentMethodeBlock" for="cb">
                    <div class="PaymentImage">
                            <img src="./image/paymentMethod/logo-cb.jpg" alt="logo-Carte-Bleu">
                    </div>
                    <div class="checkButton">
                        <input type="radio" id="cb" name="paymentMethod" value="cb" required>
                    </div>
                </label>
                <label class="PaymentMethodeBlock" for="masterCard">
                    <div class="PaymentImage">
                            <img src="./image/paymentMethod/logo-masterCard.jpg" alt="logo-masterCard">
                    </div>
                    <div class="checkButton">
                        <input type="radio" id="masterCard" name="paymentMethod" value="masterCard" required>
                    </div>
                </label>
                <label class="PaymentMethodeBlock" for="visa">
                    <div class="PaymentImage">
                            <img src="./image/paymentMethod/logo-visa.jpg" alt="logo-visa">
                    </div>
                    <div class="checkButton">
                        <input type="radio" id="visa" name="paymentMethod" value="visa" required>
                    </div>
                </label>
            </div>

            <div class="formAddressPayment">
                <div>
                    <label>Nom du propriétaire: </label><br>
                    <input class="inputFormPayment" type="text" name="nameCardUser" value="" required><br>
                    <label>Numéro de carte: </label><br>
                    <input class="inputFormPayment" type="text" name="cardNumber" value="" required><br>
                    <label>Date d'Expiration: </label><br>
                    <input class="inputFormPayment" type="date" name="expiration" value="" required><br>
                    <label>Cryptogramme: </label><br>
                    <input class="inputFormPayment" type="number" name="crypto" value="" required><br>
                </div>
            </div>
            <div class="paymentButton">
                <input type="submit" name="" value="Acheter">
            </div>

        </form>
    </div>
</div>
