<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Consultas</title>
    <link rel="stylesheet" href="style2.css">

</head>
<body>

    <form action="consultar.php" method="post">
       
        <div class="cardb">

        <h1> AGENDAR CONSULTAS </h1>
        <br>
                  
       
        <label for="">Especialidade</label>
        <br>

        <?php
        include_once ('conexao.php');

        $select = mysqli_query($conexao, "SELECT id_especialidade as id, nome_especialidade as especialidade FROM especialidade;");

        echo ("<select name='id_especialidade' required>");

        while($resultado = mysqli_fetch_array($select)){

        echo"<option value ='".$resultado['id']."'>". $resultado['especialidade']."</option>";
        }
        echo("</select>");

        ?>
        <br><br>    

        <label for="dataagendar"> Data: </label>
        <br>
        <input id="dataagendar" type="date" name="dataagendar" required>
        <br><br>

        <label for="horas">Hora:</label>
        <br>
        <input id="horas" type="time" name="horas" required>
        <br><br>

        <label> Nome do Médico:</label>
        <br>
            
        <?php

            include_once ('conexao.php');

            $select = mysqli_query($conexao, "SELECT id_medico as id, nome_medico as medico FROM medico order by medico asc;");

            echo ("<select name='id_medico' required>");

            while($resultado = mysqli_fetch_array($select)){
            
            echo"<option value =".$resultado['id'].">". $resultado['medico']."</option>";
            }
            echo("</select>");
            
        ?>
        <br><br>
        <label for="">Nome Paciente:</label>
        <br>
        <?php

           
        
            include_once ('conexao.php');

            
            $select = mysqli_query($conexao, "SELECT cod_paciente as cod, nome as paciente FROM pacientes;");

            echo ("<select name='cod_paciente' required>");

            while($resultado = mysqli_fetch_array($select)){
            
            echo"<option value ='".$resultado['cod']."'>". $resultado['paciente']."</option>";
            }
            echo("</select>");

        ?>

        <br><br><br>



        <button type="submit"> AGENDAR </button>
</div>
</form>



</body>
</html>
