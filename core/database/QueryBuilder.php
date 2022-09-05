<?php

class QueryBuilder 

{
    protected $pdo;

    public function __construct($pdo) 

    {
        $this->pdo = $pdo;
    }


    public function selectAll($table, $intoClass)

    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function insertName($table, $parameters)

    {
        // insert into %s (%s) values (%s)
        // insert into names (anbem, email) values (:name, :email)
        //var_dump('INSERT INTO '.$table.' (name) VALUES ('.$name.')');

        //die(var_dump(array_keys($parameters)));

        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)', 
            $table,
            implode(', ', array_keys($parameters)),
            ':'.implode(', :', array_keys($parameters))
        );

        //die(var_dump($sql));
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
            var_dump('Task: '.$name.' , was successfully inserted into table todos');
        } catch(Exception $e) {
            die('Whoops, something went wrong!');
        }
    }


}