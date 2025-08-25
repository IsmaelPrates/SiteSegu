<?php
  $id = $_POST['id'];
  $tarefa = $_POST['tarefa'];
  $prazo  = $_POST['prazo'];
  $prioridade = $_POST['prioridade'];

  $conexao = new PDO("mysql:host=localhost;dbname=todo_list;charset=utf8", "root", "Ismasaque33?");

  $comando = $conexao->prepare("UPDATE Tarefa SET tarefa = :tarefa, prioridade = :prioridade, prazo = :prazo WHERE id = :id");

  $comando->bindValue(':tarefa', $tarefa);
  $comando->bindValue(':prioridade', $prioridade);
  $comando->bindValue(':prazo', $prazo);
  $comando->bindValue(':id', $id);

  $resultado = $comando->execute();

  if ($resultado) {
    echo "<script>alert('Tarefa editada com sucesso!',)</script>";
    echo '<script>window.location = "index.html";</script>';
  } else {
    echo "<script>alert('Erro ao editar a tarefa!')</script>";
    echo '<script>window.location = "index.html";</script>';
  }
?>

