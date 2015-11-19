<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="FK_Association1", columns={"IdUser"}), @ORM\Index(name="FK_Association2", columns={"IdDeal"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdReservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreservation;

    /**
     * @var string
     *
     * @ORM\Column(name="DateReservation", type="string", length=100, nullable=true)
     */
    private $datereservation;

    /**
     * @var integer
     *
     * @ORM\Column(name="Quantite", type="integer", nullable=true)
     */
    private $quantite;

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
     *   @ORM\JoinColumn(name="IdUser", referencedColumnName="IdUser")
     * })
     */
    private $iduser;



    /**
     * Get idreservation
     *
     * @return integer 
     */
    public function getIdreservation()
    {
        return $this->idreservation;
    }

    /**
     * Set datereservation
     *
     * @param string $datereservation
     * @return Reservation
     */
    public function setDatereservation($datereservation)
    {
        $this->datereservation = $datereservation;

        return $this;
    }

    /**
     * Get datereservation
     *
     * @return string 
     */
    public function getDatereservation()
    {
        return $this->datereservation;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Reservation
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set iddeal
     *
     * @param \MyApp\UserBundle\Entity\Deal $iddeal
     * @return Reservation
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
     * Set iduser
     *
     * @param \MyApp\UserBundle\Entity\User $iduser
     * @return Reservation
     */
    public function setIduser(\MyApp\UserBundle\Entity\User $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \MyApp\UserBundle\Entity\User 
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
