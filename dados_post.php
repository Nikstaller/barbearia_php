<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados POST</title>
</head>
<body>

    <h1>Formulário de Contato</h1>

    <form method="post">  

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

    if(isset($_POST['botaozinho'])){

        echo "Nome: " . $_POST['nome'] . "<br>";
        echo "Email: " . $_POST['email'] . "<br>";
        echo "Mensagem: " . $_POST['mensagem'] . "<br>";

    }

    ?>

</body>
</html>