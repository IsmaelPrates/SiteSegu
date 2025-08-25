<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TODO List Aprendizagem</title>
  </head>
  <body>
    
<?php 

  $id = $_GET['id'];

  $conexao = new PDO("mysql:host=localhost;dbname=todo_list;charset=utf8", "root", "Ismasaque33?");

  $comando = $conexao->prepare("SELECT * FROM Tarefa WHERE id = :id");

  $comando->bindValue(':id', $id);

  $comando->execute();

  $tarefa = $comando->fetch(PDO::FETCH_ASSOC);
?>

  <h3>Editando Tarefa</h3>
    
    <form action="edit.php" method="post">

      <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">

      Tarefa: <input type="text" name="tarefa" value="<?php echo $tarefa['tarefa'];?>"/>
      <br><br>

      Prioridade: <select name="prioridade">
        <option value="alta" <?php if($tarefa['prioridade']=='alta') echo 'selected'; ?>>Alta</option>
        <option value="media" <?php if($tarefa['prioridade']=='media') echo 'selected'; ?>>Média</option>
        <option value="baixa" <?php if($tarefa['prioridade']=='baixa')echo 'selected'; ?>>Baixa</option>
      </select>
      <br><br>

      Prazo de finalização: <input type="date" name="prazo" value="<?php echo $tarefa['prazo'];?>"/>
      <br><br>

  <button type="submit" >Salvar</button>
    </form>
    <br>

    <button onclick="window.location.href='listar.php'">Ver Tarefas</button>

  </body>
</html>