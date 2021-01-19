<?php


if (isset($_GET['disconnect'])) {
    session_destroy();
    header('location: home');
    exit;
}

include './view/view_account.php';

$_SESSION['lastPage'] = '/account';
?>
