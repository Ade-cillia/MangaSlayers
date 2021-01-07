<?php



$passwordHashSave = '$2y$10$JSacSH2w5g4QN8oVkx6LGewnlKZmSqQFI7J3PUfs9Y4P7P6fIQITW';
$user = [
    "id" => 1,
    "firstName" => 'Jean',
    "lastName" => 'CHARLE',
    "password" => '$2y$10$JSacSH2w5g4QN8oVkx6LGewnlKZmSqQFI7J3PUfs9Y4P7P6fIQITW',
    "email" => 'jeandu00@carabistouille.fr',
    "visitedPage" => '0',
    "lastPage" => ''
];

include './view/view_login.php';
if (isset($_POST['email'])){
    if ( password_verify($_POST['password'],$passwordHashSave) && $_POST['email'] === $user['email'] ) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['firstName'] = $user['firstName'];
        $_SESSION['lastName'] = $user['lastName'];
        $_SESSION['email'] = $user['email'];
        $login = 'loginTrue';
        $_SESSION['visitedPage'] = $user['visitedPage'];
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

$_SESSION['lastPage'] = '/login';
 ?>
