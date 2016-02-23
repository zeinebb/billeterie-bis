<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table
 */

class Concert
{
 /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column
     */
    private $nom;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $nombredeplace;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $prix;
    
    

    /**
     * @ORM\Column(type="text")
     */
    private $address;
    
    
    
    
    public function getPrix() {
        return $this->prix;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

        
    
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getDate() {
        return $this->date;
    }

    public function getNombredeplace() {
        return $this->nombredeplace;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setNombredeplace($nombredeplace) {
        $this->nombredeplace = $nombredeplace;
    }

    public function setAddress($address) {
        $this->address = $address;
    }



    

    
    
    
}