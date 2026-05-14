<?php

    include 'conexao.php';
    
   $x = R::dispense('pizzas');

   $x->nome = 'Atum';
    $x['ingredientes'] = 'Atum,Cebola,queijo,Azeitona'
     $x->preco = 40.90;
?>