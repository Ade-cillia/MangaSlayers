<?php
if (!empty($_POST)) { // Test si le moyen de paymement existe déjà
    include './model/payment.php';
    $hasPaymentMethod = false;
    foreach (getPaymentMethod($pdo,$_SESSION) as $key => $value) {
        if ($_POST['paymentMethod'] == $value['method'] and $_POST['cardNumber'] == $value['value']) {
            $hasPaymentMethod = true;
            addPayment($pdo,$_SESSION,$value['id']);
        }
    }
    if ($hasPaymentMethod == false) {
        addPaymentMethod($pdo,$_POST);
        foreach (getPaymentMethod($pdo,$_SESSION) as $key => $value) {
            if ($_POST['paymentMethod'] == $value['method'] and $_POST['cardNumber'] == $value['value']) {
                addPayment($pdo,$_SESSION,$value['id']);
            }
        }
    }
    addPaidToOrder($pdo,$_SESSION['id_order']);
    include 'view/view_thanksBuy.php';

}
header('Location: cart');
exit();




?>
