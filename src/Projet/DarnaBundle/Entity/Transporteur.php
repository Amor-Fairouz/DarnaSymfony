<?php

namespace Projet\DarnaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transporteur
 *
 * @ORM\Table(name="transporteur")
 * @ORM\Entity
 */
class Transporteur
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
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenon", type="string", length=30, nullable=false)
     */
    private $prenon;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=40, nullable=false)
     */
    private $adresse;



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
     * Set nom
     *
     * @param string $nom
     * @return Transporteur
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
     * Set prenon
     *
     * @param string $prenon
     * @return Transporteur
     */
    public function setPrenon($prenon)
    {
        $this->prenon = $prenon;

        return $this;
    }

    /**
     * Get prenon
     *
     * @return string 
     */
    public function getPrenon()
    {
        return $this->prenon;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return Transporteur
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Transporteur
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
    
}
