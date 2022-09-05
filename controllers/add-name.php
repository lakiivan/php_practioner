<?php
//require './core/bootstrap.php';
//var_dump($app['database']);
$app['database']->insertName('users', [
    'name' => $_POST['name']
]);

header('Location: /');