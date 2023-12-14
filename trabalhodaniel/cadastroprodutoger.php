<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Produtos - Toy Store</title>
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
        <h1><a href="indexger.php">Toy Store</a></h1>
        <nav>
            <input placeholder="Procurar..." class="input" name="text" type="text">
            <a href="shopger.php">Lojas</a>
            <a href="sobreger.php">Sobre</a>
        </nav>
    </header>
    <div class="container">
        <div class="card">
            <a class="login">Cadastro de Produtos</a>
            <div class="inputBox">
                <input type="text" required="true">
                <span class="produto">Produto</span>
            </div>
            <div class="inputBox">
            <input type="peso" required="true">
                <span class="text">Peso</span>
            </div>
            <div class="inputBox">
                <input type="precofab" required="true">
                    <span class="text">Preço Fabricação</span>
                </div>
                <div class="inputBox">
                  <input type="text" required="true">
                  <span class="descproduct">Descrição do Produto</span>
              </div>
            <div class="inputBox">
                <input type="text" required="true">
                    <span class="lucro">Lucro</span>
                </div>
            <div class="inputBox">
                <input type="number" required="true">
                <span class="codproduto">Código do Produto</span>
            </div>
          <label for="radio">Estado do Brinquedo:</label>
        <input type="radio" id="radio1" name="radio" value="opcao1">
        <label for="radio1">Usado</label>
        <input type="radio" id="radio2" name="radio" value="opcao2">
        <label for="radio2">Novo</label>
        <br>
        <label for="combo">Estoque:</label>
        <select id="combo" name="combo">
            <option value="opcao1">1 a 5.</option>
            <option value="opcao2">6 a 10.</option>
            <option value="opcao3">11 ou mais.</option>
        </select>
        <br><br>
        <label for="checkbox">Tipo de Briquendo:</label>
        <input type="checkbox" id="checkbox1" name="checkbox1" value="opcao1">
        <label for="checkbox1">Carrinho</label>
        <input type="checkbox" id="checkbox2" name="checkbox2" value="opcao2">
        <label for="checkbox2">Boneco</label>
        <input type="checkbox" id="checkbox3" name="checkbox3" value="opcao3">
        <label for="checkbox3">Lego</label>

        <br><br>
        <a href=cadastroconfirmadoger.php><button class="enter">Confirmar</button></a>
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