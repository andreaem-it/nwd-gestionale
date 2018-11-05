<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Rooms extends \AppBundle\Entity\Rooms implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'level', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'sq_meter_from', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'sq_meter_to', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'punti_prese', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'punti_luce', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'prese_tv'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'level', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'sq_meter_from', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'sq_meter_to', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'punti_prese', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'punti_luce', '' . "\0" . 'AppBundle\\Entity\\Rooms' . "\0" . 'prese_tv'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Rooms $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLevel($level)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLevel', [$level]);

        return parent::setLevel($level);
    }

    /**
     * {@inheritDoc}
     */
    public function getLevel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLevel', []);

        return parent::getLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function setSqMeterFrom($sqMeterFrom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSqMeterFrom', [$sqMeterFrom]);

        return parent::setSqMeterFrom($sqMeterFrom);
    }

    /**
     * {@inheritDoc}
     */
    public function getSqMeterFrom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSqMeterFrom', []);

        return parent::getSqMeterFrom();
    }

    /**
     * {@inheritDoc}
     */
    public function setSqMeterTo($sqMeterTo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSqMeterTo', [$sqMeterTo]);

        return parent::setSqMeterTo($sqMeterTo);
    }

    /**
     * {@inheritDoc}
     */
    public function getSqMeterTo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSqMeterTo', []);

        return parent::getSqMeterTo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPuntiPrese($puntiPrese)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPuntiPrese', [$puntiPrese]);

        return parent::setPuntiPrese($puntiPrese);
    }

    /**
     * {@inheritDoc}
     */
    public function getPuntiPrese()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPuntiPrese', []);

        return parent::getPuntiPrese();
    }

    /**
     * {@inheritDoc}
     */
    public function setPuntiLuce($puntiLuce)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPuntiLuce', [$puntiLuce]);

        return parent::setPuntiLuce($puntiLuce);
    }

    /**
     * {@inheritDoc}
     */
    public function getPuntiLuce()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPuntiLuce', []);

        return parent::getPuntiLuce();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreseTv($preseTv)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreseTv', [$preseTv]);

        return parent::setPreseTv($preseTv);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreseTv()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreseTv', []);

        return parent::getPreseTv();
    }

}
