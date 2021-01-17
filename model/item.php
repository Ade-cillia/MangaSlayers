<?php
function getItem($pdo,$id_manga_title){
    $sql ="
        SELECT *
        FROM item
        WHERE id_manga_title = $id_manga_title;
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
        WHERE id_client = $id_client;
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
 ?>
