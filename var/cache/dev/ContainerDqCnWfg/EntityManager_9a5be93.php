<?php

namespace ContainerDqCnWfg;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7814a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb9a51 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbabfd = [
        
    ];

    public function getConnection()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getConnection', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getMetadataFactory', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getExpressionBuilder', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'beginTransaction', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getCache', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'transactional', array('func' => $func), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->transactional($func);
    }

    public function commit()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'commit', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->commit();
    }

    public function rollback()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'rollback', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getClassMetadata', array('className' => $className), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'createQuery', array('dql' => $dql), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'createNamedQuery', array('name' => $name), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'createQueryBuilder', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'flush', array('entity' => $entity), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'clear', array('entityName' => $entityName), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->clear($entityName);
    }

    public function close()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'close', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->close();
    }

    public function persist($entity)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'persist', array('entity' => $entity), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'remove', array('entity' => $entity), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'refresh', array('entity' => $entity), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'detach', array('entity' => $entity), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'merge', array('entity' => $entity), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'contains', array('entity' => $entity), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getEventManager', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getConfiguration', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'isOpen', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getUnitOfWork', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getProxyFactory', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'initializeObject', array('obj' => $obj), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'getFilters', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'isFiltersStateClean', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'hasFilters', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return $this->valueHolder7814a->hasFilters();
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

        $instance->initializerb9a51 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7814a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7814a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7814a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, '__get', ['name' => $name], $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        if (isset(self::$publicPropertiesbabfd[$name])) {
            return $this->valueHolder7814a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7814a;

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

        $targetObject = $this->valueHolder7814a;
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
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7814a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7814a;
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
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, '__isset', array('name' => $name), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7814a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7814a;
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
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, '__unset', array('name' => $name), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7814a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7814a;
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
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, '__clone', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        $this->valueHolder7814a = clone $this->valueHolder7814a;
    }

    public function __sleep()
    {
        $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, '__sleep', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;

        return array('valueHolder7814a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb9a51 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb9a51;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb9a51 && ($this->initializerb9a51->__invoke($valueHolder7814a, $this, 'initializeProxy', array(), $this->initializerb9a51) || 1) && $this->valueHolder7814a = $valueHolder7814a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7814a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7814a;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
