<?php

    require 'functions.php';
    //todo Aplication
    class Task {
        
        protected $description;
        protected $completed = false;

        public function __construct($description) 
        {
            $this -> description = $description;
        }

        public function complete() 
        {
            $this -> completed = true;
        }

        public function is_completed() 
        {
            return $this -> completed;
        }

        public function get_description()
        {
            return $this -> description;
        }
    }

    $tasks = [
        new Task('Go to the store'),
        new Task('Finish my screencast'),
        new Task('Clean my room')
    ];

    $tasks[0] -> complete();

    //dd($tasks);

    require 'index.view.php';
