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
