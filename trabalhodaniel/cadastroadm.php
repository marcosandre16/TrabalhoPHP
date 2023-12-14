<!DOCTYPE html>
<html>

<head>
    <title>Cadastro - Toy Store</title>
    <link rel="shortcut icon" type="image/png" href="src/images/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Belanosima&family=Montserrat:wght@300&family=Teko:wght@700&display=swap"
        rel="stylesheet">
</head>

<body>
    <img src="src/images/background.jpg">
    <header>
        <h1><a href="indexadm.php">Toy Store</a></h1>
        <nav>
            <input placeholder="Procurar..." class="input" name="text" type="text">
            <a href="shopadm.php">Lojas</a>
            <a href="sobreadm.php">Sobre</a>
            <a href="cadastroprodutoadm.php">Cadastrar Produto</a>
        </nav>
    </header>
    <div class="container">
        <div class="card">
            <a class="login">Cadastro</a>
            <div class="inputBox">
                <input type="text" required="true">
                <span class="user">Usuário</span>
            </div>
            <div class="inputBox">
            <input type="email" required="true">
                <span class="email">Email</span>
            </div>
            <div class="inputBox">
                <input type="telefone" required="true">
                    <span class="text">Telefone</span>
                </div>
            <div class="inputBox">
                <input type="text" required="true">
                    <span class="cpf">CPF</span>
                </div>
            <div class="inputBox">
                <input type="password" required="true">
                <span>Senha</span>
                <br><br>
                <align><center><label for="radio"><align><center>Tipo de Cadastro:</center></align></label>
                <br><br><br>
                <label for="radio1">Usuário</label>
                <br> <br>
                <input type="radio" id="radio1" name="radio" value="opcao1">
                <br> <br>
                <label for="radio2">Gerente</label>
                <br><br>
                <input type="radio" id="radio2" name="radio" value="opcao2"></center></align>
                <br><br>
                
                <br>
            </div>
<br>
<a href=cadastroconfirmadoadm.php><button class="enter"> Confirmar </button></a>
<br>
        </div>
    </div>
    <footer>
        <p>Todos os direitos reservados à <a target="_blank"
                href="https://www.instagram.com/batistavinii/">@batistavinii</a> , <a target="_blank" href="https://www.instagram.com/danielsimas2/">@danielsimas2</a> e
   <a target="_blank" href="https://www.instagram.com/omarquitos22/">@omarquitos22</a> </p></footer>
    <script src="src/js/index.js"></script>
</body>

</html>