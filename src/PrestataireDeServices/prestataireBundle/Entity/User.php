<?php

namespace PrestataireDeServices\prestataireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D64992FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_8D93D649A0D96FBF", columns={"email_canonical"})})
 * @ORM\Entity
 */
class User
{
    
    public function getUsername() {
        return $this->username;
    }

    public function getUsernameCanonical() {
        return $this->usernameCanonical;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getEmailCanonical() {
        return $this->emailCanonical;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function getSalt() {
        return $this->salt;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getLastLogin() {
        return $this->lastLogin;
    }

    public function getLocked() {
        return $this->locked;
    }

    public function getExpired() {
        return $this->expired;
    }

    public function getExpiresAt() {
        return $this->expiresAt;
    }

    public function getConfirmationToken() {
        return $this->confirmationToken;
    }

    public function getPasswordRequestedAt() {
        return $this->passwordRequestedAt;
    }

    public function getRoles() {
        return $this->roles;
    }

    public function getCredentialsExpired() {
        return $this->credentialsExpired;
    }

    public function getCredentialsExpireAt() {
        return $this->credentialsExpireAt;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function getDatedenaissance() {
        return $this->datedenaissance;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function getSociete() {
        return $this->societe;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getDescriptif() {
        return $this->descriptif;
    }

    public function getLogo() {
        return $this->logo;
    }

    public function getStatut() {
        return $this->statut;
    }

    public function getIduser() {
        return $this->iduser;
    }

        /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="username_canonical", type="string", length=255, nullable=false)
     */
    private $usernameCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=255, nullable=false)
     */
    private $emailCanonical;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=false)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expired", type="boolean", nullable=false)
     */
    private $expired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    private $expiresAt;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_token", type="string", length=255, nullable=true)
     */
    private $confirmationToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    private $passwordRequestedAt;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array", nullable=false)
     */
    private $roles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="credentials_expired", type="boolean", nullable=false)
     */
    private $credentialsExpired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="credentials_expire_at", type="datetime", nullable=true)
     */
    private $credentialsExpireAt;

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
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Societe", type="string", length=254, nullable=true)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=254, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Descriptif", type="string", length=254, nullable=true)
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="Logo", type="string", length=254, nullable=true)
     */
    private $logo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Statut", type="integer", nullable=true)
     */
    private $statut;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdUser", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;
    public function setUsername($username) {
        $this->username = $username;
    }

    public function setUsernameCanonical($usernameCanonical) {
        $this->usernameCanonical = $usernameCanonical;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setEmailCanonical($emailCanonical) {
        $this->emailCanonical = $emailCanonical;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function setSalt($salt) {
        $this->salt = $salt;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setLastLogin(\DateTime $lastLogin) {
        $this->lastLogin = $lastLogin;
    }

    public function setLocked($locked) {
        $this->locked = $locked;
    }

    public function setExpired($expired) {
        $this->expired = $expired;
    }

    public function setExpiresAt(\DateTime $expiresAt) {
        $this->expiresAt = $expiresAt;
    }

    public function setConfirmationToken($confirmationToken) {
        $this->confirmationToken = $confirmationToken;
    }

    public function setPasswordRequestedAt(\DateTime $passwordRequestedAt) {
        $this->passwordRequestedAt = $passwordRequestedAt;
    }

    public function setRoles($roles) {
        $this->roles = $roles;
    }

    public function setCredentialsExpired($credentialsExpired) {
        $this->credentialsExpired = $credentialsExpired;
    }

    public function setCredentialsExpireAt(\DateTime $credentialsExpireAt) {
        $this->credentialsExpireAt = $credentialsExpireAt;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function setDatedenaissance($datedenaissance) {
        $this->datedenaissance = $datedenaissance;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function setSociete($societe) {
        $this->societe = $societe;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;
    }

    public function setLogo($logo) {
        $this->logo = $logo;
    }

    public function setStatut($statut) {
        $this->statut = $statut;
    }

    public function setIduser($iduser) {
        $this->iduser = $iduser;
    }



}
