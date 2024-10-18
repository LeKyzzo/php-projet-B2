<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une tâche</title>
</head>
<body>
    <h1>Ajouter une nouvelle tâche</h1>
    <form action="/tasks/store" method="POST">
        <input type="text" name="task" required placeholder="Nom de la tâche">
        <button type="submit">Ajouter</button>
    </form>
    <a href="/tasks">Retourner à la liste des tâches</a>
</body>
</html>
