<?php

    function connectToDb() 
    {
        try {
            
            $connected_message = 'Connected successfully!';
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo;port=3306','ivan2','');

        }   catch (PDOException $e) {

            echo 'AGAIN '.$e;
            die('Could not connect to database!');

        }
    }  

    function fetchAllTasks($pdo) 
    {

        $statement = $pdo -> prepare('SELECT * FROM todos');
        $statement -> execute();
        return $statement -> fetchAll(PDO::FETCH_CLASS, 'Task');
    }

    function dd($data) {
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
    }

    function nightClubAgeApproval($age) {
        if ($age >= 21) {
            echo "You are welcomed in the night club.<br>\n";
        } else {
            echo "You are not allowed to enter, your age is below 21!";
        }
    }