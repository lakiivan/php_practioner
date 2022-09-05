<?php require('partials/head.php'); ?>

<h1>All users</h1>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<header>
    <h1>
        Submit Your Name
    </h1>
</header>

<form method="POST" action="/users">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>    

<?php require('footer.php'); ?>