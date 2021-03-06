<?php

namespace ElevenmxBundle\Entity;

/**
 * Projet
 */
class Projet
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titreProjet;

    /**
     * @var string
     */

    /**
     * @var string
     */
    private $produit;

    /**
     * @var string
     */
    private $nomGraphiste;


    /**

     * @var string
     */
    public $dateCreationProjet;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $commentaires;

    /**
     * @var \ElevenmxBundle\Entity\User
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set titreProjet
     *
     * @param string $titreProjet
     *
     * @return Projet
     */
    public function setTitreProjet($titreProjet)
    {
        $this->titreProjet = $titreProjet;

        return $this;
    }

    /**
     * Get titreProjet
     *
     * @return string
     */
    public function getTitreProjet()
    {
        return $this->titreProjet;
    }



    /**
     * Set dateCreationProjet
     *
     * @return string
     */
    public function setDateCreationProjet()
    {
        return $this->dateCreationProjet;
    }

    /**
     * Get dateCreationProjet
     *
     * @return string
     */
    public function getDateCreationProjet()
    {
        return $this->dateCreationProjet;
    }


    /**
     * Set produit
     *
     * @param string $produit
     *
     * @return Projet
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return string
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set nomGraphiste
     *
     * @param string $nomGraphiste
     *
     * @return Projet
     */
    public function setNomGraphiste($nomGraphiste)
    {
        $this->nomGraphiste = $nomGraphiste;

        return $this;
    }

    /**
     * Get nomGraphiste
     *
     * @return string
     */
    public function getNomGraphiste()
    {
        return $this->nomGraphiste;
    }
    /**
     * @var string
     */
    private $status;

    /**
     * Add dateCreationProjet
     *
     * @param \ElevenmxBundle\Entity\Commentaire $dateCreationProjet
     *
     * @return Projet
     */
    public function addDateCreationProjet(\ElevenmxBundle\Entity\Commentaire $dateCreationProjet)
    {
        $this->dateCreationProjet[] = $dateCreationProjet;

        return $this;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Projet
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Add commentaire
     *
     * @param \ElevenmxBundle\Entity\Commentaire $commentaire
     *
     * @return Projet
     */
    public function addCommentaire(\ElevenmxBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \ElevenmxBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\ElevenmxBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires->removeElement($commentaire);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set user
     *
     * @param \ElevenmxBundle\Entity\User $user
     *
     * @return Projet
     */
    public function setUser(\ElevenmxBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ElevenmxBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * @var \ElevenmxBundle\Entity\Marque
     */
    private $marque;


    /**
     * Set marque
     *
     * @param \ElevenmxBundle\Entity\Marque $marque
     *
     * @return Projet
     */
    public function setMarque(\ElevenmxBundle\Entity\Marque $marque = null)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \ElevenmxBundle\Entity\Marque
     */
    public function getMarque()
    {
        return $this->marque;
    }

    public function __toString()
    {
        return $this->status;
        return $this->dateCreationProjet;
    }
    /**
     * @var \ElevenmxBundle\Entity\Gestionstatus
     */
    private $statut;


    /**
     * Set statut
     *
     * @param \ElevenmxBundle\Entity\Gestionstatus $statut
     *
     * @return Projet
     */
    public function setStatut(\ElevenmxBundle\Entity\Gestionstatus $statut = null)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return \ElevenmxBundle\Entity\Gestionstatus
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
