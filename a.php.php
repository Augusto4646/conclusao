<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Site da Padaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        .background-image {
            background: url('IBAGENS/padaria3 (2).PNG') no-repeat center center scroll;
             -moz-background-size: cover;
              -o-background-size: cover;
               background-size: 1290px;
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
  <a class="btn btn-outline navbar-custom nav-item" style="width:90px"href="http://localhost:8080/TrabalheConosco.php" role="button">Trabalhe conosco</a>
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

</nav>
</div>

<div class="container-fluid background-image"></div>
<div class="container-fluid background-color"></div>

</div>

<div class="w-25 p-4 Div-Logo" style="Position:Absolute;top:45%; left: 790px">
   <img src="IBAGENS/Logo4.PNG" class="img-fluid" style="width:140px;" alt="Pagina-inicial">
   <p class="lead Dimensionamento-BoasVindas" style="color: #FFFFFF; font-size: 35px; top:85%; bottom: 60px; left: 120px;">Bem vindo!</p>
 </div>

<br>

<div>
 <div class="card "style="margin:25px; height: 910px;color: #000">
 <img class="card-img-top img-fluid mx-auto d-block" src="IBAGENS/lanches.PNG" style="height: 617px;" alt="Pagina-inicial-parte 1">
<div class="card-body">
    <h2 class="card-title">Melhor padaria de caxias do sul!</h2>
    <p class="card-text" style="top:70%">Bem-vindos à Padaria Tronco e Raiz, onde cada grão de farinha conta uma história e cada mordida é uma experiência inesquecível. Fundada com a paixão pela arte milenar da panificação, nossa padaria se destaca pela autenticidade e qualidade insuperável. Aqui, os sabores tradicionais encontram a inovação, resultando em uma variedade impressionante de pães, doces e lanches preparados diariamente. Nossos confeiteiros e padeiros são artesãos da culinária, dedicando-se a combinar técnicas consagradas pelo tempo com toques contemporâneos que deliciam o paladar. Desde o amanhecer, quando o aroma do pão fresco permeia o ar até o entardecer, com as vitrines repletas de confeitarias que são um festim para os olhos, a Padaria Tronco e Raiz é um ponto de encontro para todos aqueles que valorizam o prazer de comer bem. Convidamos você a começar seu dia conosco, desfrutar de uma pausa saborosa em sua rotina ou levar para casa delícias que tornarão qualquer momento especial. Venha fazer parte da nossa história e descubra por que somos mais do que uma padaria: somos uma família que compartilha o amor pelo que faz.</p>
</p>
  </div>
</div>

<br>

<div class="card" style="margin:25px;">
  <a href="http://localhost:8080/TrabalheConosco.php">
    <img class="card-img-top" src="IBAGENS/TrabalheConoscoIMG.PNG" style="height: 630px;" alt="Trabalhe Conosco">
  </a>
  <div class="card-body">
    <h3 class="card-title">Trabalhe Conosco</h3>
    <p>Venha trabalhar na nossa padaria! Aqui você receberá, além de uma compensação alta comparada com o resto da cidade, também toneladas de conhecimento sobre confeitaria, salgados, lanches e culinária tradicional! Em nosso ambiente colaborativo, você terá a chance de aprimorar suas habilidades sob a orientação de mestres padeiros e confeiteiros com anos de experiência. Você será imerso em uma cultura que valoriza a arte da panificação e a inovação, enquanto mantém as tradições que nos tornaram um marco na comunidade. Oferecemos oportunidades de crescimento profissional, workshops de aperfeiçoamento e a possibilidade de trabalhar com equipamentos de ponta. Na nossa padaria, acreditamos que cada membro da equipe é essencial para criar produtos que encantem e satisfaçam nossos clientes. Junte-se a nós e seja parte de uma história de sucesso, onde sua paixão pela culinária se transformará em criações memoráveis que alegram o dia a dia de quem prova nossas delícias!</p>
  </div>
</div>

<br>

<div class="card" style="margin:25px">
<a href="http://localhost:8080/Sobre.php">
<img class="card-img-top" src="IBAGENS/imagem.PNG" style="height: 630px;" alt="Sobre">
</a>
<div class="card-body">
<h3>Sobre Nossa Padaria!</h3>
<p>Desde o início, a Padaria Tronco e Raiz foi mais do que um simples estabelecimento de panificação. Fundada em 1954, na charmosa cidade de Caxias Do Sul, ela surgiu como um modesto empreendimento familiar Nossa trajetória se iniciou com a aspiração de criar um ambiente onde cada pão, doce e prato refletisse nossa devoção à excelência no artesanato culinário. Os primeiros pães assados por Dona Emília, em seu forno a lenha, eram feitos com uma mistura especial de farinhas selecionadas e um ingrediente secreto: uma generosa dose de carinho, que ela insistia ser essencial em cada receita.Com o passar do tempo, a Padaria Tronco e Raiz expandiu seu repertório para incluir uma ampla variedade de pães especiais, bolos artisticamente decorados, tortas frescas e uma seleção de sanduíches gourmet confeccionados com os melhores ingredientes.</p>
</div>
</div>

</div>

</body>
</html>