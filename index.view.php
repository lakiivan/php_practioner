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
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if($task -> completed) : ?>
                    <strike>
                    <span>&#9989;<?=$task -> description; ?></span>
                    </strike>
                <?php else : ?>
                    <span>&#10060;<?=$task -> description; ?></span>
                <?php endif; ?>    
            </li>
        <?php endforeach; ?>    
    </ul>
</header>

</body>
</html>