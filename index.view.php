<!DOCTYPE html>
<html lang="en>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

<header>
    <h1>
        Task for the Day 
    </h1>
    <ul>
        <li>
            <strong>Name: </strong> <?= $task['title']; ?>
        </li>

        <li>
            <strong>Dut Date: </strong> <?= $task['due']; ?>
        </li>

        <li>
            <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
        </li>

        <li>
            <strong>Status: </strong> <?= $task['isCompleted'] ? 'Complete' : 'Incomplete'; ?>
        </li>

    </ul>


</header>

</body>
</html>