<?php

namespace Kazanac\MembreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Kazanac\MembreBundle\Repository\UserRepository")
 */
class User extends BaseUser {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @var String
     * @ORM\Column(name="nom",type="string",length=50,nullable=true)
     *  
     */
    protected $nom;

    /**
     *
     * @var String
     * @ORM\Column(name="prennom",type="string",length=80,nullable=true)
     *  
     */
    protected $prenom;

    /**
     *
     * @var int
     * @ORM\Column(name="numphone",type="integer",length=10,nullable=true)
     *  
     */
    protected $phonenumber;

    /**
     *
     * @var String
     * @ORM\Column(name="commune",type="string",length=100,nullable=true)
     *  
     */
    protected $commune;

 
    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    public function __construct() {
        parent::__construct();
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getPhonenumber() {
        return $this->phonenumber;
    }

    function getCommune() {
        return $this->commune;
    }


    function setNom(String $nom) {
        $this->nom = $nom;
    }

    function setPrenom(String $prenom) {
        $this->prenom = $prenom;
    }

    function setPhonenumber($phonenumber) {
        $this->phonenumber = $phonenumber;
    }

    function setCommune(String $commune) {
        $this->commune = $commune;
    }



}
