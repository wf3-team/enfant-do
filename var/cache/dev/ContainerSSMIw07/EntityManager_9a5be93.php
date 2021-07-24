<?php

namespace ContainerSSMIw07;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd6d2d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer49f00 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties03c78 = [
        
    ];

    public function getConnection()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getConnection', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getMetadataFactory', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getExpressionBuilder', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'beginTransaction', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getCache', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'transactional', array('func' => $func), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->transactional($func);
    }

    public function commit()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'commit', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->commit();
    }

    public function rollback()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'rollback', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getClassMetadata', array('className' => $className), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'createQuery', array('dql' => $dql), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'createNamedQuery', array('name' => $name), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'createQueryBuilder', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'flush', array('entity' => $entity), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'clear', array('entityName' => $entityName), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->clear($entityName);
    }

    public function close()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'close', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->close();
    }

    public function persist($entity)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'persist', array('entity' => $entity), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'remove', array('entity' => $entity), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'refresh', array('entity' => $entity), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'detach', array('entity' => $entity), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'merge', array('entity' => $entity), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'contains', array('entity' => $entity), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getEventManager', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getConfiguration', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'isOpen', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getUnitOfWork', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getProxyFactory', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'initializeObject', array('obj' => $obj), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'getFilters', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'isFiltersStateClean', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'hasFilters', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return $this->valueHolderd6d2d->hasFilters();
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

        $instance->initializer49f00 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd6d2d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd6d2d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd6d2d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, '__get', ['name' => $name], $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        if (isset(self::$publicProperties03c78[$name])) {
            return $this->valueHolderd6d2d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6d2d;

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

        $targetObject = $this->valueHolderd6d2d;
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
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6d2d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd6d2d;
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
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, '__isset', array('name' => $name), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6d2d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd6d2d;
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
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, '__unset', array('name' => $name), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6d2d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd6d2d;
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
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, '__clone', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        $this->valueHolderd6d2d = clone $this->valueHolderd6d2d;
    }

    public function __sleep()
    {
        $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, '__sleep', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;

        return array('valueHolderd6d2d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer49f00 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer49f00;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer49f00 && ($this->initializer49f00->__invoke($valueHolderd6d2d, $this, 'initializeProxy', array(), $this->initializer49f00) || 1) && $this->valueHolderd6d2d = $valueHolderd6d2d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd6d2d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd6d2d;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
