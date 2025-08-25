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
                <th>Funções</th>
            </tr>
        </thead>
        <tbody>

<?php foreach($tarefas as $tarefa){ ?>
            <tr>
                <td><?php echo $tarefa['tarefa']; ?></td>
                <td><?php echo $tarefa['prioridade']; ?></td>
                <td><?php echo $tarefa['prazo']; ?></td>

                <td><button><a href="editar.php?id=<?php echo $tarefa['id']; ?>">Editar</a></button></td>

                <td><button><a href="excluir.php?id=<?php echo $tarefa['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir esta tarefa?')">Excluir</ a></button></td>
            </tr> 

    <?php } ?>

        </tbody>
    </table>
    <br><br>

    <button onclick="window.location.href='index.html'">Ver Tarefas</button>