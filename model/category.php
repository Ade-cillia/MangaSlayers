<?php
function getTitle($pdo,$id_Category){
    $sql ="
        SELECT name,image
        FROM manga_title
        WHERE id_category = $id_Category;
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
function getCategoryName($pdo,$id_Category){
    $sql ="
        SELECT name
        FROM category
        WHERE id = $id_Category;
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
