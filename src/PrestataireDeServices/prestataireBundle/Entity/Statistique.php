<?php

namespace PrestataireDeServices\prestataireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistique
 *
 * @ORM\Table(name="statistique", indexes={@ORM\Index(name="IDX_73A038ADF9C28DE1", columns={"IdUser"})})
 * @ORM\Entity
 */
class Statistique
{
    /**
     * @var string
     *
     * @ORM\Column(name="DateDebut", type="string", length=100, nullable=true)
     */
    private $datedebut;

    /**
     * @var string
     *
     * @ORM\Column(name="DateFin", type="string", length=100, nullable=true)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="Categorie", type="string", length=254, nullable=true)
     */
    private $categorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdStatistique", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstatistique;

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
