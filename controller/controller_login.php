<?php
include 'model/user.php';
include './view/view_login.php';


foreach (getAllUsers($pdo) as $user) {
    //var_dump($user);
    if (isset($_POST['email'])){
        if ( password_verify($_POST['password'],$user['password']) && $_POST['email'] === $user['email'] ) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['firstName'] = $user['first_name'];
            $_SESSION['lastName'] = $user['last_name'];
            $_SESSION['email'] = $user['email'];;
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
        }
    }
}


$_SESSION['lastPage'] = '/login';
 ?>
