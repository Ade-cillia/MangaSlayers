<?php
include 'view/view_myLogs.php';

function myReadDir($path) {
    $content = scandir($path);
    $dir = [];

    foreach ($content as $elem_name) {
        $elem = [];
        $elem['name'] = $elem_name;
        if (is_dir($path.'/'.$elem_name) && $elem_name != '.' && $elem_name != '..') {
            $elem['type'] = 'directory';
            $elem['content'] = myReadDir($path.'/'.$elem_name);
            $dir[] = $elem;
        }
        elseif ($elem_name != '.' && $elem_name != '..') {
            $elem['type'] = 'file';
            $dir[] = $elem;
        }

    }
    return $dir;
}

$listFolderLogs = myReadDir('C:\MAMP\htdocs\MangaSlayers\logs');
//var_dump($listFolderLogs);
if (isset($_GET['button'])) {
    var_dump($_GET['button']);
    unlink("./logs/".$_GET['button']);
    header('Location: myLogs');
    exit();
}

if (isset($_POST['addFileButton'])) {
    fopen("./logs/FilePerso_UserId[".$_SESSION['id']."]-".$_POST['addFileText'].".txt",'a+');
    header('Location: myLogs');
    exit();
}



$countMyLogs=0; // Si l'utilisateur na pas de logs la variable reste à 0 donc il ne possède pas de logs
foreach ($listFolderLogs as $key => $fileFolder) {

    if($fileFolder['type'] == 'file'){
        $logsId = explode("]", explode("UserId[", $fileFolder['name'])[1])[0];
        if ($_SESSION['id'] == $logsId){
            $countMyLogs += 1;
            //echo $countMyLogs."<br>";
            echo "<div style='background-color: darkgrey; margin-bottom: 10px'>";
            echo '  <button style="margin: 20px;" type="button" name="modif"><a href="modifMyLogs?modif='.$fileFolder['name'].'">Modifier</a></button>';
            echo '  <button style="margin: 20px;" type="button" name="button"><a href="myLogs?button='.$fileFolder['name'].'">Suprimer</a></button>';
            echo "  ".$fileFolder['name'];
            echo "</div>";
        }

    }
}
if ($countMyLogs==0) {
    echo 'Aucun logs';
}

echo '<form style="background-color: darkgrey; padding-bottom: 10px; margin-bottom: 10px; padding-top: 10px";margin-top: 10px; action="myLogs" method="post">';
echo '  <button style="margin: 20px;" type="submit" name="addFileButton">Ajouter un fichier</button>';
echo '  <label>FilePerso_UserId['.$_SESSION['id'].']-</label>';
echo '  <input type="text" name="addFileText" >';
echo '  <label>.txt</label>';
echo '</form>';
$_SESSION['lastPage'] = '/myLogs';

?>
