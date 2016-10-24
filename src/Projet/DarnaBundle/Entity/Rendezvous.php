<?php

namespace Projet\DarnaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rendezvous
 *
 * @ORM\Table(name="rendezvous", indexes={@ORM\Index(name="idClient", columns={"idClient", "idOffre"}), @ORM\Index(name="idOffre", columns={"idOffre"}), @ORM\Index(name="IDX_C09A9BA8A455ACCF", columns={"idClient"})})
 * @ORM\Entity
 */
class Rendezvous
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=30, nullable=false)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=20, nullable=false)
     */
    private $date;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idclient;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idOffre", referencedColumnName="id")
     * })
     */
    private $idoffre;

 private $Offres;
 private $Clients;

 
 function getOffres() {
     return $this->Offres;
 }

 function getClients() {
     return $this->Clients;
 }

 function setClients($Clients) {
     $this->Clients = $Clients;
 }

  
 function setOffres($Offres) {
     $this->Offres = $Offres;
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
     * Set lieu
     *
     * @param string $lieu
     * @return Rendezvous
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Rendezvous
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idclient
     *
     * @param \Projet\DarnaBundle\Entity\Personne $idclient
     * @return Rendezvous
     */
    public function setIdclient(\Projet\DarnaBundle\Entity\Personne $idclient = null)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return \Projet\DarnaBundle\Entity\Personne 
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set idoffre
     *
     * @param \Projet\DarnaBundle\Entity\Offre $idoffre
     * @return Rendezvous
     */
    public function setIdoffre(\Projet\DarnaBundle\Entity\Offre $idoffre = null)
    {
        $this->idoffre = $idoffre;

        return $this;
    }

    /**
     * Get idoffre
     *
     * @return \Projet\DarnaBundle\Entity\Offre 
     */
    public function getIdoffre()
    {
        return $this->idoffre;
    }

    
    
    
    
    function setId($id) {
        $this->id = $id;
    }


    }
