<?php

//var_dump($_SESSION);
include './model/user.php';
if (isset($_GET["buy_item"])) { //Detect item acheté
    if (isset($_SESSION["email"])) { //Detect connecter
        $existingOrder= false;
        if (!empty(getOrder($pdo,$_SESSION["id"]))){ //Detect order existe
            foreach (getOrder($pdo,$_SESSION["id"]) as $order) { //Detect order non payé
                if ($order['paid']==0) {
                    $existingOrder= true;
                    $_SESSION['id_order']=$order['id'];
                }
            }
        }
        if ($existingOrder == false) {
            addOrder($pdo,$_SESSION["id"]);
            foreach (getOrder($pdo,$_SESSION["id"]) as $order) { //Detect order non payé
                if ($order['paid']==0) {
                    $_SESSION['id_order']=$order['id'];
                }
            }
        }
        //var_dump(!empty(checkId_ItemInOrder($pdo,$_SESSION['id_order'],$_GET['id_item'])[0]['id_item']));
        if (!empty(checkId_ItemInOrder($pdo,$_SESSION['id_order'],$_GET['id_item'])[0]['id_item']) ) {
            addOneToQuantityItem($pdo,$_GET['id_item']);
            //var_dump($_GET['id_item']);
        }else{
            addContentOrder($pdo,$_SESSION['id_order'],$_GET['id_item'],$_GET['buy_item']);
        }


        header("Location: home");
        exit();
    }else{
        header("Location: register");
        exit();
    }
}
//var_dump(getAllUsers($pdo, 4));
$itemforyou=[12,15,11];

include './view/view_home.php';
$_SESSION['lastPage'] = '/home';
 ?>
