<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title> Livraria - Virtual </title>

    <link rel="shortcut icon" href="./imagens/DomentosImagens.png" type="image/x-icon">

    <link rel="stylesheet" href="css/TelasConsultas.css">
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
                <a class="nav-link" href="./TelaHomeEditora.html"> Home <span class="sr-only"></span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./TelaConsultarCliente.php"> Clientes  </a>
              </li>
              <li class="nav-item">
               <a class="nav-link" href="./TelaCadastroLivro.html">Cadastrar Livros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./TelaConsultarLivro.php"> Histórico de Livros </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./TelaPerfilEditora.html">Perfil </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./index.html">Sair </a>
              </li>
    </header>

    <br><br><br><br>
    
    <div id="header" class="inicio">
        <span class="texto01"> . </span> <br> 
        <span id="formTitle"> Histórico de Livros </span> <br>
        <span class="texto01"> . </span>
      </div>
<br>

    <img class="imagem" src="./imagens/ConsultarClienteImagem.png" alt="ImagemConsulta">


      <table>
        <thead>
          <tr>
            <th> Código ISBN</th>
            <th>Imagem </th>
            <th>Nome do livro</th>
            <th>Autor</th>
            <th>Data de publicação</th>
          </tr>
        </thead>
        <tbody>
        
        <?php

include 'conexao.php';

$selecionar = "select * from tb_livro"; 

$query = mysqli_query($conexao, $selecionar); 

while($dados = mysqli_fetch_array($query)){

  $codigo = $dados['cd_isbn']; 
  $livro = $dados['nm_livro']; 
  $autor = $dados['nm_autor']; 
  $data = $dados['dt_livro'];

  ?>

<tr>

<td> <?php echo"$codigo"?> </td> 
<td> <?php echo"-----"?> </td> 
<td> <?php echo"$livro"?> </td> 
<td> <?php echo"$autor"?> </td> 
<td> <?php echo"$data"?> </td> 

</tr>

<?php }; 

mysqli_close($conexao); 

?>
        </tbody>
      </table>
    
</body>
</html> 