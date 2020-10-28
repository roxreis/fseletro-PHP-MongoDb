<?php 

include_once('bancoDados/conexao.php');


if (isset($_POST['enviarPedidos']) && $_POST['enviarPedidos'] != null) {

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
        echo "<script> alert('Pedido cadastrado com sucesso!')</script>";

    } else {

        printf("Errormessage: %s\n", mysqli_error($con) ); 
    
    }
}


$select = 'SELECT * FROM produtos';
$result1 = $con->query($select);

$select = 'SELECT * FROM pedidos';
$result2 = $con->query($select);


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro Pedidos</title>
</head>
<body>
    
    <?php include_once('template/header.php'); ?>

    <section class="containerRoot d-flex justify-content-around">
        <div class="form-group container-form-pedidos">
            <form class="form-pedidos" action="#" method="POST">
            <h2>Cadastre os Pedidos</h2>
                <div class="form-group">
                    <label>Nome do Cliente</label>
                    <input class="form-control" name="nomeCliente"placeholder= "" type="text" >
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input  class="form-control" name="endCliente" type="text" >
                </div>
                <div class="form-group">
                    <label>ddd</label>
                    <input class="form-control" name="dddCliente" type="number" min="1" >
                </div>
                <div class="form-group">
                    <label>telefone</label>
                    <input class="form-control" name="telCliente" type="number" >
                </div>   
                <div class="form-group">
                    <label>Nome do Produto</label>
                    <select name="produtoCliente" id="inputState" class="form-control">
                        <option  selected>Escolha uma opção</option>
                    <?php if($result1->num_rows > 0): ?> 
                        <?php while($produto = $result1->fetch_assoc()): ?>
                            <option value="<?=$produto['descricao'];?>" ><?=$produto['descricao'];?></option>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </select>
                </div> 

                <div class="form-group">
                    <label class=>Valor Unitário</label>
                    <input class="form-control"name="unitarioCliente" type="number" >
                </div> 
                <div class="form-group">
                    <label>Quantidade</label>
                    <input class="form-control" name="quantCliente" type="number" >
                </div> 
                <div class="form-group">
                    <label>Valor Total</label>
                    <input class="form-control" name="totalCliente" type="number" disabled placeholder="preenchido automaticamente" >
                </div>
                <div class="form-group">
                    <button class="btn btn-success" name="enviarPedidos" >Enviar</button>
                </div>
            </form>
        </div>
       <table class="table table-striped table-pedidos dflex flex-column">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome Cliente</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">DDD</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Valor Unitario</th>
                    <th scope="col">Quant</th>
                    <th scope="col">Valor Total</th>
                </tr>
            </thead>
            <tbody>
            <?php if($result2->num_rows > 0): ?> 
                <?php while ($pedido = $result2->fetch_assoc()): ?>
                    <tr> 
                        <th scope="row"><?= $pedido['id']; ?></th>
                        <td><?= $pedido['nome_cliente']; ?></td>
                        <td><?= $pedido['endereco']; ?></td>
                        <td><?= $pedido['ddd']; ?></td>
                        <td><?= $pedido['telefone']; ?></td>
                        <td><?= $pedido['nome_produto']; ?></td>
                        <td><?= $pedido['valor_unitario']; ?></td>
                        <td><?= $pedido['quantidade']; ?></td>
                        <td><?= $pedido['valor_total']; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <h2>Não há pedidos cadastrados</h2>
            <?php endif; ?>   
            </tbody>
        </table>

    </section>


</body>
</html>