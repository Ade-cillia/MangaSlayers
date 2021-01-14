<?php
include './view/view_register.php';
include './model/user.php';

if (isset($_POST['first_name'])) {
    addUser($pdo, $_POST);
    header('Location: login');
    exit();


};

$_SESSION['lastPage'] = '/register';
 ?>
