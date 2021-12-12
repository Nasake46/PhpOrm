<?php
# src/Entity/User.php

namespace Tuto\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/
class Ticket
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    protected $id;

    function setId(){
        $this->id = $id;
    }
     
    function getId(){
        return $this->id;
    }

    /**
    * @ORM\Column(type="string")
    */
    protected $title;

    function setTitle($title){
        $this->title = $title;
    }
     
    function getTitle(){
        return $this->title;
    }

    /**
    * @ORM\Column(type="string")
    */
    protected $section;

    function setSection($section){
        $this->section = $section;
    }
     
    function getSection(){
        return $this->section;
    }

    /**
    * @ORM\Column(type="string")
    */
    protected $description;

    function setDescription($description){
        $this->description = $description;
    }
     
    function getDescription(){
        return $this->description;
    }
}