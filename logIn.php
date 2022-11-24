<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once(__DIR__ . "/php/fileHead.php"); ?>
</head>

<body>

    <?php include_once(__DIR__ . "/php/fileHeader.php"); ?>


    <main>
        <div class="form">
            <form class="register-form togle">
                <input type="text" placeholder="email">
                <input type="password" placeholder="mot de passe">
                <input type="password" placeholder="saisir a nouveau le mot de passe">
                <button>enregistrer</button>
                <p class="message">déjà enregistrer? <a class="action" href="#">connecte toi</a></p>
            </form>
            <form class="login-form">
                <input type="text" placeholder="email">
                <input type="password" placeholder="mot de passe">
                <p class="mdp"><a href="#">mot de passe oublié</a></p>
                <button>connexion</button>
                <p class="message">pas enregistrer? <a class="action" href="#">créer toi un compte</a></p>
            </form>
        </div>
    </main>
    <?php include_once(__DIR__ . "/php/fileFooter.php"); ?>
</body>

</html>