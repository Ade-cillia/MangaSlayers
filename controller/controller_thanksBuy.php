<?php
if (!empty($_POST)) { // Test si le moyen de paymement existe déjà
    include './model/payment.php';
    include './model/category.php';
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
    foreach (getAllContentOrder($pdo,$_SESSION['id']) as $key => $contentOrder) { // add_Ordered_Item_Snapshot
        getItem($pdo,-1,$contentOrder['id_item']);
        foreach (getItem($pdo,-1,$contentOrder['id_item']) as $key => $contentItem) {
            $itemName = $contentItem['name'];
            $itemPrice = $contentItem['price'];
            $idMangaTitle = $contentItem['id_manga_title'];
        }
        $idCategory = getCategoryId($pdo,$idMangaTitle)[0]['id_category'];
        addOrderedItemSnapshot($pdo, $_SESSION['id_order'],$itemName, $itemPrice, $contentOrder['quantity'], $idMangaTitle, $idCategory);

    }
    addPaidToOrder($pdo,$_SESSION['id_order']);


}
header('Location: cart');
exit();



$_SESSION['lastPage'] = '/buyAnItem';
?>
