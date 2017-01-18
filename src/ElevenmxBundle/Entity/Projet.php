<?php

namespace ElevenmxBundle\Entity;

/**
 * Projet
 */
class Projet
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titreProjet;

    /**
     * @var string
     */
    private $client;

    /**
     * @var string
     */
    private $marque;

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
     * Get id
     *
     * @return int
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
     * Set client
     *
     * @param string $client
     *
     * @return Projet
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Projet
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $commentaire;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaire = new \Doctrine\Common\Collections\ArrayCollection();
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
        $this->commentaire[] = $commentaire;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \ElevenmxBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\ElevenmxBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaire->removeElement($commentaire);
    }

    /**
     * Get commentaire
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
    /**
     * @var \ElevenmxBundle\Entity\User
     */
    private $users;


    /**
     * Set users
     *
     * @param \ElevenmxBundle\Entity\User $users
     *
     * @return Projet
     */
    public function setUsers(\ElevenmxBundle\Entity\User $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \ElevenmxBundle\Entity\User
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $commentaires;

    /**
     * @var \ElevenmxBundle\Entity\User
     */
    private $user;


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
}
