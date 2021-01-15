<!DOCTYPE html>
<title>catégorie </title>
<link rel="stylesheet" href="./style/category.css">
<link rel="stylesheet" href="./style/home.css">
<div class="chercher floatLeft positionAbsolute">
    <div class="Cat1">
        <button class="CatB">Catégories</button>
        <div class="Cat2 positionAbsolute ">
        <a href="category?id_category=1">Horreur</a>
        <a href="category?id_category=2">Aventure</a>
        <a href="category?id_category=3">Heroic-Fantasy</a>
        <a href="category?id_category=4">Romance</a>
        <a href="category?id_category=5">Slice-Of-Life</a>
        <a href="category?id_category=6">Action</a>
        <a href="category?id_category=7">Thriller</a>
        </div>
    </div>
</div>

<div class="categoryTitle">
    <h1 class="categoryTitle">
        <?php
            echo getCategoryName($pdo,$_GET["id_category"])[0]['name'];
         ?>
    </h1>
</div>
<div class="allTitle">
    <ul class="ulTitle">
    <?php
    if (!empty($_GET) && getTitle($pdo,$_GET["id_category"]) ) {
        foreach (getTitle($pdo,$_GET["id_category"]) as $key => $value) {
            echo "<div class='general'>";
            echo "<li class='liTitle'><a class='aTitle' href='item?id_manga_title=".$value['id']."'>";
            echo "<div>";
            echo "<div class='box'>";
            echo "  <img class='imageTitle' src='".$value["image"]."' alt=''>";
            echo "</div>";
            echo "<div class='box'>";
            echo "  <div class='title'>";
            echo "      <h1>";
            echo "          ".$value["name"];
            echo "      </h1>";
            echo "  </div>";
            echo "  <div class='numberBook'>";
            echo "      <h1>";
            echo "          "."100";
            echo "      </h1>";
            echo "  </div>";
            echo "</div>";
            echo "</div>";
            echo "</a></li>";
            echo "</div>";
        }
    }else{
        header("Location: home");
        exit();
    }
     ?>
     </ul>
</div>
