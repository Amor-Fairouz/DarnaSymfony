<?php

namespace Proxies\__CG__\Projet\DarnaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Offre extends \Projet\DarnaBundle\Entity\Offre implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array('path' => NULL);



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->path);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', array($name));

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'id', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'description', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'date', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'region', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'prix', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'surface', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'engagement', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'vocation', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'nbrchambre', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'surfacecouverte', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'nbrEtage', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'type', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'idgerant', 'path', 'file');
        }

        return array('__isInitialized__', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'id', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'description', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'date', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'region', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'prix', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'surface', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'engagement', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'vocation', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'nbrchambre', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'surfacecouverte', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'nbrEtage', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'type', '' . "\0" . 'Projet\\DarnaBundle\\Entity\\Offre' . "\0" . 'idgerant', 'file');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Offre $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->path);
        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegion($region)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', array($region));

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegion', array());

        return parent::getRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', array($prix));

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', array());

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurface($surface)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurface', array($surface));

        return parent::setSurface($surface);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurface()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurface', array());

        return parent::getSurface();
    }

    /**
     * {@inheritDoc}
     */
    public function setEngagement($engagement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEngagement', array($engagement));

        return parent::setEngagement($engagement);
    }

    /**
     * {@inheritDoc}
     */
    public function getEngagement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEngagement', array());

        return parent::getEngagement();
    }

    /**
     * {@inheritDoc}
     */
    public function setVocation($vocation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVocation', array($vocation));

        return parent::setVocation($vocation);
    }

    /**
     * {@inheritDoc}
     */
    public function getVocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVocation', array());

        return parent::getVocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbrchambre($nbrchambre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbrchambre', array($nbrchambre));

        return parent::setNbrchambre($nbrchambre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbrchambre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbrchambre', array());

        return parent::getNbrchambre();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurfacecouverte($surfacecouverte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurfacecouverte', array($surfacecouverte));

        return parent::setSurfacecouverte($surfacecouverte);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurfacecouverte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurfacecouverte', array());

        return parent::getSurfacecouverte();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbrEtage($nbrEtage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbrEtage', array($nbrEtage));

        return parent::setNbrEtage($nbrEtage);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbrEtage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbrEtage', array());

        return parent::getNbrEtage();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdgerant(\Projet\DarnaBundle\Entity\Personne $idgerant = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdgerant', array($idgerant));

        return parent::setIdgerant($idgerant);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdgerant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdgerant', array());

        return parent::getIdgerant();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutePath', array());

        return parent::getAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', array());

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', array());

        return parent::upload();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toString', array());

        return parent::toString();
    }

}
