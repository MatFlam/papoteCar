<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Car extends \App\Entity\Car implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Car' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Car' . "\0" . 'brand', '' . "\0" . 'App\\Entity\\Car' . "\0" . 'plate', '' . "\0" . 'App\\Entity\\Car' . "\0" . 'color', '' . "\0" . 'App\\Entity\\Car' . "\0" . 'placemax', '' . "\0" . 'App\\Entity\\Car' . "\0" . 'putintoservicedate'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Car' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Car' . "\0" . 'brand', '' . "\0" . 'App\\Entity\\Car' . "\0" . 'plate', '' . "\0" . 'App\\Entity\\Car' . "\0" . 'color', '' . "\0" . 'App\\Entity\\Car' . "\0" . 'placemax', '' . "\0" . 'App\\Entity\\Car' . "\0" . 'putintoservicedate'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Car $proxy) {
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
    public function getBrand(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrand', []);

        return parent::getBrand();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrand(string $brand): \App\Entity\Car
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrand', [$brand]);

        return parent::setBrand($brand);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlate(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlate', []);

        return parent::getPlate();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlate(string $plate): \App\Entity\Car
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlate', [$plate]);

        return parent::setPlate($plate);
    }

    /**
     * {@inheritDoc}
     */
    public function getColor(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColor', []);

        return parent::getColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setColor(?string $color): \App\Entity\Car
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColor', [$color]);

        return parent::setColor($color);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlacemax(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlacemax', []);

        return parent::getPlacemax();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlacemax(int $placemax): \App\Entity\Car
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlacemax', [$placemax]);

        return parent::setPlacemax($placemax);
    }

    /**
     * {@inheritDoc}
     */
    public function getPutintoservicedate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPutintoservicedate', []);

        return parent::getPutintoservicedate();
    }

    /**
     * {@inheritDoc}
     */
    public function setPutintoservicedate(\DateTimeInterface $putintoservicedate): \App\Entity\Car
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPutintoservicedate', [$putintoservicedate]);

        return parent::setPutintoservicedate($putintoservicedate);
    }

}