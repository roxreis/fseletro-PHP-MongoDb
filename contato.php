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
        <div class="alert alert-danger" role="alert">
            Formulário em construção!
        </div>
        <h1>Contato</h1>
        <section class="section-contato">
            <div class= "zap-contato">
                <img src="./img/zap.jpg" alt="whatsapp" width="50px">
                <p>11 8888888888</p>
            </div>
            <form action="">
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" type="text" placeholder="Nome Sobrenome">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nome@nome">
                </div>
                <div class="form-group">
                <label>Mensagem</label>
                <textarea class="form-control" placeholder="escreva sua mensagem" ></textarea>
                </div>
                <button type="submit" > Enviar</button>
            </form>
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