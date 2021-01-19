<?php
var_dump($_POST);
if (!empty($_POST)) {
    include
    paymentMethod($pdo,$_POST);




    include 'view/view_thanksBuy.php';
}else{
    //header('Location: cart');
    //exit();
}



?>
