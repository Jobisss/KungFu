<?php
    include("conexao.php");
    include("menu.php");

    $id_mensagem = intval($_GET["id"]);
    $sql_mensagens = "SELECT * FROM aluno WHERE id = '$id_mensagem'";
    $consulta_mensagens = $mysqli->query( $sql_mensagens) or die($mysqli->error);
    $mensagem = $consulta_mensagens -> fetch_assoc();

    $sumir = false;


   // var_dump($_POST['confirmar']);


    if(isset($_POST['confirmar'])){
        $sql_deletar = "DELETE FROM aluno WHERE id = '$id_mensagem'";
        $deucerto = $mysqli->query($sql_deletar) or die ($mysqli->error);
        $sumir = true;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"   integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style_apagar.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="table-responsive">
            <?php 
            if($sumir == false){
            ?>
            <table class ="table table-hover">
                <thead>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Id</th>
                </thead>
                <tbody>
                    <td><?php echo $mensagem['nome'];?></td>
                    <td><?php echo $mensagem['idade'];?></td>
                    <td><a href="<?php echo $mensagem['img'];?>"><?php echo $mensagem['img'];?></a></td>
                    <td><?php echo $mensagem['id']?></td>
                </tbody>
                
            </table>
            <form action="" method="post">
                    <h3>Tem certeza que deseja apagar ? </h3>
                    <button name="confirmar" value="1" class="btn btn-danger">Sim</button>
                    <a href="apagar_produtos.php" class="btn btn-default">Não</a>            
                </form>
            <?php 
            }else{
                echo "Mensagem apagada com sucesso <br>";      
            ?>
            <a href="consultar.php"><button class="btn btn-danger">Voltar</button></a>
            <?php
            }
            ?>
            

           
            
        </div>
    </div>    
</body>
</html>