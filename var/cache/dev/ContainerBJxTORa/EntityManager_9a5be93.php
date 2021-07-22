<?php

namespace ContainerBJxTORa;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8644d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere031f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties269fe = [
        
    ];

    public function getConnection()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getConnection', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getMetadataFactory', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getExpressionBuilder', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'beginTransaction', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getCache', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getCache();
    }

    public function transactional($func)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'transactional', array('func' => $func), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->transactional($func);
    }

    public function commit()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'commit', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->commit();
    }

    public function rollback()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'rollback', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getClassMetadata', array('className' => $className), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'createQuery', array('dql' => $dql), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'createNamedQuery', array('name' => $name), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'createQueryBuilder', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'flush', array('entity' => $entity), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'clear', array('entityName' => $entityName), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->clear($entityName);
    }

    public function close()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'close', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->close();
    }

    public function persist($entity)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'persist', array('entity' => $entity), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'remove', array('entity' => $entity), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'refresh', array('entity' => $entity), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'detach', array('entity' => $entity), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'merge', array('entity' => $entity), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getRepository', array('entityName' => $entityName), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'contains', array('entity' => $entity), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getEventManager', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getConfiguration', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'isOpen', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getUnitOfWork', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getProxyFactory', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'initializeObject', array('obj' => $obj), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'getFilters', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'isFiltersStateClean', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'hasFilters', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return $this->valueHolder8644d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializere031f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8644d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8644d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8644d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, '__get', ['name' => $name], $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        if (isset(self::$publicProperties269fe[$name])) {
            return $this->valueHolder8644d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8644d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8644d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8644d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8644d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, '__isset', array('name' => $name), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8644d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8644d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, '__unset', array('name' => $name), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8644d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8644d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, '__clone', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        $this->valueHolder8644d = clone $this->valueHolder8644d;
    }

    public function __sleep()
    {
        $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, '__sleep', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;

        return array('valueHolder8644d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere031f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere031f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere031f && ($this->initializere031f->__invoke($valueHolder8644d, $this, 'initializeProxy', array(), $this->initializere031f) || 1) && $this->valueHolder8644d = $valueHolder8644d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8644d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8644d;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
