<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Produtos</title>
</head>
<body>

    <?php include_once('template/header.php'); ?>

    <main class="containerRoot">
        <h1>Nossas Lojas</h1>
        <section class="section-lojas">
            <div class="d-flex">
                <img src="img/loja-rio.jpg" alt="loja no Rio de Janeiro"> 
                <div >    
                    <h3>Rio de Janeiro</h3>                
                    <p>Av Presidente</p>
                    <p>10 &ordm; andar</p>
                    <p>Centro</p> 
                    <p>(21) 2222222</p> 
                </div>
            </div>
            <div class="d-flex">
                <img src="img/loja-sp1.jpg" alt="loja 1 em São Paulo"> 
                <div>          
                    <h3>São Paulo</h3>                
                    <p>Av Paulista</p>
                    <p>2 &ordm; andar</p>
                    <p>Centro</p> 
                    <p>(11) 2222222</p> 
                </div>
            </div>
            <div class="d-flex">
                <img src="img/loja-sp2.jpeg" alt="loja 2 em São Paulo">  
                <div >
                    <h3>São Paulo</h3>                
                    <p>Av Paulista</p>
                    <p>10 &ordm; andar</p>
                    <p>Centro</p> 
                    <p>(11) 2222222</p> 
                </div>
            </div>
        </section>
        <footer>
            <div class="formas-pgto">
                <h4 >Formas de pagamento </h4>
                <img src="img/formas-pgto.png" alt="formas de pagamento"></h4>
            </div>
        </footer>
    </main>
</body>
</html>