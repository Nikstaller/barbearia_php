<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados REQUEST</title>
</head>
<body>

    <h1>Formulário de Contato</h1>

    <form method="get">  

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="mensagem">Mensagem:</label>
        <br>

        <textarea id="mensagem" name="mensagem" rows="4" cols="50" required></textarea>
        <br><br>

        <input type="submit" value="Enviar" name="botaozinho">

    </form>

    <hr>

    <?php

    if(isset($_REQUEST['botaozinho'])){

        echo "<h2>Dados recebidos:</h2>";

        echo "<strong>Nome:</strong> "
        . $_REQUEST['nome'] . "<br>";

        echo "<strong>E-mail:</strong> "
        . $_REQUEST['email'] . "<br>";

        echo "<strong>Mensagem:</strong> "
        . $_REQUEST['mensagem'] . "<br>";

    }

    ?>

</body>
</html>