<?php
//var_dump($_POST);
if (isset($_POST['buy'])){ //Controle si l'utilisateur tente d'aller payer sans passer par le pannier (pour actualiser les $_SESSION)
    $_SESSION['tva'] = round($_SESSION['totalPrice']-($_SESSION['totalPrice']/(1.055)), 2);
    $_SESSION['price_ht'] = round($_SESSION['totalPrice']/(1.055), 2);
    include './view/view_payment.php';
}else{
    header('Location: cart');
    exit();
}

$_SESSION['lastPage'] = '/payment';
?>
