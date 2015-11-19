<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistique
 *
 * @ORM\Table(name="statistique", indexes={@ORM\Index(name="FK_Association6", columns={"IdUser"})})
 * @ORM\Entity
 */
class Statistique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdStatistique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstatistique;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdUser", referencedColumnName="IdUser")
     * })
     */
    private $iduser;



    /**
     * Get idstatistique
     *
     * @return integer 
     */
    public function getIdstatistique()
    {
        return $this->idstatistique;
    }

    /**
     * Set datedebut
     *
     * @param string $datedebut
     * @return Statistique
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return string 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param string $datefin
     * @return Statistique
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return string 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Statistique
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set iduser
     *
     * @param \MyApp\UserBundle\Entity\User $iduser
     * @return Statistique
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
