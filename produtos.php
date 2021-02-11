<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Produtos</title>
</head>
<body>
    
    <?php 
    
        include_once('template/header.php');
        
        include_once('bancoDados/conexao.php');

     
    ?>
    

    <main class="container">
        <h1>Produtos</h1>
            <section class="section-produtos">  
            <aside>
                <h3>CATEGORIAS</h3>
                <hr class="w-75">
                <ul>
                    <li onclick="exibirTodos()">Todos (12)</li>
                    <li onclick="exibirCategoria('Relogios')">Relogios (3)</li>
                    <li onclick="exibirCategoria('Tvs')">Tvs (3)</li>
                    <li onclick="exibirCategoria('Smartphones')">Celulares (3)</li>
                    <li onclick="exibirCategoria('Notebooks')">Notebooks (3)</li>
                </ul>
            </aside>
            <section class=produtos-img>
                <?php 
                $produtos = $collectionProduct->find([]);
                if($produtos != []): ?> 
                    <?php foreach($produtos as $produto): ?>
                        <div class="boxProdutos" id="<?= $produto->categoria;?>"> 
                            <img src="<?=$produto->imagem ; ?>" alt="relogio" onmouseout="semMouse(this)" onmouseover="comMouse(this)" >
                            <p><strong><?=$produto->descricao ;?></strong></p>
                            <hr>
                            <p>Preço inicial: <strike>R$ <?=$produto->preco;?></strike></p>
                            <p>Preço com desconto: <strong>R$ <?=$produto->preco_c_desconto;?></strong></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h2>Não há produtos cadastrados</h2>
                <?php endif; ?>

         

<!-- 
onclick="destaque(this)"  class="imgProdutos" onmouseover="mouseOver()" onmouseout="mouseOut()"


                <div class="boxProdutos" id="relogio">
                    <img src="./img/relogio2.JPG" alt="relogio" onclick="destaque(this)">
                    <p>Relogio Smart Band Preto</p>
                    <hr>
                    <p><strike>R$ 3500,00</strike></p>
                    <p><strong>R$ 3000,00</strong></p>
                </div>
                <div class="boxProdutos" id="relogio">
                    <img src="./img/relogio3.JPG" alt="relogio"onclick="destaque(this)">
                    <p>Relogio Smart Band Branco</p>
                    <hr>
                    <p><strike>R$ 35000,00</strike></p>
                    <p><strong>R$ 3000,00</strong></p>
                </div>
                <div class="boxProdutos" id="tv">
                    <img src="./img/tv1.JPG"  alt="tv"onclick="destaque(this)">
                    <p>TV TCL</p>
                    <hr>
                    <p><strike>R$ 6000,00</strike></p>
                    <p><strong>R$ 5000,00</strong></p>
                </div>
                <div  class="boxProdutos" id="tv">
                    <img src="./img/tv2.JPG"  alt="tv"onclick="destaque(this)">
                    <p>TV Samsung</p>
                    <hr>
                    <p><strike>R$ 12000,00</strike></p>
                    <p><strong>R$ 10000,00</strong></p>
                </div>
                <div class="boxProdutos" id="tv">
                    <img src="./img/tv3.JPG" alt="tv"onclick="destaque(this)">
                    <p>TV LG</p>
                    <hr>
                    <p><strike>R$ 5000,00</strike></p>
                    <p><strong>R$ 3500,00</strong></p>
                </div>
                <div class="boxProdutos" id="celular">
                    <img src="./img/celular1.JPG" alt="celular"onclick="destaque(this)">
                    <p>Smartphone Samsung Rosa</p>
                    <hr>
                    <p><strike>R$ 4000,00</strike></p>
                    <p><strong>R$ 3900,00</strong></p>
                </div>
                <div class="boxProdutos" id="celular">
                    <img src="./img/celular2.JPG" alt="celular"onclick="destaque(this)">
                    <p>Smartphone Samsung Azul</p>
                    <hr>
                    <p><strike>R$ 4000,00</strike></p>
                    <p><strong>R$ 3900,00</strong></p>
                </div>
                <div class="boxProdutos" id="celular">
                    <img src="./img/celular3.JPG" alt="celular"onclick="destaque(this)">
                    <p>Smartphone Samsung Grafite</p>
                    <hr>
                    <p><strike>R$ 4000,00</strike></p>
                    <p><strong>R$ 3900,00</strong></p>
                </div>
                <div class="boxProdutos" id="note">
                    <img src="./img/note1.JPG" alt="notebook"  onclick="destaque(this)">
                    <p>Notebook Asus</p>
                    <hr>
                    <p><strike>R$ 8000,00</strike></p>
                    <p><strong>R$ 7000,00</strong></p>
                </div>
                <div class="boxProdutos" id="note">
                    <img src="./img/note2.JPG" alt="notebook"  onclick="destaque(this)">
                    <p>Notebook Asus</p>
                    <hr>
                    <p><strike>R$ 7000,00</strike></p>
                    <p><strong>R$ 6500,00</strong></p>
                </div>
                <div class="boxProdutos" id="note">
                    <img src="./img/note3.JPG" alt="notebook" onclick="destaque(this)">
                    <p>Notebook Samsung</p>
                    <hr>
                    <p><strike>R$ 5000,00</strike></p>
                    <p><strong>R$ 4000,00</strong></p>
                </div> -->
            </section>
        </section>
        <footer>
            <div class="formas-pgto">
                <h4 >Formas de pagamento </h4>
                <img src="img/formas-pgto.png" alt="formas de pagamento"></h4>
            </div>
        </footer>
    </main>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
    
