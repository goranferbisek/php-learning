<?php

//require 'functions.php';


class Task {
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}


$tasks = [
    new Task('Buy some batteries'),
    new Task('Take a shower'),
    new Task('Learn programming')
];

$tasks[1]->complete();


require 'index.view.php';