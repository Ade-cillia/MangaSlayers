<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/home.css">
    <title>Accueil</title>
</head>
<body>
<div class="chercher">
    <div class="Cat1">
        <button class="CatB">Catégories</button>
        <div class="Cat2">
        <a href="category?id_category=1">Horreur</a>
        <a href="category?id_category=2">Aventure</a>
        <a href="category?id_category=3">Heroic-Fantasy</a>
        <a href="category?id_category=4">Romance</a>
        <a href="category?id_category=5">Slice-Of-Life</a>
        <a href="category?id_category=6">Action</a>
        <a href="category?id_category=7">Thriller</a>
        </div>
    </div>
    <label for="site-search">Trouve ton manga:</label>
    <input type="search" id="site-search" name="q"
        aria-label="Search through site content">
    <button>Chercher</button>
</div>
</body>
</html>
