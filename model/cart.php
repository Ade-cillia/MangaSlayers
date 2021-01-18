<?php
function deleteItemCart($pdo,$id_item){
    $sql ="
        DELETE FROM `content_order`
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
};
function UpdateItemCart($pdo,$id_item,$new_quantity){
    $sql ="
        UPDATE `content_order`
        SET `quantity`= $new_quantity
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
};
