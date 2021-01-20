<?php
function getItem($pdo,$id_manga_title,$id_item){
    $sql ="
        SELECT *
        FROM item
        WHERE id_manga_title = $id_manga_title or id= $id_item ;
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
function getCategoryByItem($pdo,$id_manga_title){
    $sql ="
        SELECT name
        FROM manga_title
        WHERE id = $id_manga_title;
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
function getOrder($pdo,$id_client){
    $sql ="
        SELECT *
        FROM `order`
        WHERE id_client = $id_client and `order`.paid = 0;
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
function getOrderWithID_ORDER($pdo,$id_order){
    $sql ="
        SELECT *
        FROM `order`
        WHERE id = $id_order 
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
function getOrderAlreadyPaid($pdo,$id_client){
    $sql ="
        SELECT *
        FROM `order`
        WHERE id_client = $id_client and `order`.paid = 1;
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

function getOrderedItemSnapshot($pdo,$orderPaid_id){
    $sql ="
        SELECT *
        FROM `ordered_item_snapshot`
        WHERE id_order = $orderPaid_id;
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

function addOrder($pdo,$id_client){
    $sql = "
        INSERT INTO `order` (id_client, paid)
        VALUES (:id_client, 0);
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute(
            [
                "id_client" => $id_client
            ]
        );
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
};
function addContentOrder($pdo,$id,$id_item,$quantity){
    $sql = "
        INSERT INTO `content_order` (id, id_item,quantity)
        VALUES (:id, :id_item, :quantity);
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute(
            [
                "id" => $id,
                "id_item" => $id_item,
                "quantity" => $quantity
            ]
        );
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
};
function getCountContentOrder($pdo,$id_order){
    $sql = "
        SELECT SUM(`quantity`) AS CountContentOrder
        FROM `content_order`
        INNER JOIN `order`
        ON `content_order`.id = `order`.id
        WHERE `content_order`.id = $id_order AND `order`.paid = 0;
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute();
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
}
function checkId_ItemInOrder($pdo, $id_oreder, $id_item){
    $sql = "
        SELECT *
        FROM `content_order`
        WHERE id_item = $id_item
        and id = $id_oreder;
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute();
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
}
function addOneToQuantityItem($pdo,$id_item){
    $sql = "
        UPDATE `content_order`
        SET `quantity`= `quantity`+1
        WHERE id_item = $id_item;
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute();
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
}
function getAllContentOrder($pdo,$id_client){
    $sql = "
        SELECT `content_order`.*
        FROM `content_order`
        INNER JOIN `order`
        ON `content_order`.id = `order`.id
        WHERE id_client = $id_client AND `order`.paid=0
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute();
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
}
function tronque_description($description, $lg_max) {
    if (strlen($description) > $lg_max){
        $description = substr($description, 0, $lg_max);
        $last_space = strrpos($description, " ");
        $description = substr($description, 0, $last_space)." ...";
        return $description;
    }else {
        return $description;
    }
}
 ?>
