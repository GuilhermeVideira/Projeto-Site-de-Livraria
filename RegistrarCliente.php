<?php

include 'conexao.php';  

$nome = $_POST['nm_cliente'];
$endereco = $_POST['nm_endereco'];
$numeroendereco = $_POST['nr_endereco'];
$cpf = $_POST['nr_cpf'];
$cnpj = $_POST['nr_cnpj'];
$senha = $_POST['nr_senha'];
$telefone = $_POST['nr_telefone'];

$insert = "INSERT INTO `tb_cliente` (`cd_cliente`, `nm_cliente`, `nm_endereco`, `nr_endereco`, `nr_cpf`, `nr_cnpj`, `nr_senha`, `nr_telefone`) VALUES (NULL, '$nome', '$endereco', '$numeroendereco', '$cpf', '$cnpj', '$senha', '$telefone')";

$sql = mysqli_query($conexao, $insert); 

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Livraria - Virtual </title>
    
    <link rel="shortcut icon" href="./imagens/DomentosImagens.png" type="image/x-icon">

    <link rel="stylesheet" href="css/TelaInicial.css">

    <script src="./js/TelaInicial.js"></script>

</head>

<body>

  <div class="container">

       <span class="texto03"> Livraria Virtual </span>

       <img class="imagem" src="./imagens/ImagemLivraria.png" alt="ImagemLivraria">

        <div class="blue-bg"></div>        

        <br><br>

        <div class="posicaotexto">
        <span class="texto01"> Bem vindo(a)! </span>
        </div>

        <br><br><br> <br><br>

        <div class="login-container">
           
        <form id="myForm" onsubmit="return onSubmit()" >

            <div class="posicaotexto2">
            <span class="texto02"> Nome de Usuário: </span>
            </div> <br>
             
            <input type="text" placeholder="Nome de Usuário">

              <br>
              
              <div class="posicaotexto2">
                 <span class="texto02">Senha: </span>
              </div> 
              
              <br>

              <input type="password" placeholder="Senha">

              <br>

              <div class="posicaotexto2">
                <span class="texto02">Acesso: </span>
              </div> 
                
              <br>
                
    <select id="mySelect" name="mySelect">
      <option value="cliente">Cliente</option>
      <option value="editora">Editora</option>
    </select>

    <br><br>

    <button type="submit">Acessar</button>
  </form>

            </form>
          </div>

          <br> <br> <br>

          <div class="posicao">
          <div class="linha"></div>
          </div>

          <br>

        <div class="posicaotexto3">
            <span class="texto02"> Não possue uma conta? </span> 
        </div>
        
        <br>

         <div class="posicaotexto4">
            <span class="texto02"> Cadastra-se: </span>
        </div> 

          <br><br>

          <div class="botoes-container">
            <div class="posicao">

            <a href="./TelaCadastroCliente.html"> 
          <button class="botao cliente">Cliente</button>
        </a>

        
        <a href="./TelaCadastroEditora.html">
            <button class="botao editora">Editora</button>
        </a>
          </div>
        </div>
        
    </div>

</body>
</html>
