<?php

include("conexao.php");
include("menu.php");

$sql_mensagens = "SELECT * FROM aluno";

    $consulta_mensagens = $mysqli->query ( $sql_mensagens) or die ($mysqli->error);

    $quantidade_mensagens = $consulta_mensagens->num_rows;

    if (isset($_POST)){
        
       foreach ($_POST as $indice => $valor){ 
            $quantidade = $valor;

            $sql_code = "UPDATE aluno
            SET quantidade = '$quantidade'
            WHERE id_lanche = '$indice'";

            $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
       }

       if(!empty($deu_certo)){
        $sql_mensagens = "SELECT * FROM aluno";
        $consulta_mensagens = $mysqli->query ( $sql_mensagens) or die ($mysqli->error);
        $quantidade_mensagens = $consulta_mensagens->num_rows;
        $_SESSION['resultado'] = "<div class='alert alert-success'>Produtos alterados com sucesso. </div>";
        unset($_POST); 
        unset($deu_certo); 
        
       }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Consultar</title>
</head>
<body>
<div class="container pdg">
        
        <form action="" method="post">
            <a href="index.php"><input class="btn btn-primary" type="button" value="Votar"></a>

            <table class="table shesh">
                <thead>
                    <tr>
                        <th scope="col" class="table-light">Nome</th>
                        <th scope="col" class="table-light">Idade</th>
                        <th scope="col" class="table-light">Arquivo</th>
                    </tr>
                </thead>        
                <tbody>
                    <?php
                        $voltar = "../";
                        
                        
                        if($quantidade_mensagens == 0){
                    ?>
                    <p>Nenhum produto foi cadastrado</p>
                    <?php
                            } else{
                                $d = 1;
                                $contador = 0; 
                                while($mensagem = $consulta_mensagens -> fetch_assoc()){              
                    ?>
                    <tr>
                        <th scope="row"><?php echo $mensagem["nome"]?></th>
                        <td><a target="_blank" href=""><?php echo $mensagem["idade"]?></a></td>
                        <td><a href="<?php echo $mensagem["img"]?>"><?php echo $mensagem["img"]?></a> 
                        <a href="editar.php?id=<?php echo $mensagem['id'];?>"><input class="btn btn-primary" type="button" value="alterar"></a>  <input class="btn btn-danger" type="button" value="deletar"></td>
                     
                    </tr>

                <?php
                        }
                    }
                ?>
                </tbody>
            </table>
        </form>       
    
        
    </div>
    </div>
</body>
</html>