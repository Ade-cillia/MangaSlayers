<?php
include './model/item.php';
include './model/category.php';
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
if (isset($_GET["buy_item"])) {
    if (isset($_SESSION["email"])) {
        getOrder($pdo,$_SESSION["id"]);
    }else{
        header("Location: register");
        exit();
    }
}

$_SESSION['lastPage'] = '/item';
include './view/view_item.php';
