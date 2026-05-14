<?php

    include 'conexao.php';

//    $x = R::dispense('pizzas');

//    $x->nome = 'Atum';
//     $x['ingredientes'] = 'Atum,Cebola,queijo,Azeitona';
//      $x->preco = 40.90;



   R::store($x);
   $x_edit = R::load('pizzasz',1);
   $x_edit['preco']= 55.50;
   $x_edit['ingredientes'] =  'Atum, Cebola, queijo, Azeitona, presunto, fandangos';
   R::store($x_edit);


?>