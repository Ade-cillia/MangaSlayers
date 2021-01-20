<meta charset="utf-8">
<link rel="stylesheet" href="./style/home.css">
<title>Contact</title>
<h1>Contactez nous:</h1><br><br>
<form action="contact" method="post">
    <label>Email: </label><br>
    <input type="email" name="email" value=""><br><br>
    <label>Message: </label><br>
    <textarea name="name" rows="8" cols="80"></textarea><br><br>
    <input type="submit" name="contact" value="Envoyer"><br><br>
</form>
<?php
if (!empty($_POST)) {
    echo "Votre message sera envoyé sous 24h";
}
?>
