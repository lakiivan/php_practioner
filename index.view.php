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
            <strong>Status: </strong> 
            <?php  if ($task['isCompleted']) : ?>
                <span class="icon">&#9989</span>  
            <?php else: ?>
                <span class="icon">&#10060;</span>
            <?php endif; ?>
        </li>

    </ul>


</header>

</body>
</html>