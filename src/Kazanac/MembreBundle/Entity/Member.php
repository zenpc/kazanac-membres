<?php

namespace Kazanac\MembreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Member
 *
 * @ORM\Table(name="member")
 * @ORM\Entity()
 */
class Member
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
     * @ORM\Column(name="last_name",type="string",length=50,nullable=true)
     *
     */
    protected $lastName;

    /**
     *
     * @var String
     * @ORM\Column(name="first_name",type="string",length=80,nullable=true)
     *
     */
    protected $firstName;




    /**
     * @var String
     * @ORM\Column(name="email",type="string",length=50,nullable=true)
     */
    protected $email;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="Kazanac\MembreBundle\Entity\FunctionMember")
     * @ORM\JoinColumn(name="fonction_id", referencedColumnName="id", nullable=true)
     */
    protected $fonction;


    /**
     * @var String
     * @ORM\Column(name="pathImg",type="string",length=200,nullable=true)
     */
    protected $pathImg;

    /**
     * @ORM\OneToMany(targetEntity="Kazanac\MembreBundle\Entity\Phone", mappedBy="phonenumber")
     *
     */
    private $phone;

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

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Member
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Member
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set address
     *
     * @param \Kazanac\MembreBundle\Entity\Address $address
     *
     * @return Member
     */
    public function setAddress(\Kazanac\MembreBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \Kazanac\MembreBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->phone = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set pathImg
     *
     * @param string $pathImg
     *
     * @return Member
     */
    public function setPathImg($pathImg)
    {
        $this->pathImg = $pathImg;

        return $this;
    }

    /**
     * Get pathImg
     *
     * @return string
     */
    public function getPathImg()
    {
        return $this->pathImg;
    }

    /**
     * Add phone
     *
     * @param \Kazanac\MembreBundle\Entity\Phone $phone
     *
     * @return Member
     */
    public function addPhone(\Kazanac\MembreBundle\Entity\Phone $phone)
    {
        $this->phone[] = $phone;

        return $this;
    }

    /**
     * Remove phone
     *
     * @param \Kazanac\MembreBundle\Entity\Phone $phone
     */
    public function removePhone(\Kazanac\MembreBundle\Entity\Phone $phone)
    {
        $this->phone->removeElement($phone);
    }

    /**
     * Get phone
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhone()
    {
        return $this->phone;
    }
}
