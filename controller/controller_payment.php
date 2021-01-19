<?php
//var_dump($_POST);
if (isset($_POST['buy'])){ //Controle si l'utilisateur tente d'aller payer sans passer par le pannier (pour actualiser les $_SESSION)
    include './view/view_payment.php';
}else{
    header('Location: cart');
    exit();
}

$_SESSION['lastPage'] = '/payment';
?>
