<?php

$tarefa = $_POST['tarefa'];
$prazo  = $_POST['prazo'];
$prioridade = $_POST['prioridade'];

$conexao = new PDO("mysql:host=localhost;dbname=todo_list;charset=utf8", "root", "Ismasaque33?");

$comando = $conexao->prepare("INSERT INTO Tarefa (tarefa, prioridade, prazo) VALUES (:tarefa, :prioridade, :prazo)");
$comando->bindValue(':tarefa', $tarefa);
$comando->bindValue(':prioridade', $prioridade);
$comando->bindValue(':prazo', $prazo);
$resultado = $comando->execute();

if ($resultado) {
  echo "<script>alert('Tarefa cadastrada com sucesso!')</script>";
  echo '<script>window.location = "index.html";</script>';
} else {
  echo "<script>alert('Erro ao cadastrar tarefa!')</script>";
  echo '<script>window.location = "index.html";</script>';
}
?>

