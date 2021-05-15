<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Calcul IMC</title>
</head>
<body>
  <div class="container">

    <header>
      <h1>Calcul IMC</h1>
      <h2>Vous voulez connaître votre indice de masse corporelle ?</h2>
      <form method="POST" action="index.php" required>
        <input type="text" class="form-control" id="poids" name="poids" placeholder="Poids (en kg) ex: 75">
        <input type="text" class="form-control" id="taille" name="taille" placeholder="Taille (en mètres) ex: 1.70">
        <input type="submit" value="Calculer"></button>
      </form>
    </header>
    <main>
      <div class="resultat">
        <?php 
          include_once "imc.php";
          echo '
          <h2> Votre IMC est de </h2>
          <p class="imc">' . $imc . '</p>
          <p class="corpu">' . $corpu . '</p>
          <p> ' . $error_message .'</p>';
        ?>
      </div>
    </main>
  </div>
</body>
</html>