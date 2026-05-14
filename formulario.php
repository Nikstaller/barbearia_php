<?php
include 'conexao.php';

$nome = $_POST['nome'] ?? '';
$Ingrid = $_POST['Ingrid'] ?? '';
$preco = $_POST['preco'] ?? '';

$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (
        empty($nome) ||
        empty($Ingrid) ||
        empty($preco)
    ) {
        $mensagem = "Preencha todos os campos obrigatórios.";
    } else {

        $x = R::dispense('pizza');

        $x->nome = $nome;
        $x->ingredientes = $Ingrid;
        $x->preco = $preco;

        R::store($x);

        $mensagem = "A pizza de " . htmlspecialchars($nome) . " foi adicionada!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Pizza</title>
</head>
<body>

<h1>Adicionador de Sabores de Pizza</h1>

<form action="" method="POST">

    <label>Nome:</label>
    <input type="text"
           name="nome"
           id="nome"
           value="<?php echo htmlspecialchars($nome, ENT_QUOTES, 'UTF-8'); ?>">
    <br><br>

    <label>Ingredientes:</label>
    <input type="text"
           name="Ingrid"
           id="Ingrid"
           value="<?php echo htmlspecialchars($Ingrid, ENT_QUOTES, 'UTF-8'); ?>">
    <br><br>

    <label>Preço:</label>
    <input type="text"
           name="preco"
           id="preco"
           value="<?php echo htmlspecialchars($preco, ENT_QUOTES, 'UTF-8'); ?>">
    <br><br>

    <input type="submit" value="Enviar">

</form>
    
<p><?php echo $mensagem; ?></p>

</body>
</html>