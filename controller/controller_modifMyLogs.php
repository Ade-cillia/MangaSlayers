<?php
$_SESSION['lastLogsSave'] = $_GET['modif'];
$_SESSION['lastPage'] = '/modifMyLogs';

if(isset($_POST['LogsSave'])){

	file_put_contents('./logs/'.$_GET['modif'],$_POST['textLogs']);
}


include 'view/view_modifMyLogs.php';

echo "<h2> Nom du fichier : ".$_GET['modif']."<br></h2>";
$lines = file('./logs/'.$_GET['modif']);


echo '<form action="modifMyLogs?modif='.$_SESSION['lastLogsSave'].'" method="post" >';
echo "	<textarea name='textLogs' cols='100' rows='20'>";
foreach ($lines as $line_key => $line) {
	echo $line;
}
echo "	</textarea>\n<br><br>";
echo '	<button type="submit" name="LogsSave">Sauvegarder</button>';
echo "<form>";

?>
