<?php
   
    require_once 'articles.php';

    if(isset($_GET["page"])){

        switch($_GET["page"]) {

            case "page1" : $pageDemander = "page1.php";
            break;
            case "page2" : $pageDemander = "page2.php";
            break;
            case "page3" : $pageDemander = "page3.php";
            break;
            default : $pageDemander = "page1.php";
        }
      } else {
          $pageDemander = "page1.php";
      }


?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <ul>
            <li><a href="index.php?page=page1">Accueil</a></li>
            <li><a href="index.php?page=page2">Tech</a></li>
            <li><a href="index.php?page=page3">IA</a></li>
        </ul>

        <?php require "$pageDemander"?>

    

</body>
</html>