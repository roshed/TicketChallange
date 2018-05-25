<?php
/**
 * Created by PhpStorm.
 * User: Mariusz K.
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TicketRepository")
 * @ORM\Table(name="Ticket")
 */
class Ticket
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", nullable=true)
     */
    private $email;

     /**
     * @var string
     *
     * @ORM\Column(name="adult", type="integer", nullable=true)
     */
    private $adult;


     /**
     * @var string
     *
     * @ORM\Column(name="child", type="integer", nullable=true)
     */
    private $child;

         /**
     * @var string
     *
     * @ORM\Column(name="senior", type="integer", nullable=true)
     */
    private $senior;

    /**
     * Get id.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string|null $name
     *
     * @return Ticket
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email.
     *
     * @param string|null $email
     *
     * @return Ticket
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    /**
     * 
     * Get email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * 
     * Get adult.
     *
     * @return string|null
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Set adult.
     *
     * @param string|null $adult
     *
     * @return Ticket
     */
    public function setAdult($adult)
    {
        $this->adult = $adult;

        return $this;
    }
    /**
     * 
     * Get child.
     *
     * @return string|null
     */
    public function getChild()
    {
        return $this->child;
    }

        /**
     * Set child.
     *
     * @param string|null $child
     *
     * @return Ticket
     */
    public function setChild($child)
    {
        $this->child = $child;

        return $this;
    }
    /**
     * 
     * Get senior.
     *
     * @return string|null
     */
    public function getSenior()
    {
        return $this->senior;
    }

        /**
     * Set senior.
     *
     * @param string|null $senior
     *
     * @return Ticket
     */
    public function setSenior($senior)
    {
        $this->senior = $senior;

        return $this;
    }
    public function __toString() {
        return $this->name;
    }
}