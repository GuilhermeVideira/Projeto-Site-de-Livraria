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
            <a class="nav-link" href="./TelaHomeCliente.html" >Home <span class="sr-only"></span> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./TelaConsultarEditora.php"> Editoras  </a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="./TelaHomeCliente.html">Livros</a>
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

    <br><br><br><br>
    
    <div id="header" class="inicio">
        <span class="texto01"> . </span> <br> 
        <span id="formTitle"> Consultar Editoras </span> <br>
        <span class="texto01"> . </span>
      </div>
<br>

    <img class="imagem" src="./imagens/ConsultarClienteImagem.png" alt="ImagemTecnologicaLiteratura">


      <table>
        <thead>
          <tr>
            <th>Código</th>
            <th>Nome da Editora</th>
            <th>Endereço</th>
            <th>N° de Endereço</th>
            <th>Bairro</th>
            <th>Nome do Gerente</th>
          </tr>
        </thead>
        <tbody>
  
        <?php

include 'conexao.php';

$selecionar = "select * from tb_editora"; 

$query = mysqli_query($conexao, $selecionar); 

while($dados = mysqli_fetch_array($query)){
    $codigo = $dados['cd_editora']; 
    $nome = $dados['nm_editora']; 
    $endereco = $dados['nm_endereco']; 
    $nendereco = $dados['nr_endereco'];
    $bairro = $dados['nm_bairro']; 
    $gerente = $dados['nm_gerente']; 
    ?>

<tr>

<td> <?php echo"$codigo"?> </td> 
<td> <?php echo"$nome"?> </td> 
<td> <?php echo"$endereco"?> </td> 
<td> <?php echo"$nendereco"?> </td> 
<td> <?php echo"$bairro"?> </td> 
<td> <?php echo"$gerente"?> </td> 

</tr>

<?php }; 

mysqli_close($conexao); 

?>

        </tbody>
      </table>
    
</body>
</html>