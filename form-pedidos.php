
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
    
    <?php 
    
    include_once('template/header.php'); 
    include_once('listar-dados-banco.php');
    
    ?>

    <section class="containerRoot d-flex justify-content-around">
        <div class="form-group container-form-pedidos">
            <form class="form-pedidos" action="cadastro-pedido.php" method="POST">
            <h2>Cadastre os Pedidos</h2>
                <div class="form-group">
                    <label>Nome do Cliente</label>
                    <input class="form-control" name="nomeCliente"type="text" >
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input  class="form-control" name="endCliente" type="text" placeholder= "Rua/av e numero" >
                </div>
                <div class="form-group">
                    <label>ddd</label>
                    <input class="form-control" name="dddCliente" type="number" min="0" placeholder="2 números">
                </div>
                <div class="form-group">
                    <label>telefone</label>
                    <input class="form-control" name="telCliente" type="number" min="0" placeholder="9 números">
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
                    <input class="form-control" name="unitarioCliente" type="number" step="0.01" min="0" placeholder="ex 2000,00"  >
                </div> 
                <div class="form-group">
                    <label>Quantidade</label>
                    <input class="form-control" name="quantCliente" type="number" min="0">
                </div> 
                <div class="form-group">
                    <label>Valor Total</label>
                    <input class="form-control" name="totalCliente" type="number" step="0.01" disabled placeholder="calculado automático" >
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Enviar</button>
                </div>
            </form>
        </div>
       <table class="table table-striped table-pedidos dflex flex-column">
            <thead>
                <tr>
                    <th scope="col">Numero Pedido</th>
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
                    <?php 
                        //ao imprimir na tela, troca o ponto dos valores por virgula
                        $unitSemVirgula = $pedido['valor_unitario']; 
                        $unitComVirgula = str_replace(".", ",",$unitSemVirgula);
                        $totSemVirgula = $pedido['valor_total'];
                        $totComVirgula = str_replace(".", ",",$totSemVirgula);
                    ?>
                    <tr> 
                        <th scope="row"><?= $pedido['id']; ?></th>
                        <td><?= $pedido['nome_cliente']; ?></td>
                        <td><?= $pedido['endereco']; ?></td>
                        <td><?= $pedido['ddd']; ?></td>
                        <td><?= $pedido['telefone']; ?></td>
                        <td><?= $pedido['nome_produto']; ?></td>
                        <td>R$ <?= $unitComVirgula; ?> </td>
                        <td><?= $pedido['quantidade']; ?></td>
                        <td>R$ <?= $totComVirgula; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <script> alert('Não há pedidos cadastrados!')</script>
            <?php endif; ?>   
            </tbody>
        </table>

    </section>


</body>
</html>