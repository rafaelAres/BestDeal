<?php

namespace PrestataireDeServices\prestataireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation", indexes={@ORM\Index(name="IDX_1323A57597AF9ABE", columns={"IdDeal"}), @ORM\Index(name="IDX_1323A575F9C28DE1", columns={"IdUser"})})
 * @ORM\Entity
 */
class Evaluation
{
    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="string", length=254, nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Note", type="string", length=254, nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdEvaluation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevaluation;

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
