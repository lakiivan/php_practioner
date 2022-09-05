<?php require('views/partials/head.php'); ?>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<header>
    <h1>
        Submit Your Name
    </h1>
</header>

<form method="POST" action="/names">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>    

<?php require('views/partials/footer.php'); ?>
