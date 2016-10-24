<?php

namespace Projet\DarnaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recherche
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Recherche
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

    /**
     * @var float
     *
     * @ORM\Column(name="prixMin", type="float")
     */
    private $prixMin;

    /**
     * @var float
     *
     * @ORM\Column(name="prixMax", type="float")
     */
    private $prixMax;

    /**
     * @var string
     *
     * @ORM\Column(name="engagement", type="string", length=255)
     */
    private $engagement;


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
     * Set type
     *
     * @param string $type
     * @return Recherche
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Recherche
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
     * Set prixMin
     *
     * @param float $prixMin
     * @return Recherche
     */
    public function setPrixMin($prixMin)
    {
        $this->prixMin = $prixMin;

        return $this;
    }

    /**
     * Get prixMin
     *
     * @return float 
     */
    public function getPrixMin()
    {
        return $this->prixMin;
    }

    /**
     * Set prixMax
     *
     * @param float $prixMax
     * @return Recherche
     */
    public function setPrixMax($prixMax)
    {
        $this->prixMax = $prixMax;

        return $this;
    }

    /**
     * Get prixMax
     *
     * @return float 
     */
    public function getPrixMax()
    {
        return $this->prixMax;
    }

    /**
     * Set engagement
     *
     * @param string $engagement
     * @return Recherche
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
}
