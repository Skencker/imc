<?php
$imc = '';
$corpu = '';
$error_message = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $poids = htmlspecialchars( $_POST['poids']);
  $taille = htmlspecialchars( $_POST['taille']);
  //message erreur
  $error_message = '';
  if (isset($_POST['poids']) && isset($_POST['taille'])){
    if (is_numeric($poids) && is_numeric($taille) && ($poids > 0) && ($taille > 0) && ($poids < 180) && ($taille < 2.5)  ) {
      // Calcul IMC
      // IMC arrondi à 1 décimale à l'entier le plus proche
       $imc = round($poids/($taille*$taille), 1, PHP_ROUND_HALF_EVEN);
      // Classification IMC
      switch($imc) {
          case $imc < 18.5 && $imc > 0:
            $corpu = "Vous êtes en insuffisance pondérale";
            break;
          case $imc >= 18.5 && $imc < 25:
            $corpu = "Vous avez une corpulence Normale";
            break;
          case $imc >= 25 && $imc < 30 :
            $corpu = "Vous êtes en Surpoids";
            break;
          case $imc >= 30 :
            $corpu = "Vous êtes en Obésité";
            break;
      } 
    } else {
        $error_message = 'Vous devez renseigner un poids et une taille valide, poids en kg et taille en m. ';
    }    
  } else {
      header ('Location: ../calcul-imc/');
  } 
}
?>