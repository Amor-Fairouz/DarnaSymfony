<?php

namespace Projet\DarnaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;



/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="idGerant", columns={"idGerant"})})
 * @ORM\Entity
 */
class Offre
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
     * @ORM\Column(name="description", type="string", length=200, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=20, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=30, nullable=false)
     */
    private $region;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="surface", type="float", precision=10, scale=0, nullable=false)
     */
    private $surface;

    /**
     * @var string
     *
     * @ORM\Column(name="engagement", type="string", length=20, nullable=false)
     */
    private $engagement;

    /**
     * @var string
     *
     * @ORM\Column(name="vocation", type="string", length=30, nullable=true)
     */
    private $vocation;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrChambre", type="integer", nullable=true)
     */
    private $nbrchambre;

    /**
     * @var float
     *
     * @ORM\Column(name="surfaceCouverte", type="float", precision=10, scale=0, nullable=true)
     */
    private $surfacecouverte;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_etage", type="integer", nullable=true)
     */
    private $nbrEtage;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;
     
    
    
      /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;
    
     
    public function setId($id) {
        $this->id = $id;
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
     * Set description
     *
     * @param string $description
     * @return Offre
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Offre
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
     * Set region
     *
     * @param string $region
     * @return Offre
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
     * Set prix
     *
     * @param float $prix
     * @return Offre
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set surface
     *
     * @param float $surface
     * @return Offre
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
     * Set engagement
     *
     * @param string $engagement
     * @return Offre
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
     * Set vocation
     *
     * @param string $vocation
     * @return Offre
     */
    public function setVocation($vocation)
    {
        $this->vocation = $vocation;

        return $this;
    }

    /**
     * Get vocation
     *
     * @return string 
     */
    public function getVocation()
    {
        return $this->vocation;
    }

    /**
     * Set nbrchambre
     *
     * @param integer $nbrchambre
     * @return Offre
     */
    public function setNbrchambre($nbrchambre)
    {
        $this->nbrchambre = $nbrchambre;

        return $this;
    }

    /**
     * Get nbrchambre
     *
     * @return integer 
     */
    public function getNbrchambre()
    {
        return $this->nbrchambre;
    }

    /**
     * Set surfacecouverte
     *
     * @param float $surfacecouverte
     * @return Offre
     */
    public function setSurfacecouverte($surfacecouverte)
    {
        $this->surfacecouverte = $surfacecouverte;

        return $this;
    }

    /**
     * Get surfacecouverte
     *
     * @return float 
     */
    public function getSurfacecouverte()
    {
        return $this->surfacecouverte;
    }

    /**
     * Set nbrEtage
     *
     * @param integer $nbrEtage
     * @return Offre
     */
    public function setNbrEtage($nbrEtage)
    {
        $this->nbrEtage = $nbrEtage;

        return $this;
    }

    /**
     * Get nbrEtage
     *
     * @return integer 
     */
    public function getNbrEtage()
    {
        return $this->nbrEtage;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Offre
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
     * Set idgerant
     *
     * @param \Projet\DarnaBundle\Entity\Personne $idgerant
     * @return Offre
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
    
     public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/documents';
    }
     
    
    
  

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
   /*public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }
*/
    
   
    
      public function upload()
{
    // la propriété « file » peut être vide si le champ n'est pas requis
    if (null === $this->file) {
        return;
    }

    // utilisez le nom de fichier original ici mais
    // vous devriez « l'assainir » pour au moins éviter
    // quelconques problèmes de sécurité

    // la méthode « move » prend comme arguments le répertoire cible et
    // le nom de fichier cible où le fichier doit être déplacé
    $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

    // définit la propriété « path » comme étant le nom de fichier où vous
    // avez stocké le fichier
    $this->path = $this->file->getClientOriginalName();

    // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
    $this->file = null;
}
    
    /**
     *@return string
     */
  public function toString()
{
return  $this->engagement;
}
    
}
