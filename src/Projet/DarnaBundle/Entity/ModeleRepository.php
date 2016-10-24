<?php
namespace Projet\DarnaBundle\Entity;
use Doctrine\ORM\EntityRepository;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModeleRepository
 *
 * @author amor
 */
class ModeleRepository extends EntityRepository{
    public function FindDateDQL($idfacture)
{
  $query = $this->_em->createQuery('SELECT e.date as mydate FROM ProjetDarnaBundle:Facture e WHERE e.idfacture =:idfacture');
  $query->setParameter('idfacture', $idfacture);
  
  // Utilisation de getSingleResult car la requête ne doit retourner qu'un seul résultat
  return $query->getResult()[0]['mydate'];
}
 public function FindOffreDQL($idfacture)
{
  $query = $this->_em->createQuery('SELECT e.date as eng  FROM ProjetDarnaBundle:Offre e WHERE DATE_FORMAT(e.date,%m)=:01 ');
  $query->setParameter('id', $idfacture);
  
  // Utilisation de getSingleResult car la requête ne doit retourner qu'un seul résultat
  return $query->getResult()[0]['eng'];
}
 public function FindClientDQL($idfacture)
{
  $query = $this->_em->createQuery('SELECT e.nom as client FROM ProjetDarnaBundle:Personne e WHERE e.id =:idfacture');
  $query->setParameter('id', $idfacture);
  
  // Utilisation de getSingleResult car la requête ne doit retourner qu'un seul résultat
  return $query->getResult()[0]['client'];
}
}
