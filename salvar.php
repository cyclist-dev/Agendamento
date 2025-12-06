<?php
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$servico = $_POST["servico"];
$data = $_POST["data"];
$hora = $_POST["hora"];

$linha = "$nome | $telefone | $servico | $data | $hora".PHP_EOL;
file_put_contents("agendamento.txt", $linha, FILE_APPEND);


echo'<!DOCTYPE html>
<html lang= "pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h2>Agendamento</h2>

        <a class="botao-lista" href="index.php">Voltar ao formulário</a>
        <a class="botao-lista" href="listar.php">Mostrar Agendamento</a>

    </div>    
</body>
</html>';

?>