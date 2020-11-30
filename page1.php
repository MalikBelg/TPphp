<h1>Accueil</h1>

<?php 

    require_once 'articles.php';


?>


<?php foreach($articles as $article) : ?>

    <article>
            <h2 class="backwhite"><?=$article["titre"]?></h2></a>
            <p class="backwhite">Date : <?=$article["date"]?></p>
            <em class="backwhite"><?=$article["contenu"]?><a class= "backwhite" href="index.php?vuearticle&art"<?= $index ?>>Lire la suite...</a></em>
    </article>

<?php endforeach ?>








