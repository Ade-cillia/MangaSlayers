<?php
if (isset($_SESSION['email'])) {
    include './model/category.php';
    include './model/payment.php';
    $date = getPayment($pdo,$_GET['order'])[0]['date'];
    if (getOrderWithID_ORDER($pdo,$_GET['order'])[0]['id_client'] == $_SESSION['id']) {
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
