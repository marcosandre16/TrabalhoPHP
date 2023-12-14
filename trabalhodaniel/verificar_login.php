<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['type'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $arquivo_usuarios = 'usuarios.txt';
    if (!file_exists($arquivo_usuarios)) {
        echo "Nenhum usuário cadastrado!";
    } else {
        $credenciais = "$type|$username|$password";
        $usuarios_cadastrados = file($arquivo_usuarios, FILE_IGNORE_NEW_LINES);
        $login_sucesso = false;

        foreach ($usuarios_cadastrados as $usuario) {
            if ($usuario === $credenciais) {
                $login_sucesso = true;
                break;
            }
        }

        if ($login_sucesso) {
            switch ($type) {
                case 'usuario':
                    header("Location: indexuser.php");
                    break;
                case 'gerente':
                    header("Location: indexger.php");
                    break;
                case 'dono':
                    header("Location: indexadm.php");
                    break;
                default:
                    header("Location: index.php");
                    break;
            }
            exit();
        } else {
            echo "Credenciais inválidas. Tente novamente.";
        }
    }
} else {
    echo "Por favor, preencha o formulário corretamente.";
}
?>