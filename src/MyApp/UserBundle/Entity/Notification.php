<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", indexes={@ORM\Index(name="FK_Association7", columns={"IdFromUser"}), @ORM\Index(name="FK_Association8", columns={"IdToUser"}), @ORM\Index(name="FK_Association9", columns={"IdDeal"})})
 * @ORM\Entity
 */
class Notification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdNotification", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnotification;

    /**
     * @var string
     *
     * @ORM\Column(name="DateNotification", type="string", length=100, nullable=true)
     */
    private $datenotification;

    /**
     * @var string
     *
        * @ORM\Column(name="TypeNotification", type="string", length=254, nullable=true)
     */
    private $typenotification;

    /**
     * @var string
     *
     * @ORM\Column(name="Message", type="string", length=254, nullable=true)
     */
    private $message;

    /**
     * @var \Deal
     *
     * @ORM\ManyToOne(targetEntity="Deal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdDeal", referencedColumnName="IdDeal")
     * })
     */
    private $iddeal;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdFromUser", referencedColumnName="IdUser")
     * })
     */
    private $idfromuser;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdToUser", referencedColumnName="IdUser")
     * })
     */
    private $idtouser;



    /**
     * Get idnotification
     *
     * @return integer 
     */
    public function getIdnotification()
    {
        return $this->idnotification;
    }

    /**
     * Set datenotification
     *
     * @param string $datenotification
     * @return Notification
     */
    public function setDatenotification($datenotification)
    {
        $this->datenotification = $datenotification;

        return $this;
    }

    /**
     * Get datenotification
     *
     * @return string 
     */
    public function getDatenotification()
    {
        return $this->datenotification;
    }

    /**
     * Set typenotification
     *
     * @param string $typenotification
     * @return Notification
     */
    public function setTypenotification($typenotification)
    {
        $this->typenotification = $typenotification;

        return $this;
    }

    /**
     * Get typenotification
     *
     * @return string 
     */
    public function getTypenotification()
    {
        return $this->typenotification;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Notification
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set iddeal
     *
     * @param \MyApp\UserBundle\Entity\Deal $iddeal
     * @return Notification
     */
    public function setIddeal(\MyApp\UserBundle\Entity\Deal $iddeal = null)
    {
        $this->iddeal = $iddeal;

        return $this;
    }

    /**
     * Get iddeal
     *
     * @return \MyApp\UserBundle\Entity\Deal 
     */
    public function getIddeal()
    {
        return $this->iddeal;
    }

    /**
     * Set idfromuser
     *
     * @param \MyApp\UserBundle\Entity\User $idfromuser
     * @return Notification
     */
    public function setIdfromuser(\MyApp\UserBundle\Entity\User $idfromuser = null)
    {
        $this->idfromuser = $idfromuser;

        return $this;
    }

    /**
     * Get idfromuser
     *
     * @return \MyApp\UserBundle\Entity\User 
     */
    public function getIdfromuser()
    {
        return $this->idfromuser;
    }

    /**
     * Set idtouser
     *
     * @param \MyApp\UserBundle\Entity\User $idtouser
     * @return Notification
     */
    public function setIdtouser(\MyApp\UserBundle\Entity\User $idtouser = null)
    {
        $this->idtouser = $idtouser;

        return $this;
    }

    /**
     * Get idtouser
     *
     * @return \MyApp\UserBundle\Entity\User 
     */
    public function getIdtouser()
    {
        return $this->idtouser;
    }
}
