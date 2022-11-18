<?php
    include("conexao.php");
    if(isset($_POST['bt_nome'])){
        $nome = $_POST['bt_nome'];
        $idade =  $_POST['bt_idade']; 
        $img =  $_FILES['bt_foto'];
       
        $pasta ="recebidos/";
        $nome_img=$img['name'];
        $novo_nome_img= uniqid();
        $extensao = strtolower(pathinfo($nome_img, PATHINFO_EXTENSION));
        $caminho = $pasta . $novo_nome_img . "."  . $extensao;


        $mysqli -> query("INSERT INTO aluno (nome, idade, img) 
          values('$nome', '$idade', '$caminho')") or die ($mysqli->error);
        //var_dump($extensao);

         move_uploaded_file($img["tmp_name"], $caminho);
            
    }
       

 
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="cine.css">
        <title>Cadastro</title>
    </head>
    <body>    
    <nav class="navbar fixed-top" style="background-color: #add8e6;">
      <div class="container-fluid">
<<<<<<< HEAD
        <a class="navbar-brand" href="index.html"><h1 class="men"> Cadastro</h1></a>
=======
        <a class="navbar-brand" href="#"><h1 class="men"> Cadastro</h1></a>
>>>>>>> jpp
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" style="background-color: #642399;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <img src="imgs/sovete.png" alt="">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html"><h2 class="man">Início</h2></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cursos.html"><h2 class="man">Registre um Aluno</h2></a>
              </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="consultar.php"><h2 class="man">Todos os Alunos</h2></a>
            </li>
              <li class="nav-item dropdown">
          </div>
        </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input  class="form-control" type="text" name="bt_nome" required>
                    <label class="form-label" for="bt_nome">Insira o nome do aluno:</label>
                    <div class="form-text">*Inserir o nome completo.</div>
                </div>
                <div class="form-floating mb-3">
                    <input  class="form-control" type="text" name="bt_idade" required>
                    <label class="form-label" for="bt_end">Insira a idade:</label>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="file" name="bt_foto" required>
                    <label class="form-label" for="bt_arquivo">Selecione a foto: </label>
                    <div class="form-text">*Inserir apenas arquivos .jpg</div>
                </div>
                <button class="btn btn-primary" type="submit">Enviar Arquivo</button>
                <button class="btn btn-danger" type="reset">Limpar</button>
            </form>
        </div>        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>