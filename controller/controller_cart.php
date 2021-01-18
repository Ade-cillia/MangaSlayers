<?php
include './model/cart.php';

if (isset($_GET['del_item_cart'])) {
    deleteItemCart($pdo,$_GET['del_item_cart']);
    header('Location: cart');
    exit();
}elseif (!empty($_POST)) {
    //var_dump($_POST);
    foreach ($_POST as $id_item => $new_quantity) {
        UpdateItemCart($pdo,$id_item ,$new_quantity);
    }
    header('Location: cart');
    exit();
}

include './view/view_cart.php';
$_SESSION['lastPage'] = '/cart';
?>
