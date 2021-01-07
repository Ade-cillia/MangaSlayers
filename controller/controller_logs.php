<?php

date_default_timezone_set('Europe/Paris');
$dateLogName = date("\[d-m-Y\]");
if (isset($_SESSION['email'])){
    $myLogs = fopen('./logs/'.$dateLogName.'logs_UserId['.$_SESSION['id'].'].txt','a+');
}else{
    $myLogs = fopen('./logs/'.$dateLogName.'logs_UserId[Unknown].txt','a+');
}
$date = date("[d-m-Y|H:i]: ");

if($login == 'loginTrue'){
    fputs($myLogs, $date."The user with id ".$_SESSION['id']." is connected \nemail: ".$_SESSION['email']."\n" );
}elseif($login == 'loginFalse') {
    fputs($myLogs,$date."invalid email or password \n");
}

if (isset($_SESSION['email'])){
    fputs($myLogs,$date.$_SESSION['email']." a consulté la page ".$_SESSION['lastPage']."\n");
}else{
    fputs($myLogs,$date."Unknown-user a consulté la page ".$_SESSION['lastPage']."\n");
}

?>
