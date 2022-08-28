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
        <?php foreach ($task as $feature => $value): ?>
            <li><strong> <?=$feature; ?> </strong> <?= $value; ?></li>
        <?php endforeach; ?>

    </ul>


</header>

</body>
</html>