<?php 

include_once('bancoDados/conexao.php');

if (isset($_POST['nomeCliente'])) {

    $nome = $_POST['nomeCliente'];
    $endereco = $_POST['endCliente'];
    $ddd = $_POST['dddCliente'];
    $tel = $_POST['telCliente'];
    $produto = $_POST['produtoCliente'];
    $valorUnitario = $_POST['unitarioCliente'];
    $quantidade = $_POST['quantCliente'];
    $valorTotal = $valorUnitario * $quantidade;


    $inserir = "INSERT INTO pedidos (nome_cliente, endereco, ddd, telefone, nome_produto, valor_unitario, quantidade, valor_total) VALUES ('$nome', '$endereco', '$ddd', '$tel', '$produto', '$valorUnitario','$quantidade','$valorTotal' )";


    if (mysqli_query($con, $inserir)) {
        echo "<script> alert('Pedido cadastrado com sucesso! Você voltará para página anterior')</script>";
        echo '<div class="d-flex justify-content-center text-center mb-5 text-danger">
                 <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
             </div>';
        header("refresh: 1;'form-pedidos.php");

    } else {

        printf("<h2>Errormessage: %s\n", mysqli_error($con)."</h2>"); 
        die;
    
    }
}






