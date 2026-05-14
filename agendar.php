<?php
date_default_timezone_set('America/Sao_Paulo');

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$numero = isset($_POST['numero']) ? $_POST['numero'] : '';
$observacao = isset($_POST['observacao']) ? $_POST['observacao'] : '';
$servico = isset($_POST['servico']) ? $_POST['servico'] : '';
$data = isset($_POST['data-agendamento']) ? $_POST['data-agendamento'] : '';
$tempo = isset($_POST['horario']) ? $_POST['horario'] : '';

$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (
        empty($nome) ||
        empty($numero) ||
        empty($servico) ||
        empty($data) ||
        empty($tempo)
    ) {

        $mensagem = "Preencha todos os campos obrigatórios.";

    } else {

        $mensagem = "Agendamento realizado com sucesso para: " .
                    htmlspecialchars($nome);

    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu do Cliente</title>
</head>

<body>

    <h1>Menu do Cliente</h1>

    <?php if (!empty($mensagem)) : ?>
        <p><?php echo $mensagem; ?></p>
    <?php endif; ?>

    <form action="" method="POST">

        <label for="nome">Qual o seu nome?</label><br>
        <input type="text"
               id="nome"
               name="nome"
               value="<?php echo htmlspecialchars($nome, ENT_QUOTES, 'UTF-8'); ?>">
        <br><br>

        <label for="numero">Qual seu número telefônico?</label><br>
        <input type="text"
               id="numero"
               name="numero"
               value="<?php echo htmlspecialchars($numero, ENT_QUOTES, 'UTF-8'); ?>">
        <br><br>

        <label for="servico">Serviço:</label><br>
        <select name="servico" id="servico">
            <option value="">Selecione...</option>

            <option value="corte"
                <?php echo ($servico == 'corte') ? 'selected' : ''; ?>>
                Corte Masculino
            </option>

            <option value="barba"
                <?php echo ($servico == 'barba') ? 'selected' : ''; ?>>
                Barba
            </option>

            <option value="combo"
                <?php echo ($servico == 'combo') ? 'selected' : ''; ?>>
                Corte + Barba
            </option>
        </select>
        <br><br>

        <label for="data-agendamento">Data de Agendamento:</label><br>
        <input type="date"
               id="data-agendamento"
               name="data-agendamento"
               value="<?php echo htmlspecialchars($data); ?>">
        <br><br>

        <label for="horario">Selecionar Horário:</label><br>
        <input type="time"
               id="horario"
               name="horario"
               value="<?php echo htmlspecialchars($tempo); ?>">
        <br><br>

        <label for="observacao">Observações:</label><br>
        <textarea id="observacao"
                  name="observacao"><?php echo htmlspecialchars($observacao, ENT_QUOTES, 'UTF-8'); ?></textarea>
        <br><br>

        <input type="submit" value="Enviar">

    </form>

   

</body>
</html>


 <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($mensagem) == false) : ?>

    <h2>Dados do Agendamento</h2>

    <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>

    <p><strong>Telefone:</strong> <?php echo htmlspecialchars($numero); ?></p>

    <p><strong>Serviço:</strong> <?php echo htmlspecialchars($servico); ?></p>

    <p><strong>Data:</strong> <?php echo htmlspecialchars($data); ?></p>

    <p><strong>Horário:</strong> <?php echo htmlspecialchars($tempo); ?></p>

    <p><strong>Observação:</strong> <?php echo htmlspecialchars($observacao); ?></p>

<?php endif; ?>

