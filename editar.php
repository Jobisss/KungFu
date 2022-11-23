<?php
    include ("conexao.php");

    $foi = true;

    $id_aluno = $_GET['id'];
    
    if(count($_POST) > 0) {

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];


        $sql_editar = "UPDATE aluno SET nome = '$nome', idade = '$idade' WHERE id ='$id_aluno'";

        $deucerto = $mysqli->query($sql_editar) or die ($mysqli->error);

        $foi = false;
    }

    $sql = "SELECT * FROM aluno WHERE id = '$id_aluno'"; // Comando SQL para listar a tabela form_mensagem com Id_mesnsagem
    $query_mensagem = $mysqli->query($sql) or die ($mysqli->error); // Comando para dar o star Query
    $mensagem = $query_mensagem->fetch_assoc();
?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <title>Naruto - Contato</title>
    </head>
    <body>
        <!-- Menu começa -->
        <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
            <a class="navbar-brand" href="index.html">
           <img src="imagens/PICAPICA.png" alt="" width="33px" height="33px" id="logo">
            </a>
          </div>
  
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" id="testefda">
         <ul class="nav navbar-nav">
         </ul>
       </div>
     </div>
   </nav>
        <!-- Fim começa -->
        <div class="container">
            <h1>Entre em contato:</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label>Nome:</label>
                    <input value="<?php echo $mensagem['nome']?>" name="nome" required type="text" class="form-control">

                    <label>Idade:</label>
                    <input value="<?php echo $mensagem['idade']?>" name="idade" required type="number" class="form-control">
                </div>            
                  
                
                <button name="envio" type="submit" class="btn btn-default">Enviar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
            </form>
            <?php
            if($foi == false){
            if($deucerto){
                echo "<h2>Mensagem atualizado com sucesso.</h2>";
                unset($_POST);            
        ?>
                 <a href="consultar.php"><button type="reset" class="btn btn-default">Voltar</button></a>
        <?php
            }}
        ?>
        </div>
        
        
        <script src="Jquery/jquery-3.6.0.min.js"></script>
        <script src="Bootstrap_3/js/bootstrap.min.js"></script>
    </body>
</html>