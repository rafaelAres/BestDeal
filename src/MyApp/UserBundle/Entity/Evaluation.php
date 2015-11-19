<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation", indexes={@ORM\Index(name="FK_Association3", columns={"IdUser"}), @ORM\Index(name="FK_Association4", columns={"IdDeal"})})
 * @ORM\Entity
 */
class Evaluation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdEvaluation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevaluation;

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
     * Get idevaluation
     *
     * @return integer 
     */
    public function getIdevaluation()
    {
        return $this->idevaluation;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Evaluation
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Evaluation
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set iddeal
     *
     * @param \MyApp\UserBundle\Entity\Deal $iddeal
     * @return Evaluation
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
     * @return Evaluation
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
