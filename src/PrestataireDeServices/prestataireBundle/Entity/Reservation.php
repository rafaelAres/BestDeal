<?php

namespace PrestataireDeServices\prestataireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="IDX_42C8495597AF9ABE", columns={"IdDeal"}), @ORM\Index(name="IDX_42C84955F9C28DE1", columns={"IdUser"})})
 * @ORM\Entity
 */
class Reservation
{
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
     * @var integer
     *
     * @ORM\Column(name="IdReservation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreservation;

    /**
     * @var \PrestataireDeServices\prestataireBundle\Entity\Deal
     *
     * @ORM\ManyToOne(targetEntity="PrestataireDeServices\prestataireBundle\Entity\Deal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdDeal", referencedColumnName="IdDeal")
     * })
     */
    private $iddeal;

    /**
     * @var \PrestataireDeServices\prestataireBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="PrestataireDeServices\prestataireBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdUser", referencedColumnName="IdUser")
     * })
     */
    private $iduser;


}
