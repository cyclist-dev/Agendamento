<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Agendamento de horário</h2><br>
        <form action="salvar.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" placeholder= "Seu nome aqui" required><br>

            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" placeholder="(99)99999-9999" required><br>

            <label for="servico">Serviço:</label>
            <select name="servico" required>

                <option value="">Selecione</option>
                <option>Corte</option>
                <option>Escova</option>
                <option>Manicure</option>
                <option>Pedicure</option>
                <option>Maquiagem</option>

            </select><br><br>

            <label for="data">Data</label>
            <input type="date" name="data" required>

            <label for="hora">Hora</label>
            <input type="time" name="hora" required><br><br>
            <button type="submit">Agendar</button>
        </form>
        <a class="botao-lista" href="listar.php">Ver agendamento</a>
    </div>
</body>

</html>