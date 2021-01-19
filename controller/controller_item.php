<?php
include './model/category.php';


if (isset($_GET["buy_item"])) { //Detect item acheté
    if (isset($_SESSION["email"])) { //Detect connecter
        $existingOrder= false;
        if (!empty(getOrder($pdo,$_SESSION["id"]))){ //Detect order existe
            foreach (getOrder($pdo,$_SESSION["id"]) as $order) { //Detect order non payé
                if ($order['paid']==0) {
                    $existingOrder= true;
                    $_SESSION['id_order']=$order['id'];
                    $_SESSION['id_order_paid']=0;
                }
            }
        }
        if ($existingOrder == false) {
            addOrder($pdo,$_SESSION["id"]);
        }
        //var_dump(!empty(checkId_ItemInOrder($pdo,$_SESSION['id_order'],$_GET['id_item'])[0]['id_item']));
        if (!empty(checkId_ItemInOrder($pdo,$_SESSION['id_order'],$_GET['id_item'])[0]['id_item']) ) {
            addOneToQuantityItem($pdo,$_GET['id_item']);
            //var_dump($_GET['id_item']);
        }else{
            addContentOrder($pdo,$_SESSION['id_order'],$_GET['id_item'],$_GET['buy_item']);
        }


        header("Location: item?id_manga_title=".$_GET['id_manga_title']);
        exit();
    }else{
        header("Location: register");
        exit();
    }
}

$_SESSION['lastPage'] = '/item';
include './view/view_item.php';
