<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Repas extends \App\Entity\Repas implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'biberon', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'quantite_ml', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'puree', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'compote', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'yaourt', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'quantite_pot', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'evenements'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'biberon', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'quantite_ml', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'puree', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'compote', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'yaourt', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'quantite_pot', '' . "\0" . 'App\\Entity\\Repas' . "\0" . 'evenements'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Repas $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getBiberon(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBiberon', []);

        return parent::getBiberon();
    }

    /**
     * {@inheritDoc}
     */
    public function setBiberon(bool $biberon): \App\Entity\Repas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBiberon', [$biberon]);

        return parent::setBiberon($biberon);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantiteMl(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantiteMl', []);

        return parent::getQuantiteMl();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantiteMl(?int $quantite_ml): \App\Entity\Repas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantiteMl', [$quantite_ml]);

        return parent::setQuantiteMl($quantite_ml);
    }

    /**
     * {@inheritDoc}
     */
    public function getPuree(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPuree', []);

        return parent::getPuree();
    }

    /**
     * {@inheritDoc}
     */
    public function setPuree(bool $puree): \App\Entity\Repas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPuree', [$puree]);

        return parent::setPuree($puree);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompote(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompote', []);

        return parent::getCompote();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompote(bool $compote): \App\Entity\Repas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompote', [$compote]);

        return parent::setCompote($compote);
    }

    /**
     * {@inheritDoc}
     */
    public function getYaourt(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYaourt', []);

        return parent::getYaourt();
    }

    /**
     * {@inheritDoc}
     */
    public function setYaourt(bool $yaourt): \App\Entity\Repas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYaourt', [$yaourt]);

        return parent::setYaourt($yaourt);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantitePot(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantitePot', []);

        return parent::getQuantitePot();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantitePot(?int $quantite_pot): \App\Entity\Repas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantitePot', [$quantite_pot]);

        return parent::setQuantitePot($quantite_pot);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvenements(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvenements', []);

        return parent::getEvenements();
    }

    /**
     * {@inheritDoc}
     */
    public function addEvenement(\App\Entity\Evenement $evenement): \App\Entity\Repas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEvenement', [$evenement]);

        return parent::addEvenement($evenement);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEvenement(\App\Entity\Evenement $evenement): \App\Entity\Repas
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEvenement', [$evenement]);

        return parent::removeEvenement($evenement);
    }

}
