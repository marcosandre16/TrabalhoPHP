<!DOCTYPE html>
<html>

<head>
    <title>Principal - Toy Store</title>
    <link rel="shortcut icon" type="image/png" href="src/images/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
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
            <a href="cadastroadm.php">Cadastros</a>
        </nav>
    </header>
    <h1 id="title">Bem-vindo à Toy Store</h1>
    <h2 id="subtitle">Bem-vindo à Toy Store - O Paraíso dos Brinquedos!

        Nossa loja de brinquedos é o local perfeito para transformar a infância em uma aventura mágica e divertida. Na Toy Store, acreditamos que o brincar é fundamental para o desenvolvimento das crianças e para criar memórias felizes que durarão toda a vida.</h2>
    <section>
        <h1>Apresentamos...</h1>
        <p>Nossa história é uma jornada emocionante através da infância, cheia de diversão, alegria e muitos sorrisos. Fundada em 2023, Toy Store nasceu do amor pela imaginação, criatividade e pelo espírito lúdico que todos nós carregamos dentro de nossos corações.

            Nossa missão é simples, mas profunda: proporcionar às crianças de todas as idades acesso aos melhores brinquedos que enriqueçam suas vidas, incentivem a aprendizagem e a interação, e, claro, proporcionem horas intermináveis de diversão.</p>

    </section>
    <button onclick="redirecionarPagina('shopadm.php')" class="cta">
        <span class="hover-underline-animation"> Comprar agora </span>
        <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
            <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                data-name="Path 10" id="Path_10"></path>
        </svg>
    </button>
    <footer>
        <p>Todos os direitos reservados à <a target="_blank"
                href="https://www.instagram.com/batistavinii/">@batistavinii</a> , <a target="_blank" href="https://www.instagram.com/danielsimas2/">@danielsimas2</a> e
   <a target="_blank" href="https://www.instagram.com/omarquitos22/">@omarquitos22</a> </p></footer>
    <script src="src/js/index.js"></script>
</body>

</html>