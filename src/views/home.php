<?php


require_once __DIR__ . '/../config/conexao.php';


if(isset($_POST['email']) || isset( $_POST['password'])) {
    $email = $_POST['email'] ?? "";
    $senha = $_POST['senha'] ?? "";
    if(strlen($email) == 0) {
        echo'Preencha seu email!';
    }elseif(strlen($senha) == 0) {
        echo 'Preencha sua senha!';;
    }else{
        $email = $mysqli->real_escape_string($_POST['email']); // retira os caracterers especiais
        $senha = $mysqli->real_escape_string($_POST['senha']); // não é a forma mais segura de previnir SQLINJECTION

        $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $stmt->bind_param("ss", $email, $senha); // ss é os tipios das variaveis string string

        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $usuario = $result->fetch_assoc();
            
           if(!isset($_SESSION)){
            session_start();
           }

           $_SESSION['id'] = $usuario['id'];
           $_SESSION['nome'] = $usuario['nome'];
           
           header("Location: index.php?page=painel");

        }else{
            echo "Falha ao logar, email ou senha incorretos!";
        }

    };
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="post">
    <p>
        <label for="email">E-mail</label>
        <input type="text" name="email">
    </p>
    <p>
        <label for="senha">Senha</label>
        <input type="password" name="senha">
    </p>
    <p>
        <button type="submit">Entrar</button>
    </p>
    </form>
</body>
</html>