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

if (isset($_GET["buy_item"])) { //Detect item acheté
    if (isset($_SESSION["email"])) { //Detect connecter
        $existingOrder= false;
        if (!empty(getOrder($pdo,$_SESSION["id"]))){ //Detect order existe
            foreach (getOrder($pdo,$_SESSION["id"]) as $order) { //Detect order non payé
                if ($order['paid']==0) {
                    $existingOrder= true;
                    echo "test";
                }
            }
        }
        if ($existingOrder == false) {
            addOrder($pdo,$_SESSION["id"]);
        }
        addContentOrder($pdo,$order['id'],$_GET['id_item'],$_GET['buy_item']);
        var_dump(addContentOrder($pdo,$order['id'],$_GET['id_item'],$_GET['buy_item']));
    }else{
        header("Location: register");
        exit();
    }
}

$_SESSION['lastPage'] = '/item';
include './view/view_item.php';
