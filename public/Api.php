<?php

class Ticket {

    private $title;
    private $section;
    private $description;

    public function __construct ($title, $section, $description) {
        $this->title = $section;
        $this->section = $section;
        $this->description = $description;
    }

    function setTitle(){
        $this->title = $title;
    }
     
    function getTitle(){
        return $this->title;
    }

    function setSection(){
        $this->section = $section;
    }
     
    function getSection(){
        return $this->section;
    }

    function setDescription(){
        $this->setDescription = $description;
    }
     
    function getDescription(){
        return $this->description;
    }
}

$request_method = $_SERVER["REQUEST_METHOD"];

$film = new Ticket("Bijoue");
switch($request_method)
{
    case 'GET':
        header("HTTP/1.1 200 OK");
        echo $film->getTicket();
        $jsonText = file_get_contents("../ticket.json");
        $json = json_decode($jsonText, true);
        break;
    case 'POST':
        'php://input';
        break;
    default:
        // Requête invalide
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}

var_dump($json);