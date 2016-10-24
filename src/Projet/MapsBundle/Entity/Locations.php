<?php

namespace Projet\MapsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locations
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\MapsBundle\Entity\LocationsRepository")
 */
class Locations
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
     * @ORM\Column(name="nomLocation", type="string", length=255)
     */
    private $nomLocation;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;


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
     * Set nomLocation
     *
     * @param string $nomLocation
     * @return Locations
     */
    public function setNomLocation($nomLocation)
    {
        $this->nomLocation = $nomLocation;

        return $this;
    }

    /**
     * Get nomLocation
     *
     * @return string 
     */
    public function getNomLocation()
    {
        return $this->nomLocation;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Locations
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Locations
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}
