<?php 


include_once('conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$consulta = mysqli_query($conexao, "SELECT * FROM usuario WHERE usuario='$usuario' AND senha='$senha'");


if (mysqli_num_rows($consulta) == 1) {
    
    header("Location: principal.html");
    exit();
} else {
    $mensagem = "<p class='sucesso'>TENTE NOVAMENTE, LOGIN NEGADO!.<a href='index.html'>TENTAR NOVAMENTE</a></p>";
    
    
}


mysqli_close($conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .mensagem {
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            font-size: 18px;
        }

        .sucesso {
            background-color: #4caf50;
            color: #fff;
        }
        .sucesso a {
            background-color: #4caf50;
            color: #fff;
        }
        .erro {
            background-color: #f44336;
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="mensagem">
        <?php echo $mensagem; ?>
    </div>

</body>
</html>


