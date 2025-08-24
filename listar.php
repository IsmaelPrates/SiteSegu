<?php

$conexao = new PDO('mysql:host=database;dbname=todo_list', 'root', 'tiger');

$comando = $conexao->prepare("SELECT * FROM tarefas");
$comando->execute();

$tarefas = $comando->fetchAll();

?>