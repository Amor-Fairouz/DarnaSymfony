<?php

namespace Projet\DarnaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="idGerant", columns={"idGerant", "idClient"}), @ORM\Index(name="idClient", columns={"idClient"}), @ORM\Index(name="idOffre", columns={"idOffre"}), @ORM\Index(name="IDX_FE866410B2C5F4EA", columns={"idGerant"})})
 * @ORM\Entity(repositoryClass="Projet\DarnaBundle\Entity\ModeleRepository")
 */
class Facture
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idFacture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacture;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=20, nullable=false)
     * @Assert\Date()
     */
    private $date;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGerant", referencedColumnName="id")
     * })
     */
    private $idgerant;

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



    /**
     * Get idfacture
     *
     * @return integer 
     */
    public function getIdfacture()
    {
        return $this->idfacture;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Facture
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
     * Set idgerant
     *
     * @param \Projet\DarnaBundle\Entity\Personne $idgerant
     * @return Facture
     */
    public function setIdgerant(\Projet\DarnaBundle\Entity\Personne $idgerant = null)
    {
        $this->idgerant = $idgerant;
        return $this;
    }

    /**
     * Get idgerant
     *
     * @return \Projet\DarnaBundle\Entity\Personne 
     */
    public function getIdgerant()
    {
        return $this->idgerant;
    }

    /**
     * Set idclient
     *
     * @param \Projet\DarnaBundle\Entity\Personne $idclient
     * @return Facture
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
     * @return Facture
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
    
    
    
}
