<!DOCTYPE html>
<title>catégorie: </title>
<link rel="stylesheet" href="./style/category.css">
<div class="allTitle">
    <div class="allTitle">
        <?php
        include './model/category.php';
        if (!empty($_GET) && getTitle($pdo,$_GET["id_category"]) ) {
            foreach (getTitle($pdo,$_GET["id_category"]) as $key => $value) {
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
            }
        }else{
            header("Location: home");
            exit();
        }


         ?>
    </div>
</div>
