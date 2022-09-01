<?php

class Connection
{
    public static function make($config)

    {
        try {
            
            $connected_message = 'Connected successfully!';
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']

            );

        }   catch (PDOException $e) {

            echo 'AGAIN '.$e;
            die('Could not connect to database!');

        }
    }

    
}
