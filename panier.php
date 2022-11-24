<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once(__DIR__ . "/php/fileHead.php"); ?>
</head>

<body>
    <?php include_once(__DIR__ . "/php/fileHeader.php"); ?>

    <main class="main-0">
        <?php include_once(__DIR__ . "/php/fileMenu.php"); ?>

        <section>
            <div>
                <button onclick="ajouterArticle(1)">Ajouter Article 1€</button>
                <button onclick="ajouterArticle(10)">Ajouter Article 10€</button>
                <button onclick="ajouterArticle(100)">Ajouter Article 100€</button>
            </div>
        </section>

        <section>
            <div id="texte-panier">Mon panier est vide</div>
        </section>

    </main>

    <?php include_once(__DIR__ . "/php/fileFooter.php"); ?>
</body>

</html>