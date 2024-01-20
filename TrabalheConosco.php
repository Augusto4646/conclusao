<!DOCTYPE html>
<html>
<head>

    <title>Formulário de Trabalhe Conosco</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
            .centrado{
                 position:absolute;
                 top: 5%;
                 left:48%;
                 transform: translate(-50%, -50%);}

              .centrado2{
                 position:absolute;
                 top: 105%;
                 left:90%;
                 transform: translate(-50%, -50%);}

              .baixo{
                 position:absolute;
                 bottom:75%;
                 top: 25%;
                 transform: translate(-50%, -50%);
                 left:36%;
                 width:28%;}

                 .direita{
                 position:absolute;
                 top: 25%;
                 right:10%;
                 transform: translate(-50%, -50%);}

                 .esquerda{
                position:absolute;
                 top: 25%;
                 left:15%;
                 transform: translate(-50%, -50%);}

                .direita-Produtos{
                 position:absolute;
                 top: 50%;
                 right:77%;
                 transform: translate(-50%, -50%);}

                 .direita-Sobre{
                  position:absolute;
                 top: 50%;
                 right:68%;
                 transform: translate(-50%, -50%);}

                 .direita-Executivo{
                  position:absolute;
                 top: 50%;
                 right:60%;
                 transform: translate(-50%, -50%);}

        .caixa-branca{
            background-color: #FFF;
            padding: 1.3rem;
        }  
        
        .caixa-branca2{
            background-color: #FFF;
            padding: 0.75rem;
        }   

        .navbar-custom {background-color: #EAD9C0;} 
        .jumbotron-custom{background-color:  #F4EDE5;}

        .nav-item:link, .nav-item:visited, .nav-item:hover, .nav-item:active {color: #000000;text-decoration: none;  }

        .button-custom {color: #E8D1BC;border: 2px solid #FFDDBB} 

        body{background-color: #FAEACB;}

    </style>
</head>
<body>
<div class="container-fluid background-color"></div>

<nav class="navbar navbar-expand-sm navbar-custom">
  <a class="navbar-brand" href="#"></a>
  <img src="IBAGENS/Logo4.PNG" style="width: 25px; height: 25px;" alt="">
  <button class="navbar-toggler" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-nav mr-auto">
  <a class="btn btn-outline navbar-custom nav-item " style="width:90px"href="http://localhost:8080/TrabalheConosco.php" role="button">Trabalhe conosco</a>
  </div>

  <div class="navbar-nav mr-auto">
  <a class="btn btn-outline navbar-custom nav-item direita-Produtos" href="http://localhost:8080/Produtos.php" role="button">Produtos</a>
  </div>

  <div class="navbar-nav mr-auto">
  <a class="btn btn-outline navbar-custom nav-item direita-Sobre" href="http://localhost:8080/Sobre.php" role="button">Sobre nos</a>
  </div>

  <div class="navbar-nav mr-auto">
  <a class="btn btn-outline  direita-Executivo" href="http://localhost:8080/Executivo.php" role="button">Executivo</a>
  </div>

</nav>
</div>

<div class="jumbotron jumbotron-fluid jumbotron-custom "style="height: 50px;"><h1 class="centrado baixo"style="top: 115px; left: 650px; bottom: 500px; padding:1.2rem">Trabalhe conosco</h1></div>
</div>

<div>  
<img class="img-fluid caixa-branca2"src="IBAGENS/TrabalharC.PNG" type="IMG" style="position: absolute; right: 43px; top: 650px; width: 902px; height: 405px;">
</div>

<div > 
<img class="img-fluid caixa-branca2"src="IBAGENS/t2.PNG" type="IMG" style="position: absolute; right: 43px; top: 255px; width: 902px; height: 370px;">
</div>


 
<div class="container-fluid baixo esquerda"style="color:black margin: 10px; top:40%">
        <form action="http://localhost:8080/FormularioEnviado.php" method="post" class="row row-cols-sm-auto g-3 align-items-center caixa-branca">    

            <div style="width: 1000px">
                <label for="nome" class="control-label">Nome:</label>
                <input type="text" name="Nome" class="form-control" id="nome">
            </div>
        
            <br>
        
            <div style="width: 1000px">
                <label for="Sobrenome" class="control-label">Sobrenome:</label>
                <input type="text" name="Sobrenome" class="form-control" id="Sobrenome">
            </div>

            <br>

            <div style="width: 1000px">
                <label for="Email" class="control-label">Email:</label>
                <input type="text" name="Email" class="form-control" id="Email">
            </div>


            <br>
         
            <div style="width: 1000px">
                <label for="Contato" class="control-label">Contato:</label>
                <input type="text" name="Contato" class="form-control" id="Contato">
            </div>

            <br>
           
            <div style="width: 1000px">
                <label for="CPF" class="control-label">CPF:</label>
                <input type="text" name="CPF" class="form-control" id="CPF">
            </div>

            <br>

            <div style="width: 1000px">
                <label for="RG" class="control-label">RG:</label>
                <input type="text" name="RG" class="form-control" id="RG">
            </div>
            
            <br>

            <div style="width: 1000px">
                <label for="Endereço" class="control-label">Endereço:</label>
                <input type="text" name="Endereço" class="form-control" id="Endereço">
            </div>
            
            <div style="width: 1000px">
                <label for="Curriculo" class="control-label">Curriculo:</label>
                <input type="file" name="Curriculo" class="form-control" id="Curriculo">
            </div>

            <br>

            <button type="submit" style="width: 350px"class="btn btn-primary">Enviar</button>

   </div>
         </form>
    </div>

</body>