<?php 
  if (isset($_GET['id'])) {
      $id = $_GET['id'];
  }

  $conexao = new PDO("mysql:host=localhost;dbname=todo_list;charset=utf8", "root", "Ismasaque33?");

  $comando = $conexao->prepare("DELETE Tarefa FROM Tarefa WHERE id = :id");

  $comando->bindValue(':id', $id);
  
  $resultado = $comando->execute();

  if ($resultado) {
    echo "<script>alert('Tarefa excluida com sucesso!',)</script>";
    echo '<script>window.location = "listar.php";</script>';
  } else {
    echo "<script>alert('Erro ao excluir a tarefa!')</script>";
    echo '<script>window.location = "listar.php";</script>';
  }
?>