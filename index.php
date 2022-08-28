<?php

    require 'functions.php';

    $task = [
        'title' => 'install ios software',
        'due' => 'tomorrow',
        'assigned_to' => 'Ivan',
        'isCompleted' => False

    ];

    $animals = ['dog', 'cat'];

    

    //dd($animals);

    $age1 = 15;
    $age2 = 23;

    nightClubAgeApproval($age1);
    nightClubAgeApproval($age2);


    require 'index.view.php';
