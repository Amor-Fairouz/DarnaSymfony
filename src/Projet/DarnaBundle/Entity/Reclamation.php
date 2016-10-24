<?php

namespace Projet\DarnaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="idClient", columns={"idClient"})})
 * @ORM\Entity
 */
class Reclamation
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
     * @ORM\Column(name="question", type="string", length=100, nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=100, nullable=true)
     */
    private $reponse;

  
    
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
     * @var email
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    
    

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
     * Set question
     *
     * @param string $question
     * @return Reclamation
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set reponse
     *
     * @param string $reponse
     * @return Reclamation
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string 
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set idclient
     *
     * @param \Projet\DarnaBundle\Entity\Personne $idclient
     * @return Reclamation
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
    function setId($id) {
        $this->id = $id;
    }
    
     /**
     * Get question
     *
     * @return string 
     */
    function getEmail() {
        return $this->email;
    }
    
    /**
     * Set reponse
     *
     * @param string $reponse
     * @return Reclamation
     */
    function setEmail($email) {
        $this->email = $email;
    }





    


    
}
