<?php
/**
 * Created by PhpStorm.
 * User: Mariusz K.
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 * @ORM\Table(name="Reservation")
 */
class Reservation
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
     * @ORM\Column(name="unique_id", type="string", nullable=false)
     */
    private $unique;

    /**
     * @Doctrine\ORM\Mapping\ManyToOne(targetEntity="Ticket")
     * @Doctrine\ORM\Mapping\JoinColumn(name="event_id", referencedColumnName="id")
     */
    private $eventid;

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
     * @var integer
     *
     * @ORM\Column(name="adult", type="integer", nullable=true)
     */
    private $adult;


     /**
     * @var integer
     *
     * @ORM\Column(name="child", type="integer", nullable=true)
     */
    private $child;

         /**
     * @var integer
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
     * @param string $Unique
     */
    public function setUnique($unique)
    {
        $this->unique = $unique;

        return $this;
    }

    /**
     * Get Unique.
     *
     * @return string|null
     */
    public function getUnique($Unique)
    {
        return $this->unique;
    }


    /**
     * @return mixed
     */
    public function getEventid()
    {
        return $this->eventid;
    }

    /**
     * @param mixed $eventid
     */
    public function setEventid($eventid)
    {
        $this->eventid = $eventid;
    }

    /**
     * Set name.
     *
     * @param string|null $name
     *
     * @return Reservation
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
     * @return Reservation
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
     * @return Reservation
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
     * @return Reservation
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
     * @return Reservation
     */
    public function setSenior($senior)
    {
        $this->senior = $senior;

        return $this;
    }
}