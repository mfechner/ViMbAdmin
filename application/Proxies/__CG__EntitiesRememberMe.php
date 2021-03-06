<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class RememberMe extends \Entities\RememberMe implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'userhash', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'ckey', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'original_ip', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'expires', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'created', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'id', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'User', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'last_used'];
        }

        return ['__isInitialized__', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'userhash', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'ckey', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'original_ip', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'expires', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'created', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'id', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'User', '' . "\0" . 'Entities\\RememberMe' . "\0" . 'last_used'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (RememberMe $proxy) {
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
    public function setUserhash($userhash)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserhash', [$userhash]);

        return parent::setUserhash($userhash);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserhash()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserhash', []);

        return parent::getUserhash();
    }

    /**
     * {@inheritDoc}
     */
    public function setCkey($ckey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCkey', [$ckey]);

        return parent::setCkey($ckey);
    }

    /**
     * {@inheritDoc}
     */
    public function getCkey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCkey', []);

        return parent::getCkey();
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalIp($originalIp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalIp', [$originalIp]);

        return parent::setOriginalIp($originalIp);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalIp', []);

        return parent::getOriginalIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpires($expires)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpires', [$expires]);

        return parent::setExpires($expires);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpires', []);

        return parent::getExpires();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Entities\Admin $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastUsed($lastUsed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastUsed', [$lastUsed]);

        return parent::setLastUsed($lastUsed);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastUsed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastUsed', []);

        return parent::getLastUsed();
    }

}
