<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Expertations extends \AppBundle\Entity\Expertations implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'date', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'client', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'status', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'price', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'expiration', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'tipo', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'kw', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'piani_casa', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'riscaldamento', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'opere_murarie', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'trifase', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'sconto', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'level', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'square_meters', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'floor', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'ambient', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'pp', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'pl', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'pt', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c1n', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c1v', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c2n', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c2v', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c3n', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c3v', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c4n', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c4v', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c5n', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c5v', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'num_circuiti', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'num_prese_telefono_dati', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'illum_sicurezza', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'spd', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'imp_ausiliari', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'created_by'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'date', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'client', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'status', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'price', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'expiration', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'tipo', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'kw', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'piani_casa', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'riscaldamento', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'opere_murarie', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'trifase', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'sconto', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'level', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'square_meters', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'floor', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'ambient', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'pp', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'pl', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'pt', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c1n', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c1v', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c2n', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c2v', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c3n', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c3v', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c4n', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c4v', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c5n', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'c5v', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'num_circuiti', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'num_prese_telefono_dati', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'illum_sicurezza', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'spd', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'imp_ausiliari', '' . "\0" . 'AppBundle\\Entity\\Expertations' . "\0" . 'created_by'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Expertations $proxy) {
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
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setClient($client)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClient', [$client]);

        return parent::setClient($client);
    }

    /**
     * {@inheritDoc}
     */
    public function getClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClient', []);

        return parent::getClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpiration($expiration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpiration', [$expiration]);

        return parent::setExpiration($expiration);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpiration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpiration', []);

        return parent::getExpiration();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipo($tipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo', [$tipo]);

        return parent::setTipo($tipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', []);

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setKw($kw)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKw', [$kw]);

        return parent::setKw($kw);
    }

    /**
     * {@inheritDoc}
     */
    public function getKw()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKw', []);

        return parent::getKw();
    }

    /**
     * {@inheritDoc}
     */
    public function setPianiCasa($pianiCasa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPianiCasa', [$pianiCasa]);

        return parent::setPianiCasa($pianiCasa);
    }

    /**
     * {@inheritDoc}
     */
    public function getPianiCasa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPianiCasa', []);

        return parent::getPianiCasa();
    }

    /**
     * {@inheritDoc}
     */
    public function setRiscaldamento($riscaldamento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRiscaldamento', [$riscaldamento]);

        return parent::setRiscaldamento($riscaldamento);
    }

    /**
     * {@inheritDoc}
     */
    public function getRiscaldamento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRiscaldamento', []);

        return parent::getRiscaldamento();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpereMurarie($opereMurarie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpereMurarie', [$opereMurarie]);

        return parent::setOpereMurarie($opereMurarie);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpereMurarie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpereMurarie', []);

        return parent::getOpereMurarie();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrifase($trifase)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrifase', [$trifase]);

        return parent::setTrifase($trifase);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrifase()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrifase', []);

        return parent::getTrifase();
    }

    /**
     * {@inheritDoc}
     */
    public function setSconto($sconto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSconto', [$sconto]);

        return parent::setSconto($sconto);
    }

    /**
     * {@inheritDoc}
     */
    public function getSconto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSconto', []);

        return parent::getSconto();
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
    public function setSquareMeters($squareMeters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSquareMeters', [$squareMeters]);

        return parent::setSquareMeters($squareMeters);
    }

    /**
     * {@inheritDoc}
     */
    public function getSquareMeters()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSquareMeters', []);

        return parent::getSquareMeters();
    }

    /**
     * {@inheritDoc}
     */
    public function setFloor($floor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFloor', [$floor]);

        return parent::setFloor($floor);
    }

    /**
     * {@inheritDoc}
     */
    public function getFloor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFloor', []);

        return parent::getFloor();
    }

    /**
     * {@inheritDoc}
     */
    public function setAmbient($ambient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAmbient', [$ambient]);

        return parent::setAmbient($ambient);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmbient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmbient', []);

        return parent::getAmbient();
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
    public function setPp($pp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPp', [$pp]);

        return parent::setPp($pp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPp', []);

        return parent::getPp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPl($pl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPl', [$pl]);

        return parent::setPl($pl);
    }

    /**
     * {@inheritDoc}
     */
    public function getPl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPl', []);

        return parent::getPl();
    }

    /**
     * {@inheritDoc}
     */
    public function setPt($pt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPt', [$pt]);

        return parent::setPt($pt);
    }

    /**
     * {@inheritDoc}
     */
    public function getPt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPt', []);

        return parent::getPt();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumCircuiti($numCircuiti)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumCircuiti', [$numCircuiti]);

        return parent::setNumCircuiti($numCircuiti);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumCircuiti()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumCircuiti', []);

        return parent::getNumCircuiti();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumPreseTelefonoDati($numPreseTelefonoDati)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumPreseTelefonoDati', [$numPreseTelefonoDati]);

        return parent::setNumPreseTelefonoDati($numPreseTelefonoDati);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumPreseTelefonoDati()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumPreseTelefonoDati', []);

        return parent::getNumPreseTelefonoDati();
    }

    /**
     * {@inheritDoc}
     */
    public function setIllumSicurezza($illumSicurezza)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIllumSicurezza', [$illumSicurezza]);

        return parent::setIllumSicurezza($illumSicurezza);
    }

    /**
     * {@inheritDoc}
     */
    public function getIllumSicurezza()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIllumSicurezza', []);

        return parent::getIllumSicurezza();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpd($spd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpd', [$spd]);

        return parent::setSpd($spd);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpd', []);

        return parent::getSpd();
    }

    /**
     * {@inheritDoc}
     */
    public function setImpAusiliari($impAusiliari)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImpAusiliari', [$impAusiliari]);

        return parent::setImpAusiliari($impAusiliari);
    }

    /**
     * {@inheritDoc}
     */
    public function getImpAusiliari()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImpAusiliari', []);

        return parent::getImpAusiliari();
    }

    /**
     * {@inheritDoc}
     */
    public function setC1n($c1n = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setC1n', [$c1n]);

        return parent::setC1n($c1n);
    }

    /**
     * {@inheritDoc}
     */
    public function getC1n()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getC1n', []);

        return parent::getC1n();
    }

    /**
     * {@inheritDoc}
     */
    public function setC1v($c1v = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setC1v', [$c1v]);

        return parent::setC1v($c1v);
    }

    /**
     * {@inheritDoc}
     */
    public function getC1v()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getC1v', []);

        return parent::getC1v();
    }

    /**
     * {@inheritDoc}
     */
    public function setC2n($c2n = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setC2n', [$c2n]);

        return parent::setC2n($c2n);
    }

    /**
     * {@inheritDoc}
     */
    public function getC2n()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getC2n', []);

        return parent::getC2n();
    }

    /**
     * {@inheritDoc}
     */
    public function setC2v($c2v = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setC2v', [$c2v]);

        return parent::setC2v($c2v);
    }

    /**
     * {@inheritDoc}
     */
    public function getC2v()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getC2v', []);

        return parent::getC2v();
    }

    /**
     * {@inheritDoc}
     */
    public function setC3n($c3n = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setC3n', [$c3n]);

        return parent::setC3n($c3n);
    }

    /**
     * {@inheritDoc}
     */
    public function getC3n()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getC3n', []);

        return parent::getC3n();
    }

    /**
     * {@inheritDoc}
     */
    public function setC3v($c3v = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setC3v', [$c3v]);

        return parent::setC3v($c3v);
    }

    /**
     * {@inheritDoc}
     */
    public function getC3v()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getC3v', []);

        return parent::getC3v();
    }

    /**
     * {@inheritDoc}
     */
    public function setC4n($c4n = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setC4n', [$c4n]);

        return parent::setC4n($c4n);
    }

    /**
     * {@inheritDoc}
     */
    public function getC4n()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getC4n', []);

        return parent::getC4n();
    }

    /**
     * {@inheritDoc}
     */
    public function setC4v($c4v = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setC4v', [$c4v]);

        return parent::setC4v($c4v);
    }

    /**
     * {@inheritDoc}
     */
    public function getC4v()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getC4v', []);

        return parent::getC4v();
    }

    /**
     * {@inheritDoc}
     */
    public function setC5n($c5n = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setC5n', [$c5n]);

        return parent::setC5n($c5n);
    }

    /**
     * {@inheritDoc}
     */
    public function getC5n()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getC5n', []);

        return parent::getC5n();
    }

    /**
     * {@inheritDoc}
     */
    public function setC5v($c5v = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setC5v', [$c5v]);

        return parent::setC5v($c5v);
    }

    /**
     * {@inheritDoc}
     */
    public function getC5v()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getC5v', []);

        return parent::getC5v();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

}
