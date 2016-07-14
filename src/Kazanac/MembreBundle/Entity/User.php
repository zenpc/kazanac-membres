<?php

namespace Kazanac\MembreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Kazanac\MembreBundle\Repository\UserRepository")
 */
class User
{

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
     * @ORM\Column(name="prenom",type="string",length=80,nullable=true)
     *
     */
    protected $prenom;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="Kazanac\MembreBundle\Entity\Telephone")
     * @ORM\JoinColumn(name="telephone_id", referencedColumnName="id", nullable=true)
     */
    protected $phonenumber;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="Kazanac\MembreBundle\Entity\Adress")
     * @ORM\JoinColumn(name="addres_id", referencedColumnName="id", nullable=true)
     */
    protected $address;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="Kazanac\MembreBundle\Entity\Email")
     * @ORM\JoinColumn(name="email", referencedColumnName="id", nullable=true)
     */
    protected $email;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="Kazanac\MembreBundle\Entity\Fonction")
     * @ORM\JoinColumn(name="fonction_id", referencedColumnName="id", nullable=true)
     */
    protected $fonction;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set phonenumber
     *
     * @param \Kazanac\MembreBundle\Entity\Telephone $phonenumber
     *
     * @return User
     */
    public function setPhonenumber(\Kazanac\MembreBundle\Entity\Telephone $phonenumber = null)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return \Kazanac\MembreBundle\Entity\Telephone
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set adress
     *
     * @param \Kazanac\MembreBundle\Entity\Adress $adress
     *
     * @return User
     */
    public function setAdress(\Kazanac\MembreBundle\Entity\Adress $adress = null)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return \Kazanac\MembreBundle\Entity\Adress
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set email
     *
     * @param \Kazanac\MembreBundle\Entity\Email $email
     *
     * @return User
     */
    public function setEmail(\Kazanac\MembreBundle\Entity\Email $email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return \Kazanac\MembreBundle\Entity\Email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fonction
     *
     * @param \Kazanac\MembreBundle\Entity\Fonction $fonction
     *
     * @return User
     */
    public function setFonction(\Kazanac\MembreBundle\Entity\Fonction $fonction = null)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return \Kazanac\MembreBundle\Entity\Fonction
     */
    public function getFonction()
    {
        return $this->fonction;
    }
}
