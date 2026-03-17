<?php
    namespace Projeto\view;
    require_once('../model/Tarefas.php');
    use Projeto\model\Tarefas;
    //Instanciar uma variável da classe pessoa 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar de Tarefas</title>
</head>
<body>
    <h1>CENTRAL DE TAREFAS</h1>
    <br><br>
    <button><a href="cadastro2.php">Cadastro de Tarefas</a></button>
    <button><a href="acessoConsulta.php">Consultar</a></button>
    <button><a href="acessoAtualizar.php">Atualizar</a></button>
    <button><a href="acessoExcluir.php">Excluir</a></button>
    <button type="submit">Salvar
        <?php
            try{
              $codigo        = $_POST['codigo'];
              $tarefas01     = $_POST['tarefas01'];
              $horario       = $_POST['horario'];
              $dia           = $_POST['dia'];
              $descricao     = $_POST['descricao'];
              $status        = $_POST['status'];
              
              //Instaciar a variável pessoa com dados
              $tarefa = new Tarefas($codigo, $tarefas01, $horario, $dia, $descricao, $status);

            }catch(Except $erro){
               echo "Algo deu errado!!! <br><br> $erro";
            }
         ?>
    </button>
    <?php
        echo $tarefa->imprimir();
    ?>
</form>
<button><a href="registrarTarefa.php">Voltar</a></button>   

</body>
</html>
