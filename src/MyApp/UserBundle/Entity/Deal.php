<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deal
 *
 * @ORM\Table(name="deal", indexes={@ORM\Index(name="FK_Association5", columns={"IdUser"})})
 * @ORM\Entity
 */
class Deal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdDeal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddeal;

    /**
     * @var string
     *
     * @ORM\Column(name="Libelle", type="string", length=254, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeDeal", type="string", length=254, nullable=true)
     */
    private $typedeal;

    /**
     * @var string
     *
     * @ORM\Column(name="Categorie", type="string", length=254, nullable=true)
     */
    private $categorie;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixInitial", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixinitial = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="PrixPromotionnel", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixpromotionnel = '0';

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
     * @ORM\Column(name="Image", type="string", length=254, nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="Quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="Descriptif", type="string", length=254, nullable=true)
     */
    private $descriptif;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statut", type="integer", nullable=true)
     */
    private $statut;

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
     * Get iddeal
     *
     * @return integer 
     */
    public function getIddeal()
    {
        return $this->iddeal;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Deal
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set typedeal
     *
     * @param string $typedeal
     * @return Deal
     */
    public function setTypedeal($typedeal)
    {
        $this->typedeal = $typedeal;

        return $this;
    }

    /**
     * Get typedeal
     *
     * @return string 
     */
    public function getTypedeal()
    {
        return $this->typedeal;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Deal
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
     * Set prixinitial
     *
     * @param float $prixinitial
     * @return Deal
     */
    public function setPrixinitial($prixinitial)
    {
        $this->prixinitial = $prixinitial;

        return $this;
    }

    /**
     * Get prixinitial
     *
     * @return float 
     */
    public function getPrixinitial()
    {
        return $this->prixinitial;
    }

    /**
     * Set prixpromotionnel
     *
     * @param float $prixpromotionnel
     * @return Deal
     */
    public function setPrixpromotionnel($prixpromotionnel)
    {
        $this->prixpromotionnel = $prixpromotionnel;

        return $this;
    }

    /**
     * Get prixpromotionnel
     *
     * @return float 
     */
    public function getPrixpromotionnel()
    {
        return $this->prixpromotionnel;
    }

    /**
     * Set datedebut
     *
     * @param string $datedebut
     * @return Deal
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
     * @return Deal
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
     * Set image
     *
     * @param string $image
     * @return Deal
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Deal
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
     * Set descriptif
     *
     * @param string $descriptif
     * @return Deal
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string 
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     * @return Deal
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return integer 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set iduser
     *
     * @param \MyApp\UserBundle\Entity\User $iduser
     * @return Deal
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
