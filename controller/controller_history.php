<?php
if (isset($_SESSION['email'])) {
    if (getOrderWithID_ORDER($pdo,$_GET['order'])[0]['id_client'] == $_SESSION['id']) {
        include './model/category.php';
        include './model/payment.php';
        include './view/view_history.php';

    }else{
        header('Location: account');
        exit();
    }
}else{
    header('Location: login');
    exit();
}

?>
