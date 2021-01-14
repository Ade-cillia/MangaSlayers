<?php
session_start();
$login = ''; //variable qui sert à la ,detection du longin pour les logs

//var_dump($_SESSION);
?>

<link rel="stylesheet" href="./style/style.css">

<nav class="menuNav">
    <ul>
        <li>
            <a href="home">Accueil</a>
        </li>
        <li>
            <a href="page1">Page 1</a>
        </li>
        <li>
            <a href="page2">Page 2</a>
        </li>
        <?php
        if (isset($_SESSION['email'])){
            echo "<li>";
            echo "  <a href='account'>Profile</a>";
            echo "</li>";
        }
        if (!isset($_SESSION['email'])){
            echo "<li>";
            echo "  <a href='register'>Register</a>";
            echo "</li>";
            echo "<li>";
            echo "  <a href='login'>Login</a>";
            echo "</li>";
        }
        ?>

    </ul>
</nav>
