<!DOCTYPE html>
<html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Atividade d+</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        </head>
        <body>
            <form action="cadastro.php" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label class="form-label">Imagem</label>
                    <input type="file" name="imagem"  class="form-control">
                </div> 

                <div class="mb-3">
                  <input type="submit" class="btn btn-primary " value="Upload">
                </div>
            </form>

            <?php
                    @$imagem = $_FILES["imagem"];
                    @$tmp = $imagem["tmp_name"];
                    @$dir = "img/" . $imagem ["name"];

                    if(@$imagem["error"] == 0){
                        if(move_uploaded_file($tmp, $dir))
                        echo "Arquivo cadastrado com sucesso!";
                    }else{
                        echo "erro de upload";
                    }
                ?>
                
        </body>
        
</html>