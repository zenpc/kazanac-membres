<?php

namespace Kazanac\MembreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telephone
 *
 * @ORM\Table(name="phone")
 * @ORM\Entity(repositoryClass="Kazanac\MembreBundle\Repository\TelephoneRepository")
 */
class Phone
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="Kazanac\MembreBundle\Entity\Member",inversedBy="phone")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    protected $phonenumber;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Telephone
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set phonenumber
     *
     * @param \Kazanac\MembreBundle\Entity\Member $phonenumber
     *
     * @return Phone
     */
    public function setPhonenumber(\Kazanac\MembreBundle\Entity\Member $phonenumber = null)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return \Kazanac\MembreBundle\Entity\Member
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }
}
