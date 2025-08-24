<?php

$tarefa = $_POST['tarefa'];
$prazo  = $_POST['prazo'];


$conexao = new PDO('mysql:host=database;dbname=todo_list', 'root', 'tiger');

$comando = $conexao->prepare("INSERT INTO tarefas (tarefa, prazo) VALUES (:tarefa, :prazo)");
$comando->bindValue(':tarefa', $tarefa);
$comando->bindValue(':prazo', $prazo);
$resultado = $comando->execute();

if ($resultado) {
  echo "<script>alert('Tarefa cadastrada com sucesso!')</script>";
  echo "<script>window.location = 'index.html';</script>";
} else {
  echo "<script>alert('Erro ao cadastrar tarefa!')</script>";
  echo '<script>window.location = "index.html";</script>';
}

