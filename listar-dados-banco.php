<?php 

include_once('bancoDados/conexao.php');

$select = 'SELECT * FROM produtos';
$result1 = $con->query($select);

$select = 'SELECT * FROM pedidos';
$result2 = $con->query($select);

?>
