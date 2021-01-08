<link rel="icon" type="image/png" href="./image/profile_discord.png" />
<?php
include './pdo_connection.php';
include './layout/header.php';

$url=''; //=Query strings
if ( isset(explode("?", $_SERVER['REQUEST_URI'])[1]) ) {

    if(isset($_GET['modif'])){ // corrige un bug où $_SESSION['lastPage'] n'existe pas pour modifMyLogs après l'activation du bouton modifier
        $_SESSION['lastPage'] = '/modifMyLogs';
    }
    //var_dump($_SESSION['lastPage']);
    $url = explode("/AurelienDS".$_SESSION['lastPage'], $_SERVER['REQUEST_URI'])[1];

}

switch ($_SERVER['REQUEST_URI']){
    case '/AurelienDS/'.$url:
        include 'controller/controller_home.php';
        break;
    case '/AurelienDS/home'.$url:
        include 'controller/controller_home.php';
        break;
    case '/AurelienDS/login'.$url:
        include 'controller/controller_login.php';
        break;
    case '/AurelienDS/register'.$url:
        include 'controller/controller_register.php';
        break;
    case '/AurelienDS/account'.$url:
        if(isset($_SESSION['email'])){
            include 'controller/controller_account.php';
        }else {
            include 'controller/controller_login.php';
        }
        break;
    case '/AurelienDS/myLogs'.$url:
        if(isset($_SESSION['email'])){
            include 'controller/controller_myLogs.php';
        }else {
            include 'controller/controller_login.php';
        }
        break;
    case '/AurelienDS/modifMyLogs'.$url:
        if(isset($_SESSION['email'])){
            include 'controller/controller_modifMyLogs.php';
        }else {
            include 'controller/controller_login.php';
        }
        break;
    case '/AurelienDS/page1'.$url:
        include 'controller/controller_page1.php';
        break;
    case '/AurelienDS/page2'.$url:
        include 'controller/controller_page2.php';
        break;
    default :
        include 'controller/controller_404.php';
        break;
}

include 'controller/controller_logs.php';


if (isset($_SESSION['email'])) {
    $_SESSION['visitedPage']+= 1;
}



include './layout/footer.php';


?>
