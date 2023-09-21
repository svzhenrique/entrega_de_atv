<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="adm/css/estilo.css">
    <title>Document</title>
</head>
<body>
    <?php
    //pegar os arquivos na pasta 

    $pasta = "adm/img/";

    $arq = glob("$pasta{*.jpg,*.png,*.gif,*.jpeg,*.webp}", GLOB_BRACE);

    //print_r($arq);
    // for; while, do while, foreach
    foreach($arq as $pos){
        echo "<img src='" . $pos .  "'/>";
    }
    ?>
</body>
</html>