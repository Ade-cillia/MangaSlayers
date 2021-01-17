<?php
include 'model/user.php';
include './view/view_login.php';

if (isset($_POST['email'])){
    foreach (getEmailPassword($pdo,$_POST['email']) as $client) {
        if ( password_verify($_POST['password'],$client['password']) && $_POST['email'] === $client['email'] ) {
            $_SESSION['id'] = startSession($pdo,$_POST['email'])[0]['id'];
            $_SESSION['firstName'] = startSession($pdo,$_POST['email'])[0]['first_name'];
            $_SESSION['lastName'] = startSession($pdo,$_POST['email'])[0]['last_name'];
            $_SESSION['email'] = startSession($pdo,$_POST['email'])[0]['email'];;
            $_SESSION['visitedPage'] = "0";
            $login = 'loginTrue';
            include './controller/controller_logs.php';
            $login = '';
            header('Location: account');
            exit();
        }
    }
    echo "<br><br> Mot de passe invalide <br><br>";
    $login = 'loginFalse';
    include './controller/controller_logs.php';
    $login = '';
}



$_SESSION['lastPage'] = '/login';
 ?>
