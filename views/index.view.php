<?php require('views/partials/head.php'); ?>

<header>
    <h1>
        Task for the day
    </h1>
</header>

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

<?php require('views/partials/footer.php'); ?>
