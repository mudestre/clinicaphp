<?php 
 include_once('conexao.php');

 include_once('conexao.php'); 

 $query = "SELECT Pacientes.nome as paciente, Medico.Nome_medico as medico, Especialidade.Nome_especialidade as especialidade, Agendar.dataconsulta as data, agendar.hora as horario
           FROM Pacientes INNER JOIN Agendar ON
                Pacientes.cod_paciente = Agendar.Id_paciente INNER JOIN Medico ON
                Medico.id_medico = Agendar.id_medico INNER JOIN Especialidade ON
                Especialidade.id_especialidade = Agendar.Id_especialidade";
 
 $result = mysqli_query($conexao, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTAS AGENDADAS</title>
    <link rel="stylesheet" href="tabela2.css">
</head>
<body>
    <DIV class="tabela">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">PACIENTE</th>
            <th scope="col">MEDICO</th>
            <th scope="col">ESPECIALIDADE</th>
            <th scope="col">DATA</th>
            <th scope="col">HORA</th>
          </tr>
        </thead>
        <tbody>
        <?php 

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['paciente']}</td>
            <td>{$row['medico']}</td>
            <td>{$row['especialidade']}</td>
            <td>{$row['data']}</td>
            <td>{$row['horario']}</td>
          </tr>";
}
?>
</tbody>
    </table>
    </DIV>
    <div class="botao">
      <a href="principal.html">VOLTAR</a>
    </div>
</body>
</html>
