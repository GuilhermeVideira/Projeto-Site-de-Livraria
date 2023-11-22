<?php

include 'conexao.php';   

$nome = $_POST['nm_livro'];
$data = $_POST['dt_compra'];
$valor = $_POST['vl_compra'];
$editora = $_POST['nm_editora'];
$cliente = $_POST['cd_cliente'];

$insert = "INSERT INTO `tb_compra` (`cd_compra`, `nm_livro`, `dt_compra`, `vl_compra`, `nm_editora`, `fk_cd_cliente`) VALUES (NULL, '$nome', '$data', '$valor', '$editora', '$cliente')";

$sql = mysqli_query($conexao, $insert); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Livraria - Virtual </title>

    <link rel="shortcut icon" href="./imagens/DomentosImagens.png" type="image/x-icon">

    <link rel="stylesheet" href="css/TelaHomeCliente.css">

    <script src="./js/TelaHomeCliente.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

  <header class="cabecalho">
    <nav class="navbar col-12 m-auto position-fixed navbar-expand-lg navbar-dark bg-primary" style="z-index:999;">
      <a class="navbar-brand" href="#"> Livraria Virtual </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#" >Home <span class="sr-only"></span> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./TelaConsultarEditora.php"> Editoras  </a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="#livrosDisponiveis">Livros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./TelaConsultarCompras.php"> Histórico de Compras </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./TelaPerfilCliente.html">Perfil </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.html">Sair </a>
          </li>
</header>

 
    <br><br><br><br><br>


    <div class="content">

    <span class="texto01"> -- Livraria Virtual -- </span>

    <br><br><br>

    <span class="texto02"> Bem-vindo(a) à "Universo das Letras", onde a paixão pela leitura se encontra com a conveniência da tecnologia! Explore um mundo de  </span>

    <br>

    <span class="texto02"> conhecimento e entretenimento através das obras cuidadosamente selecionadas das melhores editoras do mercado.  </span>

    <br>

    <span class="texto02"> Navegue por categorias fascinantes, descubra novos lançamentos ou encontre clássicos atemporais, tudo ao alcance de um clique.  </span>

    <br><br><br>    <center> <div class="linha2"></div> </center>
    <br><br><br>

    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
         <div class="card">
            <div class="card-body">
              <a href="./TelaConsultarEditora.php">  <h5 class="card-title"> <span class="texto04"> Editoras </span> </h5>
              <p class="card-text"> <span class="texto03"> Dê um mergulho nas vastas possibilidades literárias oferecidas pelas renomadas editoras que colaboram conosco. De grandes casas editoriais a pequenas editoras independentes, cada uma trazendo uma perspectiva única e uma variedade de gêneros para atender a todos os gostos. Explore catálogos diversificados, desde ficção e não-ficção até poesia, ciência e muito mais. Conecte-se diretamente com as mentes brilhantes por trás das palavras e descubra o prazer de se perder em narrativas envolventes. </span> </p>
            </div>
          </div> </a>
        </div>
        <div class="col-sm-6">
         <div class="card">
            <div class="card-body">
              <a href="./TelaConsultarCompras.php">  <h5 class="card-title"> <span class="texto04"> Histórico de Compras </span> </h5>
              <p class="card-text"> <span class="texto03">  Mantenha-se no controle de suas experiências literárias através do acesso fácil e intuitivo ao seu histórico de compras. Revise suas aquisições passadas, relembre os títulos que o transportaram para mundos imaginários e descubra sugestões personalizadas com base em suas preferências. Nunca foi tão simples rastrear suas jornadas literárias e redescobrir aqueles momentos especiais compartilhados com personagens inesquecíveis. Além disso, aproveite para ficar atualizado sobre promoções exclusivas e ofertas especiais. </span> </p>
            </div>
          </div> </a>
        </div>
      </div>

      <br><br> <br><br>

      <center> <div class="linha"></div> </center>

      <br><br> 

      <div id="livrosDisponiveis" class="livros">

      </div>
      <span class="texto05"> Livros Disponiveis:  </span>

      <br><br>
      <br><br>

      <img class="imagem" src="./imagens/ImagemHomeCliente.png" alt="ImagemTecnologicaLiteratura">

      <div id="container">
      <span id="formTitle"> ----------------------------- Ficção Científica -----------------------------  </span>
      </div>

    <div class="posicaocartao">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <div class="card-body">
      <a href="./TelaCadastroCompra.html">
        <h5 class="card-title">Duna de Frank Herbert </h5>
              <p class="card-text"> Uma saga épica que se desenrola em um planeta desértico chamado Arrakis, repleto de intriga política, ecologia e uma substância valiosa chamada "especiaria". </p>
            </div> </a>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a href="./TelaCadastroCompra.html">
              <div class="card-body">
              <h5 class="card-title">  Neuromancer de William Gibson </h5>
              <p class="card-text"> Um romance cyberpunk que introduziu o conceito de ciberespaço, mergulhando os leitores em uma realidade virtual de hackers, inteligência artificial e conspirações. </p>
            </div></a>
          </div>
        </div>

