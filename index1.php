<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Document</title>
</head>
<body class="container m-5">
  <h1>Calcul IMC</h1>
  <form method="POST" action="index.php" required>
    <div class="mb-3">
      <label for="poids" class="form-label">Poids (en kg)</label>
      <input type="text" class="form-control" id="poids" name="poids" placeholder="ex: 75">
    </div>
    <div class="mb-3">
      <label for="taille" class="form-label">Taille (en mètres)</label>
      <input type="text" class="form-control" id="taille" name="taille" placeholder="ex: 1.70">
    </div>
    
    <button type="submit" class="btn btn-primary">Calculer</button>
  </form>

  <?php 

    include_once "imc.php";


      echo '
      <h2> Votre IMC est de ' .  $imc . '</h2>
      <p>' . $corpu . '</p>
      <p> ' . $error_message .'</p>';

  ?>


  <!--bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


</body>
</html>
