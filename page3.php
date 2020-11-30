<?php 

    require_once 'articles.php';

    $article = $articles[2];

?>
<h1>IA</h1>

    <article>
                <h2 class="backwhite"><?=$article["titre"]?></h2></a>
                <p class="backwhite">Date : <?=$article["date"]?></p>
                <em class="backwhite"><?=$article["contenu"]?></em>
    </article>

