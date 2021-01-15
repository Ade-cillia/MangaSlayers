<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="./style/home.css">
    <head>
        <meta charset="utf-8">
        <title>Register</title>
    </head>
    <body>
        <header>
            <h1>Register</h1>
        </header>
        <main>
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
            <form action="register" method="post" required>
                <div>
                    <label>Nom:</label>
                    <br>
                    <input type="text" name="last_name" value="" required>
                </div>
                <div>
                    <label>Prénom:</label>
                    <br>
                    <input type="text" name="first_name" value="" required>
                </div>
                <div>
                    <label>Email:</label>
                    <br>
                    <input type="email" name="email" value="" required>
                </div>
                <div>
                    <label>Mot de passe:</label>
                    <br>
                    <input type="password" name="password" value="" required>
                </div>
                <div>
                    <label>Téléphone:</label>
                    <br>
                    <input type="tel" id="phone" name="phone"
                    pattern="[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}"
                    placeholder="(format: 00.00.00.00.00)" required>
                </div>
                <br>
                <input type="submit" name="submit" value="Valider">
            </form>
        </main>
    </body>
</html>
