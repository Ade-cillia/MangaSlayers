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
    <form action="" class="search-bar">
	<input type="search" name="search" pattern=".*\S.*" required>
	<button class="search-btn" type="submit">
		<span>Chercher</span>
	</button>
</form>
</div>
</body>
</html>
