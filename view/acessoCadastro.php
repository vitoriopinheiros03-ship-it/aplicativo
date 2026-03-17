<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Tarefas</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Tarefas</title>
</head>
<body>
<body>
    <h1>Cadastrar de tarefas</h1>
    <br><br>
    <form method="POST">
    <label>Tarefas: </label>
    <input type="text" name="tarefas01" id="tarefas01"/>
    <br>
    <label>Horário: </label>
    <input type="text" name="horario" id="horario"/>
    <br>
    <label>Dia: </label>
    <input type="text" name="dia" id="dia"/>
    <br>
    <label>Descrição: </label>
    <input type="text" name="descricao" id="descricao"/>
    <br>
    <label>Status: </label>
    <input type="text" name="status" id="status"/>
    <br>
    <button><a href="login.php">Salvar
        <?php
            try{
              $tarefas01       = $_POST['tarefas01'];
              $horario         = $_POST['horario'];
              $dia             = $_POST['dia'];
              $descrico        = $_POST['descricao'];
              $status          = $_POST['status'];

              session_start();//Abrindo a sessão

              $_SESSION['tarefas01'] = $tarefas01;
              $_SESSION['horario']   = $horario;
              $_SESSION['dia']       = $dia;
              $_SESSION['descricao']  = $descrico;
              $_SESSION['status']    = $status;
              


            }catch(Except $erro){
               echo "Algo deu errado!!! <br><br> $erro";
            }
         ?>
    </a></button>
   
</form>
<button><a href="login.php">Voltar</a></button>   

</body>
</html>