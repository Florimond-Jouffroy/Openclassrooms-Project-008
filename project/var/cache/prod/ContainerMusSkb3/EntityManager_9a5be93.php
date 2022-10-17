<?php

namespace ContainerMusSkb3;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2df59 = null;
    private $initializer061c9 = null;
    private static $publicProperties3ac3b = [
        
    ];
    public function getConnection()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getConnection', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getMetadataFactory', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getExpressionBuilder', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'beginTransaction', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getCache', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getCache();
    }
    public function transactional($func)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'transactional', array('func' => $func), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'wrapInTransaction', array('func' => $func), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'commit', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->commit();
    }
    public function rollback()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'rollback', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getClassMetadata', array('className' => $className), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'createQuery', array('dql' => $dql), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'createNamedQuery', array('name' => $name), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'createQueryBuilder', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'flush', array('entity' => $entity), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'clear', array('entityName' => $entityName), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->clear($entityName);
    }
    public function close()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'close', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->close();
    }
    public function persist($entity)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'persist', array('entity' => $entity), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'remove', array('entity' => $entity), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'refresh', array('entity' => $entity), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'detach', array('entity' => $entity), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'merge', array('entity' => $entity), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getRepository', array('entityName' => $entityName), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'contains', array('entity' => $entity), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getEventManager', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getConfiguration', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'isOpen', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getUnitOfWork', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getProxyFactory', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'initializeObject', array('obj' => $obj), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'getFilters', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'isFiltersStateClean', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'hasFilters', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return $this->valueHolder2df59->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer061c9 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolder2df59) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2df59 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder2df59->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, '__get', ['name' => $name], $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        if (isset(self::$publicProperties3ac3b[$name])) {
            return $this->valueHolder2df59->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2df59;
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
        $targetObject = $this->valueHolder2df59;
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
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2df59;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2df59;
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
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, '__isset', array('name' => $name), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2df59;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder2df59;
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
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, '__unset', array('name' => $name), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2df59;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder2df59;
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
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, '__clone', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        $this->valueHolder2df59 = clone $this->valueHolder2df59;
    }
    public function __sleep()
    {
        $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, '__sleep', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
        return array('valueHolder2df59');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer061c9 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer061c9;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer061c9 && ($this->initializer061c9->__invoke($valueHolder2df59, $this, 'initializeProxy', array(), $this->initializer061c9) || 1) && $this->valueHolder2df59 = $valueHolder2df59;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2df59;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2df59;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
