<?php
var_dump($_SESSION);
include './model/user.php';

//var_dump(getAllUsers($pdo, 4));

include './view/view_home.php';
$_SESSION['lastPage'] = '/home';
 ?>
