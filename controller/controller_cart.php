<?php
include './model/cart.php';

if (isset($_GET['del_item_cart'])) {
    deleteItemCart($pdo,$_GET['del_item_cart']);
    header('Location: cart');
    exit();
}
include './view/view_cart.php';
$_SESSION['lastPage'] = '/cart';
?>
