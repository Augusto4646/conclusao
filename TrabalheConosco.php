<!DOCTYPE html>
<html>
<head>

    <title>Trabalhe Conosco</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
            .centrado{
                 position:absolute;
                 top: 5%;
                 left:48%;
                 transform: translate(-50%, -50%);}
                 .centrado4 {
            text-align: center;  
        }
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
            padding: 1rem;
        }  
        
        .caixa-branca2{
            background-color: #FFF;
            padding: 0.75rem;
        }   

        .direita-Home{
                  position:absolute;
                 top: 50%;
                 right:47%;
                 transform: translate(-50%, -50%);
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

<div class="jumbotron jumbotron-fluid jumbotron-custom"style="height: 150px">
        <h1 class="centrado4">Trabalhe Conosco</h1>
    </div>

<div>  
<img class="img-fluid caixa-branca2"src="IBAGENS/TBC (2).PNG" type="IMG" style="position: absolute; right: -15px; top: 610px; width: 902px; height: 412px;margin-bottom:  5px;">
</div>

<br>

<div > 
<img class="img-fluid caixa-branca2"src="IBAGENS/TBC (1).PNG" type="IMG" style="position: absolute; right: -15px;top:40%; width: 902px; height: 370px;">
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

    <div class="jumbotron jumbotron-fluid jumbotron-custom "style="position:absolute;top: 1040px;width: 1349px"><h2 style="position:absolute; left: 485px;top: 50px;">Porque nos escolher</h2>
    <p class="caixa-branca"style="position:absolute;width: 1349px;top:150px; margin: -0px;">Escolher trabalhar na Padaria Tronco e Raiz representa uma oportunidade única de integrar uma equipe que valoriza não apenas a qualidade de seus produtos, mas também o desenvolvimento profissional e pessoal de seus colaboradores. Em nosso ambiente de trabalho, cultivamos uma cultura de respeito, colaboração e inovação, onde cada funcionário é encorajado a trazer novas ideias e perspectivas, contribuindo para o crescimento contínuo da empresa e a satisfação dos clientes. Oferecemos treinamento contínuo, possibilitando o desenvolvimento de habilidades específicas na arte da panificação e confeitaria, bem como competências gerenciais e de atendimento ao cliente, preparando nossa equipe para enfrentar os desafios do mercado com confiança e competência. Além disso, acreditamos firmemente no equilíbrio entre vida profissional e pessoal, oferecendo horários flexíveis e um ambiente de trabalho positivo e acolhedor. Trabalhar na Padaria Tronco e Raiz significa fazer parte de uma família que se dedica não apenas a produzir alimentos de alta qualidade, mas também a criar um espaço onde clientes e colaboradores se sintam em casa, promovendo um senso de comunidade e pertencimento que é raro no setor. Com a nossa abordagem inovadora e compromisso com a excelência, somos não apenas uma escolha de trabalho, mas um caminho para um futuro profissional promissor e gratificante.</p>
    </div>

</body>
</html>