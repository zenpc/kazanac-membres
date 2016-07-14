<?php

namespace Kazanac\MembreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonction
 *
 * @ORM\Table(name="function")
 * @ORM\Entity(repositoryClass="Kazanac\MembreBundle\Repository\FonctionRepository")
 */
class FunctionMember
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
     * @ORM\Column(name="function", type="string", length=255)
     */
    private $function;



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
     * Set function
     *
     * @param string $function
     *
     * @return FunctionMember
     */
    public function setFunction($function)
    {
        $this->function = $function;

        return $this;
    }

    /**
     * Get function
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }
}
