<?php
function getPaymentMethod($pdo,$data){
    $sql ="
        SELECT *
        FROM `payment_method`
        WHERE id_client = :id_client ;
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute(
            [
                "id_client" => $data['id']
            ]
        );
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
};
function getPayment($pdo,$id_order){
    $sql ="
        SELECT *
        FROM `payment`
        WHERE id_order = $id_order ;
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute();
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
};

function addPaymentMethod($pdo,$data){
    $sql = "
        INSERT INTO `payment_method` (method, value,id_client)
        VALUES (:method, :value, :id_client);
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute(
            [
                "method" => $data['paymentMethod'],
                "value" => $data['cardNumber'],
                "id_client" => $_SESSION['id']
            ]
        );
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
};


function addPayment($pdo,$data,$id_payment_method){
    $sql = "
        INSERT INTO `payment` (total_ht, tva, id_order,id_payment_method)
        VALUES (:total_ht, :tva, :id_order, :id_payment_method);
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute(
            [
                "total_ht" => $data['price_ht'],
                "tva" => $data['tva'],
                "id_order" => $data['id_order'],
                "id_payment_method" => $id_payment_method
            ]
        );
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
};

function addPaidToOrder($pdo,$id_order){
    $sql = "
        UPDATE `order`
        SET `paid`= 1
        WHERE id = $id_order;
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute();
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
};

function addOrderedItemSnapshot($pdo,$id_order,$name_item,$price,$quantity,$id_manga_title,$category){
    $sql = "
        INSERT INTO `ordered_item_snapshot` (id_order, name_item, price,quantity, id_manga_title, category)
        VALUES (:id_order, :name_item, :price, :quantity, :id_manga_title, :category);
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute(
            [
                "id_order" => $id_order,
                "name_item" => $name_item,
                "price" => $price,
                "quantity" => $quantity,
                "id_manga_title" => $id_manga_title,
                "category" => $category
            ]
        );
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
};

?>
