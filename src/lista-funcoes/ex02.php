<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ano Bissexto</title>
</head>
<body>
    <form method="post">
        <label for="ano">Ano:  </label>
        <input type="text" name="ano" required>
        <button type="submit">Verificar</button>
    </form>
    <?php

function ano_bissexto($ano){
    if(($ano%4==0 && $ano%100!=0) || ($ano%400==0)){
        echo("O ano é bissexto!");
    }else{
        echo("O ano não é bissexto");
    }
    
}if (isset($_POST['ano'])) {
    $ano = $_POST['ano'];
    ano_bissexto($ano);
}
?>
</body>
</html>

