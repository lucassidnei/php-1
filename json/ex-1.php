<?php

$pessoas = array();

array_push($pessoas, array(

  'nome'=>'Joao',
  'idade'=>25

));

array_push($pessoas, array(

  'nome'=>'Glaucio',
  'idade'=>20

));

echo json_encode($pessoas);

?>