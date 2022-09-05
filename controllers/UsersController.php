<?php

namespace App\Controllers;

class UsersController 

{

    public function index()
    {

        //$tasks = $app['database']->selectAll('todos', "Task");
        //die('home');
       
        $users = App::get('database')->selectAll('users', 'User');
        
        return view('users', [

            'users' => $users

        ]);
    }


    public function store()
    {
        App::get('database')->insertName('users', [
            'name' => $_POST['name']
        ]);

        return redirect('users');
        
    }

}