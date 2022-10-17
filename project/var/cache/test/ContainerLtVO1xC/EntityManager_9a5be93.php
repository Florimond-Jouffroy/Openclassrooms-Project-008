<?php

namespace ContainerLtVO1xC;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder209e6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer61104 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesca0a6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getConnection', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getMetadataFactory', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getExpressionBuilder', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'beginTransaction', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getCache', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getCache();
    }

    public function transactional($func)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'transactional', array('func' => $func), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'wrapInTransaction', array('func' => $func), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'commit', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->commit();
    }

    public function rollback()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'rollback', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getClassMetadata', array('className' => $className), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'createQuery', array('dql' => $dql), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'createNamedQuery', array('name' => $name), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'createQueryBuilder', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'flush', array('entity' => $entity), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'clear', array('entityName' => $entityName), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->clear($entityName);
    }

    public function close()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'close', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->close();
    }

    public function persist($entity)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'persist', array('entity' => $entity), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'remove', array('entity' => $entity), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'refresh', array('entity' => $entity), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'detach', array('entity' => $entity), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'merge', array('entity' => $entity), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'contains', array('entity' => $entity), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getEventManager', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getConfiguration', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'isOpen', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getUnitOfWork', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getProxyFactory', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'initializeObject', array('obj' => $obj), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'getFilters', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'isFiltersStateClean', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'hasFilters', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return $this->valueHolder209e6->hasFilters();
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

        $instance->initializer61104 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder209e6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder209e6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder209e6->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, '__get', ['name' => $name], $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        if (isset(self::$publicPropertiesca0a6[$name])) {
            return $this->valueHolder209e6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder209e6;

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

        $targetObject = $this->valueHolder209e6;
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
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder209e6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder209e6;
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
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, '__isset', array('name' => $name), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder209e6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder209e6;
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
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, '__unset', array('name' => $name), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder209e6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder209e6;
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
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, '__clone', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        $this->valueHolder209e6 = clone $this->valueHolder209e6;
    }

    public function __sleep()
    {
        $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, '__sleep', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;

        return array('valueHolder209e6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer61104 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer61104;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer61104 && ($this->initializer61104->__invoke($valueHolder209e6, $this, 'initializeProxy', array(), $this->initializer61104) || 1) && $this->valueHolder209e6 = $valueHolder209e6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder209e6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder209e6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
