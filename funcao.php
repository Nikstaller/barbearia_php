<?php


// Funções úteis para a Barbearia

function formatarPreco(float $preco): string {
    return "R$ " . number_format($preco, 2, ',', '.');
}

function calcularDesconto(float $preco, float $percentual = 10): float {
    return $preco * (1 - ($percentual / 100));
}

function saudacao(string $nome = "Cliente"): string {
    $hora = (int)date('H');
    if ($hora < 12) return "Bom dia, " . $nome . "!";
    if ($hora < 18) return "Boa tarde, " . $nome . "!";
    return "Boa noite, " . $nome . "!";
}

function diasDaSemana($dia = null) {
    $dias = [
        1 => "Segunda-feira", 2 => "Terça-feira", 3 => "Quarta-feira",
        4 => "Quinta-feira", 5 => "Sexta-feira", 6 => "Sábado", 7 => "Domingo"
    ];
    return $dia ? $dias[$dia] ?? "Dia inválido" : $dias;
}

function HorasDisponivel(){
 $disponivel =[
    1 => "15:00 horas", 2 => "20:00 horas",



 ]
   

}


// Testando as funções
date_default_timezone_set("America/Sao_Paulo");

echo saudacao("João Silva") . "<br>";
echo "Preço normal: " . formatarPreco(75.00) . "<br>";
echo "Preço com desconto: " . formatarPreco(calcularDesconto(75.00, 15)) . "<br>";
echo  date('d/m/Y') . "<br>" ;
echo "Hoje é " . diasDaSemana((int)date('N')) . "<br>";
?>