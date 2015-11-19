<?php

namespace PrestataireDeServices\prestataireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deal
 *
 * @ORM\Table(name="deal", indexes={@ORM\Index(name="IDX_E3FEC116F9C28DE1", columns={"IdUser"})})
 * @ORM\Entity
 */
class Deal
{
    
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    public function setTypedeal($typedeal) {
        $this->typedeal = $typedeal;
    }

    public function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    public function setPrixinitial($prixinitial) {
        $this->prixinitial = $prixinitial;
    }

    public function setPrixpromotionnel($prixpromotionnel) {
        $this->prixpromotionnel = $prixpromotionnel;
    }

    public function setDatedebut($datedebut) {
        $this->datedebut = $datedebut;
    }

    public function setDatefin($datefin) {
        $this->datefin = $datefin;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;
    }

    public function setStatut($statut) {
        $this->statut = $statut;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIduser(\PrestataireDeServices\prestataireBundle\Entity\User $iduser) {
        $this->iduser = $iduser;
    }

        
    public function getLibelle() {
        return $this->libelle;
    }

    public function getTypedeal() {
        return $this->typedeal;
    }

    public function getCategorie() {
        return $this->categorie;
    }

    public function getPrixinitial() {
        return $this->prixinitial;
    }

    public function getPrixpromotionnel() {
        return $this->prixpromotionnel;
    }

    public function getDatedebut() {
        return $this->datedebut;
    }

    public function getDatefin() {
        return $this->datefin;
    }

    public function getImage() {
        return $this->image;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function getDescriptif() {
        return $this->descriptif;
    }

    public function getStatut() {
        return $this->statut;
    }

    public function getId() {
        return $this->id;
    }

    public function getIduser() {
        return $this->iduser;
    }

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
    private $prixinitial;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixPromotionnel", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixpromotionnel;

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
     * @var integer
     *
     * @ORM\Column(name="IdDeal", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
