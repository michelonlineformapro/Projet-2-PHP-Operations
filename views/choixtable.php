<h4 class="text-info">Votre résultat :</h4>
<?php
if(isset($_POST['multiple'])){
    //Récup de la variable choix ru multiplicateur -> liste déroulante de 1 à 10
    $multiple = $_POST['multiple'];
    //Boucle de lecture 1 à 10 à multiplié par le multiplicateur
    for ($i = 0; $i < 11; $i++) {
        echo '<ul>
                <li> ' . $i * $multiple . '</li>
             </ul>';
    }
}
?>
<a href="index.php?url=home" class="btn btn-outline-warning">Retour</a>
