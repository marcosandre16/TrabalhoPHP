<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<html>

<head>
    <title>Login - Toy Store</title>
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
        <h1>Toy Store</a></h1>
        <nav>
        </nav>
    </header>
    <div class="container">
        <div class="card">
        <form action="verificar_login.php" method="post">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="type">Tipo de Login:</label>
        <select id="type" name="type">
            <option value="usuario">Usuário</option>
            <option value="gerente">Gerente</option>
            <option value="dono">Dono</option>
        </select><br><br>
        
        <input type="submit" value="Login">
    </form>
        </div>
    </div>
    <footer>
        <p>Todos os direitos reservados à <a target="_blank"
                href="https://www.instagram.com/batistavinii/">@batistavinii</a> , <a target="_blank" href="https://www.instagram.com/danielsimas2/">@danielsimas2</a> e
   <a target="_blank" href="https://www.instagram.com/omarquitos22/">@omarquitos22</a> </p></footer>
    <script src="src/js/index.js"></script>
</body>
</html>