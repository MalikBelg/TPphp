<?php
   
    require_once 'articles.php';

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
            <li>
                <a href="https://www.zdnet.fr/actualites/le-w3c-vassalise-par-les-navigateurs-web-39885265.htm">
                    <h2><?=$art1["titre"]?></h2></a>
                        <?=$art1["date"]?></br>
                        <?=$art1["contenu"]?>
            </li>
            <li>
                <a href="https://www.developpez.com/actu/119760/Le-W3C-publie-des-recommandations-sur-la-normalisation-des-annotations-Web-quelles-repercussions-sur-le-Web-actuel/">
                    <h2><?=$art2["titre"]?></h2></a>
                        <?=$art2["date"]?></br>
                        <?=$art2["contenu"]?>
            </li>
            <li>
                <a href="https://www.numerama.com/magazine/31104-html5-standard-du-web.html">
                    <h2><?=$art3["titre"]?></h2></a>
                        <?=$art3["date"]?></br>
                        <?=$art3["contenu"]?>
            </li>
        </ul>

</body>
</html>