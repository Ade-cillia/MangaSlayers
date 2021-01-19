<?php
include './model/user.php';

//var_dump(getAllUsers($pdo, 4));
$itemforyou=[12,15,11];

include './view/view_home.php';
$_SESSION['lastPage'] = '/home';
 ?>
