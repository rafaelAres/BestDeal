<?php

namespace PrestataireDeServices\prestataireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", indexes={@ORM\Index(name="IDX_BF5476CA97AF9ABE", columns={"IdDeal"}), @ORM\Index(name="IDX_BF5476CA804A36C4", columns={"IdFromUser"}), @ORM\Index(name="IDX_BF5476CAAC91624F", columns={"IdToUser"})})
 * @ORM\Entity
 */
class Notification
{
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
     * @var integer
     *
     * @ORM\Column(name="IdNotification", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnotification;

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
     *   @ORM\JoinColumn(name="IdFromUser", referencedColumnName="IdUser")
     * })
     */
    private $idfromuser;

    /**
     * @var \PrestataireDeServices\prestataireBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="PrestataireDeServices\prestataireBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdToUser", referencedColumnName="IdUser")
     * })
     */
    private $idtouser;


}
