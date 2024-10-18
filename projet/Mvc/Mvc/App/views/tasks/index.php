<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ToDo List</title>
</head>
<body>
    <h1>ToDo List</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?php echo htmlspecialchars($task->name); ?>
                <form action="/tasks/delete/<?php echo $task->id; ?>" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $task->id; ?>">
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="/tasks/create">Ajouter une tâche</a>
</body>
</html>