<br> 
<br> 
<br> 
        <div class="col">
          <div class="card">
            <div class="card-body">
              <a href="./TelaCadastroCompra.html">
                <h5 class="card-title">O Guia do Mochileiro das Galáxias de Douglas Adams</h5>
              <p class="card-text">Uma comédia espacial que segue as desventuras de Arthur Dent, um terráqueo que é resgatado por um alienígena momentos antes da destruição da Terra.</p>
            </div></a>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <a href="./TelaCadastroCompra.html">
                <h5 class="card-title">Snow Crash de Neal Stephenson</h5>
              <p class="card-text"> O livro citado Snow Crash de Neal Stephenson é um thriller de ficção científica que combina linguística, computação e ação, explorando um mundo virtual e uma conspiração corporativa. Você poderá explorar muito mais!</p>
            </div></a>
          </div>
        </div>
      </div>
       
    </div>


    <br><br><br><br><br><br><br><br><br><br><br><br><br>

    <img class="imagem" src="./imagens/ImagemHomeCliente.png" alt="ImagemTecnologicaLiteratura">


    <div id="container2">
      <span id="formTitle"> ---------------------------------- Fantasia ----------------------------------  </span>
      </div>

      <div class="posicaocartao2">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <a href="./TelaCadastroCompra.html">
                  <h5 class="card-title">O Senhor dos Anéis de J.R.R. Tolkien</h5>
                <p class="card-text"> O Senhor dos Anéis de J.R.R. Tolkien é uma obra-prima da fantasia que segue a jornada épica de Frodo Baggins para destruir um anel maligno e salvar a Terra-média. </p>
              </div></a>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <a href="./TelaCadastroCompra.html">
                  <h5 class="card-title">  As Crônicas de Gelo e Fogo de George R.R. Martin </h5>
                <p class="card-text"> ma série complexa que envolve intrigas políticas, guerra e elementos fantásticos, sendo a base para a série de TV "Game of Thrones". </p>
              </div></a>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <a href="./TelaCadastroCompra.html">
                  <h5 class="card-title">Harry Potter e a Pedra Filosofal de J.K. Rowling</h5>
                <p class="card-text">O início da série que cativou o mundo, seguindo as aventuras mágicas do jovem bruxo Harry Potter e seus amigos em Hogwarts.</p>
              </div></a>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <a href="./TelaCadastroCompra.html">
                  <h5 class="card-title">O Nome do Vento de Patrick Rothfuss</h5>
                <p class="card-text"> Uma narrativa envolvente que segue a vida do músico e mago Kvothe, que narra suas aventuras e desventuras ao longo de sua jornada durnte o desenvolvimento do livro.</p>
              </div></a>
            </div>
          </div>
        </div>
         
      </div>


      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      <img class="imagem" src="./imagens/ImagemHomeCliente.png" alt="ImagemTecnologicaLiteratura">

      <div id="container3">
        <span id="formTitle"> ---------------------------------- Romance  ----------------------------------  </span>
        </div>

        <div class="posicaocartao3">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <a href="./TelaCadastroCompra.html">
                  <h5 class="card-title"> Orgulho e Preconceito de Jane Austen</h5>
                <p class="card-text"> Uma história de amor e preconceito que se desenrola na sociedade aristocrática do século XIX, centrada no relacionamento entre Elizabeth Bennet e Mr. Darcy. </p>
              </div></a>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <a href="./TelaCadastroCompra.html">
                  <h5 class="card-title"> O Nome do Vento de Patrick Rothfuss </h5>
                <p class="card-text"> Uma narrativa cativante que segue a vida do músico e mago Kvothe, que narra suas aventuras e desventuras ao longo de sua jornada durante o desenvolvimento do livro.  </p>
              </div></a>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <a href="./TelaCadastroCompra.html">
                  <h5 class="card-title">O Caçador de Pipas de Khaled Hosseini</h5>
                <p class="card-text"> O Caçador de Pipas de Khaled Hosseini é uma história emocionante que se passa no Afeganistão, abordando amizade, redenção e os efeitos duradouros das escolhas. </p>
              </div></a>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <a href="./TelaCadastroCompra.html">
                  <h5 class="card-title">Cavalo de Guerra de Michael Morpurgo</h5>
                <p class="card-text">Um romance que segue a extraordinária jornada de amizade entre um cavalo chamado Joey e seu jovem dono durante a Primeira Guerra Mundial.</p>
              </div></a>
            </div>
          </div>
        </div>         
      </div>

</body>
</html>