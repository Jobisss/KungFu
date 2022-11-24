<?php
    include("conexao.php");




    $sql_mensagens = "SELECT * FROM  aluno ";
    $consulta_mensagens = $mysqli->query($sql_mensagens) or die($mysqli->error);
    $quantidade_mensagens = $consulta_mensagens->num_rows;






    $mensagem = $consulta_mensagens -> fetch_assoc();

    //var_dump($quantidade_mensagens);


  
?>
<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Pg Principal</title>
    </head>

    <body>
        <?php 
          include("menu.php");
        ?>
            
        </div>

        <br>
        <br>
        <br>
        <br>
        
        <div class="container text-center">
            <div class="row">
              
              
              <?php

           
            if($quantidade_mensagens == 0){

              
            ?>

            <tr>
                            <td colspan="6">Nenhuma  mensagem encontrada</td>
                        </tr>
                    <?php
                        } else {
                            while ($mensagem = $consulta_mensagens -> fetch_assoc()){
                              
                    ?>
                <div class="col">
                
                  <div class="card" style="width: 18rem;">
                      <img src="<?php echo $mensagem['img'];  ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $mensagem['nome'];  ?> <br> <br><?php echo $mensagem['idade']; ?></h5>
                        <p class="card-text"></p>
                </div>                   
                  </div>
                      </div>
            <?php
            }
            }


            ?>

</div>
                    </div>
                    </div>
              


    </body>
</body>

</html>