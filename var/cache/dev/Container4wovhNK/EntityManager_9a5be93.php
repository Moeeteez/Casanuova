<?php

namespace Container4wovhNK;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd237c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdd8d8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc9dd8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getConnection', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getMetadataFactory', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getExpressionBuilder', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'beginTransaction', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getCache', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'transactional', array('func' => $func), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'commit', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->commit();
    }

    public function rollback()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'rollback', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getClassMetadata', array('className' => $className), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'createQuery', array('dql' => $dql), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'createNamedQuery', array('name' => $name), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'createQueryBuilder', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'flush', array('entity' => $entity), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'clear', array('entityName' => $entityName), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->clear($entityName);
    }

    public function close()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'close', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->close();
    }

    public function persist($entity)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'persist', array('entity' => $entity), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'remove', array('entity' => $entity), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'refresh', array('entity' => $entity), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'detach', array('entity' => $entity), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'merge', array('entity' => $entity), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'contains', array('entity' => $entity), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getEventManager', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getConfiguration', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'isOpen', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getUnitOfWork', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getProxyFactory', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'initializeObject', array('obj' => $obj), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'getFilters', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'isFiltersStateClean', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'hasFilters', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return $this->valueHolderd237c->hasFilters();
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

        $instance->initializerdd8d8 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderd237c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd237c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd237c->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, '__get', ['name' => $name], $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        if (isset(self::$publicPropertiesc9dd8[$name])) {
            return $this->valueHolderd237c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd237c;

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

        $targetObject = $this->valueHolderd237c;
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
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd237c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd237c;
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
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, '__isset', array('name' => $name), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd237c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd237c;
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
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, '__unset', array('name' => $name), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd237c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd237c;
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
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, '__clone', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        $this->valueHolderd237c = clone $this->valueHolderd237c;
    }

    public function __sleep()
    {
        $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, '__sleep', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;

        return array('valueHolderd237c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdd8d8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdd8d8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdd8d8 && ($this->initializerdd8d8->__invoke($valueHolderd237c, $this, 'initializeProxy', array(), $this->initializerdd8d8) || 1) && $this->valueHolderd237c = $valueHolderd237c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd237c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd237c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
