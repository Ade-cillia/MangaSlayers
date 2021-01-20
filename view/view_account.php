<title>Compte</title>
<h1>Compte</h1>
<p>Vous êtes connecté </p><br><br>
<?= "Bonjour ".$_SESSION['firstName']." ".$_SESSION['lastName']."<br>";?>
<?= "Email : ".$_SESSION['email']."<br><br>";?>
<?= 'nombre de page visité : '.$_SESSION['visitedPage'].'<br><br>';?>
<?= 'La dernière page visité est : '.$_SESSION['lastPage'].'<br><br>'?>
<button style="margin-bottom: 20px;" type="button" name="button"><a href="myLogs">Modifier mes Logs</a></button><br><br>
<button style="margin-bottom: 20px;" type="button" name="disconnect"><a href="?disconnect=true">Déconnexion</a></button>
<h1>Mes Derniers Achats:</h1>
<?php
foreach (getOrderAlreadyPaid($pdo,$_SESSION['id']) as $orderPaid) {
    $date = getPayment($pdo,$orderPaid['id'])[0]['date'];
    echo '<p><a href="history?order='.$orderPaid['id'].'">Commande numéro '.$orderPaid['id'].' du '.$date.'</a></p><br>';
}
 ?>
