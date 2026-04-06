
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Palavras</title>
</head>
<body>
    <form method="post">
        <label for="texto">Texto:  </label>
        <input type="text" name="texto" required>
        <button type="submit">Contar</button>
    </form>

    
    <?php
function contadorPalavras($texto){
    $palavras = explode(" ", $texto); // separa por espaço
    $quantidade = count($palavras);   // conta quantas palavras
    echo($quantidade);
}
if (isset($_POST['texto'])) {
    $texto = $_POST['texto'];
    contadorPalavras($texto);
}