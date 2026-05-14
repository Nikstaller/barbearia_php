<?php
<<<<<<< HEAD

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


=======
//include 'conexao.php';

// $x = R::dispense('pizza');

// $x->nome = 'Atum';
// $x['ingredientes'] = 'atum, cebola, queijo, azeitona';
// $x->preco =49.90;

//R::store($x);


//$x_edit = R:: finOne('pizzas','nome = "atum"');








// $x_edit = R::load('pizzas', 1);
// $x_edit['preco'] = 55.50;
// $x_edit['ingredientes'] = 'atum, cebola, queijo, azeitona, fandangos';
// $x_edit['tamanho'] = "Giante";
// R::store($x_edit);
>>>>>>> eea6ede235988345d33eed52dc7ae01ad2e53e43
?>