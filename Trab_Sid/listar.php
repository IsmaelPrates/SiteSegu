<?php
$conexao = new PDO("mysql:host=localhost;dbname=todo_list;charset=utf8", "root", "Ismasaque33?");

$comando = $conexao->prepare("SELECT * FROM Tarefa");
$comando->execute();

$tarefas = $comando->fetchAll(PDO::FETCH_ASSOC);

?>
<table border=1>
    <thead>
        <tr>
            <th>Tarefa</th>
            <th>Prioridade</th>
            <th>Prazo</th>
        </tr>
    </thead>
    <tbody>
        
<?php foreach($tarefas as $tarefa){ ?>
        <tr>
            <td><?php echo $tarefa['tarefa']; ?></td>
            <td><?php echo $tarefa['prioridade']; ?></td>
            <td><?php echo $tarefa['prazo']; ?></td>
        </tr> 
<?php } ?>
    </tbody>
</table>