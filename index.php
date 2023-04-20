<?php
    if(isset($_GET['erro'])){
        if($_GET['erro'] == 1){
            $erro = "Acesso Negado!";
        }
    }else {
        $erro = "";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de tarefas</title>
</head>
<body>
    <h2>Sistema Tarefas Diárias</h2>
    <h3>Login</h3>
    <form action="">
        <input type="text" name="login"><br>
        <input type="password" name="senha"><br>
        <span><?php echo $erro; ?></span><br>
        <button>Enviar</button>
    </form>

    <a href="cadastro.php">Cadastre-se</a>
    
</body>
</html>