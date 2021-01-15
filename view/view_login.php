<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="./style/home.css">
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <header>
        <h1>Login</h1>
        </header>
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
        <main>
            <form action="login" method="post">
                <div>
                    <label>Email:</label>
                    <br>
                    <input type="email" name="email">
                </div>
                <div>
                    <label>Mot de passe:</label>
                    <br>
                    <input type="password" name="password">
                </div>
                <br>
                <input type="submit" name="submit" value="Valider">
            </form>
            <div class="chercher">
        </main>
    </body>
</html>
