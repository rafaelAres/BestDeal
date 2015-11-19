<?php

namespace MyApp\UserBundle\Entity;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdUser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=254, nullable=true)


     */
    private $nom;

     /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=254, nullable=true)
 
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Sexe", type="string", length=254, nullable=true)
     *
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="DateDeNaissance", type="string", length=100, nullable=true)
     */
    private $datedenaissance;

    /**
     * @var integer
     *
     * @ORM\Column(name="Telephone", type="integer", nullable=true)
     * 
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Societe", type="string", length=254, nullable=true)
     * 
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=254, nullable=true)
     * 
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Descriptif", type="string", length=254, nullable=true)
     *
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="Logo", type="string", length=254, nullable=true)
     * 
     */
    private $logo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statut", type="integer", nullable=true)
     * 
     */
    private $statut;



    /**
     * Get iduser
     *
     * @return integer 
     */
   
    /**
     * Set login
     *
     * @param string $login
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set motdepasse
     *
     * @param string $motdepasse
     * @return User
     */
    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    /**
     * Get motdepasse
     *
     * @return string 
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set datedenaissance
     *
     * @param string $datedenaissance
     * @return User
     */
    public function setDatedenaissance($datedenaissance)
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    /**
     * Get datedenaissance
     *
     * @return string 
     */
    public function getDatedenaissance()
    {
        return $this->datedenaissance;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set societe
     *
     * @param string $societe
     * @return User
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string 
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     * @return User
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
     * Set logo
     *
     * @param string $logo
     * @return User
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     * @return User
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
    public function __toString() {
        parent::__toString();
    }
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
