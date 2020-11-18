<?php
//Recup de l'entrée du joueur
if(isset($_POST['answerInput'])){
    $answerInput = $_POST['answerInput'];
}
//Récup de la reponse input type hiden
if(isset($_POST['reponse'])){
    $reponse = $_POST['reponse'];
}
//Condition du message si bonne ou mauvaise réponse
if($answerInput == $reponse){
    echo "<p class='alert-success'>Bonne réponse !</p>";
}else{
    echo "<p class='alert-danger'>Mauvaise réponse !</p>";
}
?>
<hr>
<a href="index.php?url=home" class="btn btn-outline-dark">Retour</a>
<hr>