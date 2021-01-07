<?php
include './view/view_account.php';
echo "Vous êtes connecté <br><br>";
echo "Bonjour ".$_SESSION['firstName']." ".$_SESSION['lastName']."<br><br>";
echo "Email : ".$_SESSION['email']."<br><br>";


//var_dump($_SESSION);
echo 'nombre de page visité : '.$_SESSION['visitedPage'].'<br><br>';
echo 'La dernière page visité est : '.$_SESSION['lastPage'].'<br><br>';

echo '<button style="margin-bottom: 20px;" type="button" name="button"><a href="myLogs">Modifier mes Logs</a></button>';
$_SESSION['lastPage'] = '/account';
?>
