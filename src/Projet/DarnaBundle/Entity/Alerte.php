<?php

namespace Projet\DarnaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alerte
 *
 * @ORM\Table(name="alerte", indexes={@ORM\Index(name="idClient", columns={"idClient"}), @ORM\Index(name="idOffre", columns={"idOffre"})})
 * @ORM\Entity
 */
class Alerte
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
     * @var float
     *
     * @ORM\Column(name="prixMin", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixmin;

    /**
     * @var float
     *
     * @ORM\Column(name="prixMax", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixmax;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=30, nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="engagement", type="string", length=20, nullable=false)
     */
    private $engagement;

    /**
     * @var string
     *
     * @ORM\Column(name="typedeBien", type="string", length=20, nullable=false)
     */
    private $typedebien;

    /**
     * @var float
     *
     * @ORM\Column(name="surface", type="float", precision=10, scale=0, nullable=false)
     */
    private $surface;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prixmin
     *
     * @param float $prixmin
     * @return Alerte
     */
    public function setPrixmin($prixmin)
    {
        $this->prixmin = $prixmin;

        return $this;
    }

    /**
     * Get prixmin
     *
     * @return float 
     */
    public function getPrixmin()
    {
        return $this->prixmin;
    }

    /**
     * Set prixmax
     *
     * @param float $prixmax
     * @return Alerte
     */
    public function setPrixmax($prixmax)
    {
        $this->prixmax = $prixmax;

        return $this;
    }

    /**
     * Get prixmax
     *
     * @return float 
     */
    public function getPrixmax()
    {
        return $this->prixmax;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Alerte
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set engagement
     *
     * @param string $engagement
     * @return Alerte
     */
    public function setEngagement($engagement)
    {
        $this->engagement = $engagement;

        return $this;
    }

    /**
     * Get engagement
     *
     * @return string 
     */
    public function getEngagement()
    {
        return $this->engagement;
    }

    /**
     * Set typedebien
     *
     * @param string $typedebien
     * @return Alerte
     */
    public function setTypedebien($typedebien)
    {
        $this->typedebien = $typedebien;

        return $this;
    }

    /**
     * Get typedebien
     *
     * @return string 
     */
    public function getTypedebien()
    {
        return $this->typedebien;
    }

    /**
     * Set surface
     *
     * @param float $surface
     * @return Alerte
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return float 
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set idclient
     *
     * @param \Projet\DarnaBundle\Entity\Personne $idclient
     * @return Alerte
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
     * @return Alerte
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
