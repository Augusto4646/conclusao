<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Site da Padaria inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        .background-image {
            background: url('IBAGENS/padaria3 (2).PNG') no-repeat center center scroll;
             -moz-background-size: cover;
              -o-background-size: cover;
               background-size: 1179px;
                position: relative;
                 height: 100vh; 
                 margin-top: 25px;
              }

              .centrado{
                 position:absolute;
                 top: 45%;
                 left:48%;
                 transform: translate(-50%, -50%);
              }

              .Div-Logo{
                 position:absolute;
                 top: 50%;
                 left:48%;
                 transform: translate(-50%, -50%);
              }

              .esquerda{
                position:absolute;
                 top: -10%;
                 left:18%;
                 transform: translate(-50%, -50%);
                }
                
                  .direita-Produtos{
                 position:absolute;
                 top: 50%;
                 right:78%;
                 transform: translate(-50%, -50%);
                 }

                 .direita-Sobre{
                  position:absolute;
                 top: 50%;
                 right:69%;
                 transform: translate(-50%, -50%);
                 }

                 .direita-Executivo{
                  position:absolute;
                 top: 50%;
                 right:61%;
                 transform: translate(-50%, -50%);
                 }


                 .direita-Home{
                  position:absolute;
                 top: 50%;
                 right:46%;
                 transform: translate(-50%, -50%);
                 }

                 .Dimensionamento-BoasVindas{
                  position:absolute;
                 top: 92%;
                 left:58%;
                 width: 200px;
                 transform: translate(-50%, -50%);
                 }

                 .navbar-custom {background-color: #EAD9C0;} 
                   
                  .button-custom {color: #E8D1BC;border: 2px solid #FFDDBB} 

                  .nav-item:link, .nav-item:visited, .nav-item:hover, .nav-item:active {color: #000000;text-decoration: none;  }

                  body {background-color: #FAEACB;}

</style>

</head>

<body>

<div>
<nav class="navbar navbar-expand-sm navbar-custom">
  <a class="navbar-brand" href="#"></a>
  <img src="IBAGENS/Logo4.PNG" style="width: 25px; height: 25px;" alt="">
  <button class="navbar-toggler" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="navbar-nav mr-auto">
  <a class="btn btn-outline navbar-custom nav-item" style="width:90px"href="http://localhost:8080" role="button">Pagina Inicial</a>
  </div>

  <div class="navbar-nav mr-auto">
  <a class="btn btn-outline direita-Produtos navbar-custom nav-item" href="http://localhost:8080/Produtos.php" role="button">Produtos</a>
  </div>

  <div class="navbar-nav mr-auto">
  <a class="btn btn-outline direita-Sobre nav-item" href="http://localhost:8080/Sobre.php" role="button">Sobre nos</a>
  </div>

  <div class="navbar-nav mr-auto">
  <a class="btn btn-outline direita-Executivo nav-item" href="http://localhost:8080/Executivo.php" role="button">Executivo</a>
  </div>

  <div class="navbar-nav mr-auto">
  <a class="btn btn-outline direita-Home nav-item" href="http://localhost:8080/TrabalheConosco.php" role="button">Trabalhe conosco</a>
  </div>


</nav>
</div>

<div class="container-fluid background-image"></div>
<div class="container-fluid background-color"></div>

</div>

<div class="w-25 p-4 Div-Logo" style="top:45%; left: 675px">
   <img src="IBAGENS/Logo4.PNG" class="img-fluid" style="width:140px;" alt="Pagina-inicial">
   <p class="lead Dimensionamento-BoasVindas" style="color: #FFFFFF; font-size: 35px; top:85%; bottom: 60px; left: 120px;">Bem vindo!</p>
 </div>

<br>

<div class="cards-container" style="display: flex; flex-wrap: wrap; justify-content: center; align-items: flex-start; gap: 50px; padding: 25px;">

<?php
include 'Conexaobanco.php';
$result = $mysqli->query("SELECT nome, descricao, imagem FROM paginainicial");
 if ($result) {
     while ($produto = $result->fetch_assoc()) {
         echo "<div class='card' style='width: 1180px;margin: 20px;'>";
        echo "<img class='card-img-top' src='IBAGENS/" . $produto['imagem'] . "'style='width: 1180px;height: 630px;' alt='" . $produto['nome'] . "'>";
        echo "<div class='card-body'>";
        echo "<h3 class='card-title'>" . $produto['nome'] . "</h3>";
        echo "<p>" . $produto['descricao'] . "</p>";
        echo "</div>";
        echo "</div>";  
    }
}
?>

</body>
</html>