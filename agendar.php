<?php
$nome = isset($_GET['nome']) ? $_GET['nome'] : '';
$numero = isset($_GET['numero']) ? $_GET['numero'] : '';
$observacao = isset($_GET['observacao']) ? $_GET['observacao'] : '';
$servico = isset($_GET['servico']) ? $_GET['servico'] : '';

$mensagem = "";
if (!empty($nome) && !empty($servico)) {
    $mensagem = "Busca realizada para: " . htmlspecialchars($nome) . 
                " | Serviço: " . htmlspecialchars($servico);
}
date_default_timezone_set('America/Sao_Paulo');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu do Cliente</title>
</head>
<body>
    <h1>Menu do cliente</h1>
    <form action="" method="GET">
        <label>Qual o seu nome?</label><br>
        <input type="text" name="nome" 
               value="<?php echo htmlspecialchars($nome, ENT_QUOTES, 'UTF-8'); ?>"><br><br>

        <label>Qual seu número telefônico?</label><br>
        <input type="text" name="numero" 
               value="<?php echo htmlspecialchars($numero, ENT_QUOTES, 'UTF-8'); ?>"><br><br>

        <label>Serviço:</label><br>
        <select name="servico">
            <option value="">Selecione...</option>
            <option value="corte" <?= $servico == 'corte' ? 'selected' : '' ?>>Corte Masculino</option>
            <option value="barba" <?= $servico == 'barba' ? 'selected' : '' ?>>Barba</option>
            <option value="combo" <?= $servico == 'combo' ? 'selected' : '' ?>>Corte + Barba</option>
        </select><br><br>

        <label>Data</label><br>
          <form>
     <label for="data-agendamento">Data de Agendamento:</label>
      <input type="date" id="data-agendamento" name="data-agendamento">


         </form>
        <label>Observações</label><br>
        <textarea name="observacao"><?php echo htmlspecialchars($observacao, ENT_QUOTES, 'UTF-8'); ?></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
    






    
<?php


?>
</body>
</html>