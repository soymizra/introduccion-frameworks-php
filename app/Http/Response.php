<?php

namespace App\Http;

class Response {
    protected $view; // array, json, pdf....

    public function __construct($view){
        // localhost:8080/contact
        $this->view = $view; // home, contact
    }

    public function getView(){
        return $this->view;
    }

    public function send(){
        $view = $this->getView();
        $content = file_get_contents(__DIR__ . "/../../views/$view.php");

        require __DIR__ . "/../../views/layout.php";
    }
    
}