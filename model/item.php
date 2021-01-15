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
 ?>
