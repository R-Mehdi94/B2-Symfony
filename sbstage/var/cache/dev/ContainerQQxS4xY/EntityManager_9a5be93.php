<?php

namespace ContainerQQxS4xY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder33439 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera773f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese402b = [
        
    ];

    public function getConnection()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getConnection', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getMetadataFactory', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getExpressionBuilder', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'beginTransaction', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getCache', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getCache();
    }

    public function transactional($func)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'transactional', array('func' => $func), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'wrapInTransaction', array('func' => $func), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'commit', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->commit();
    }

    public function rollback()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'rollback', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getClassMetadata', array('className' => $className), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'createQuery', array('dql' => $dql), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'createNamedQuery', array('name' => $name), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'createQueryBuilder', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'flush', array('entity' => $entity), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'clear', array('entityName' => $entityName), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->clear($entityName);
    }

    public function close()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'close', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->close();
    }

    public function persist($entity)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'persist', array('entity' => $entity), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'remove', array('entity' => $entity), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'refresh', array('entity' => $entity), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'detach', array('entity' => $entity), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'merge', array('entity' => $entity), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getRepository', array('entityName' => $entityName), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'contains', array('entity' => $entity), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getEventManager', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getConfiguration', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'isOpen', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getUnitOfWork', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getProxyFactory', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'initializeObject', array('obj' => $obj), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'getFilters', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'isFiltersStateClean', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'hasFilters', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return $this->valueHolder33439->hasFilters();
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

        $instance->initializera773f = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder33439) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder33439 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder33439->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, '__get', ['name' => $name], $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        if (isset(self::$publicPropertiese402b[$name])) {
            return $this->valueHolder33439->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33439;

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

        $targetObject = $this->valueHolder33439;
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
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33439;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder33439;
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
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, '__isset', array('name' => $name), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33439;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder33439;
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
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, '__unset', array('name' => $name), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33439;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder33439;
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
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, '__clone', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        $this->valueHolder33439 = clone $this->valueHolder33439;
    }

    public function __sleep()
    {
        $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, '__sleep', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;

        return array('valueHolder33439');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera773f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera773f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera773f && ($this->initializera773f->__invoke($valueHolder33439, $this, 'initializeProxy', array(), $this->initializera773f) || 1) && $this->valueHolder33439 = $valueHolder33439;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder33439;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder33439;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
