<?php
include 'model/user.php';
include './view/view_login.php';


foreach (getAllUsers($pdo) as $client) {

    if (isset($_POST['email'])){
        if ( password_verify($_POST['password'],$client['password']) && $_POST['email'] === $client['email'] ) {
            $_SESSION['id'] = $client['id'];
            $_SESSION['firstName'] = $client['first_name'];
            $_SESSION['lastName'] = $client['last_name'];
            $_SESSION['email'] = $client['email'];;
            $_SESSION['visitedPage'] = "0";
            $login = 'loginTrue';
            include './controller/controller_logs.php';
            $login = '';
            header('Location: account');
            exit();
        }else{
            echo "<br><br> Mot de passe invalide <br><br>";
            $login = 'loginFalse';
            include './controller/controller_logs.php';
            $login = '';
            return;
        }
    }
}


$_SESSION['lastPage'] = '/login';
 ?>
