
<div class="container">
        <h3 class="text-success">Afficher la table de multiplication de 3</h3>
        <?php
        //Variable multiplicateur
        $multiplicateur = 3;
        //Boucle incremente de 1 à 10
        for($i = 0; $i < 11; $i++){
            echo '<ul>
                <li> '. $i * $multiplicateur .'</li>
             </ul>';
        }
        ?>
    <a href="index.php?url=home" class="btn btn-outline-danger">Retour</a>
</div>