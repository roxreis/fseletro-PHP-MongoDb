<?php

require '../bancoDados/conexao.php';

if (isset($_POST['nomeCliente'])) {
    $insertOneResult = $collectionOrder->insertOne([

        'nome'          => $_POST['nomeCliente'],
        'endereco'      => $_POST['endCliente'],
        'ddd'           => $_POST['dddCliente'],
        'tel'           => $_POST['telCliente'],
        'produto'       => $_POST['produtoCliente'],
        'valorUnitario' => $_POST['unitarioCliente'],
        'quantidade'    => $_POST['quantCliente'],
        'valorTotal'    => $_POST['unitarioCliente'] * $_POST['quantCliente'],

    ]);

    if ($insertOneResult) {
        echo "<script> alert('Pedido cadastrado com sucesso! Você voltará para página anterior')</script>";
        echo '<div class="d-flex justify-content-center text-center mb-5 text-danger">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>';
        header("refresh: 1;'../form-pedidos.php");

    } 
}   
