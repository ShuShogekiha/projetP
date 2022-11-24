<!--<?php include_once(__DIR__ . "/php/fileBDD.php"); ?>-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once(__DIR__ . "/php/fileHead.php"); ?>
</head>

<body>
    <?php include_once(__DIR__ . "/php/fileHeader.php"); ?>

    <main class="main-0">
        <?php include_once(__DIR__ . "/php/fileMenu.php"); ?>

        <!-- Mise en page Medicament -->
        <div>
            <?php

                include_once(__DIR__ . "/php/fileBDD.php");
                
                $result = new fileBDD();
                $val = $result->getListAromatherapie();

                if($val->execute()) {
                    while($donnees = $val->fetch()) {
                        echo '<div>
                            <img class="" src="./img/medicament/'. $donnees['name'] .'.webp" />
                            <p>'.$donnees['name'] . '</p>
                        </div>';
                    }
                } else {
                    echo 'Une erreur est survenue lors de la récupération de la requête.';
                }
            ?>
        </div>
        <!-- Fin de Mise en page Medicament -->
    </main>
    <?php include_once(__DIR__ . "/php/fileFooter.php"); ?>
</body>