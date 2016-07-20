<?php

namespace Kazanac\MembreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="Kazanac\MembreBundle\Repository\AdressRepository")
 */
class Address
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
     *
     *
     * @ORM\ManyToOne(targetEntity="Kazanac\MembreBundle\Entity\Member")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    protected $address;

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
     * Set address
     *
     * @param \Kazanac\MembreBundle\Entity\Member $address
     *
     * @return Address
     */
    public function setAddress(\Kazanac\MembreBundle\Entity\Member $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \Kazanac\MembreBundle\Entity\Member
     */
    public function getAddress()
    {
        return $this->address;
    }
}
