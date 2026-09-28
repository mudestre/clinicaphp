<?php
include_once('conexao.php');



$especialidade = $_POST['id_especialidade'];
$dataagenda = $_POST['dataagendar'];
$horas = $_POST['horas'];
$medico = $_POST['id_medico'];
$nome = $_POST['cod_paciente'];

$insere = mysqli_query ($conexao, "INSERT INTO agendar (id_especialidade, dataconsulta, hora, id_medico, id_paciente) VALUES ('$especialidade','$dataagenda', '$horas', '$medico', '$nome')");

if ($insere) {
    $mensagem = "<p class='sucesso'>CONSULTA AGENDADA,<a href='PRINCIPAL.html'>VOLTE AO MENU</a></p>";

} else {
    $mensagem = "<p class='erro'>Erro ao cadastrar consulta: " . mysqli_error($conexao) . "</p>";
}

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDAR CONSULTA</title>
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
        .sucesso a{
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


