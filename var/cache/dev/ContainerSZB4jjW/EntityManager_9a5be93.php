<?php

namespace ContainerSZB4jjW;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd685c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfc229 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties51fad = [
        
    ];

    public function getConnection()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getConnection', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getMetadataFactory', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getExpressionBuilder', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'beginTransaction', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getCache', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'transactional', array('func' => $func), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->transactional($func);
    }

    public function commit()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'commit', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->commit();
    }

    public function rollback()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'rollback', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getClassMetadata', array('className' => $className), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'createQuery', array('dql' => $dql), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'createNamedQuery', array('name' => $name), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'createQueryBuilder', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'flush', array('entity' => $entity), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'clear', array('entityName' => $entityName), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->clear($entityName);
    }

    public function close()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'close', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->close();
    }

    public function persist($entity)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'persist', array('entity' => $entity), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'remove', array('entity' => $entity), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'refresh', array('entity' => $entity), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'detach', array('entity' => $entity), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'merge', array('entity' => $entity), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'contains', array('entity' => $entity), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getEventManager', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getConfiguration', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'isOpen', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getUnitOfWork', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getProxyFactory', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'initializeObject', array('obj' => $obj), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'getFilters', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'isFiltersStateClean', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'hasFilters', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return $this->valueHolderd685c->hasFilters();
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

        $instance->initializerfc229 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd685c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd685c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd685c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, '__get', ['name' => $name], $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        if (isset(self::$publicProperties51fad[$name])) {
            return $this->valueHolderd685c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd685c;

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

        $targetObject = $this->valueHolderd685c;
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
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd685c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd685c;
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
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, '__isset', array('name' => $name), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd685c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd685c;
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
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, '__unset', array('name' => $name), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd685c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd685c;
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
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, '__clone', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        $this->valueHolderd685c = clone $this->valueHolderd685c;
    }

    public function __sleep()
    {
        $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, '__sleep', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;

        return array('valueHolderd685c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfc229 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfc229;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfc229 && ($this->initializerfc229->__invoke($valueHolderd685c, $this, 'initializeProxy', array(), $this->initializerfc229) || 1) && $this->valueHolderd685c = $valueHolderd685c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd685c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd685c;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
