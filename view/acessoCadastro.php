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