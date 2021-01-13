<?php
include './view/view_register.php';
include './model/user.php';

if (isset($_POST['first_name'])) {
    var_dump(addUser($pdo, $_POST));

};

$_SESSION['lastPage'] = '/register';
 ?>
