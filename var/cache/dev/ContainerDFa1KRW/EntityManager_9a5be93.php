<?php

namespace ContainerDFa1KRW;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7171d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeredd3e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf2da5 = [
        
    ];

    public function getConnection()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getConnection', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getMetadataFactory', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getExpressionBuilder', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'beginTransaction', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getCache', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getCache();
    }

    public function transactional($func)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'transactional', array('func' => $func), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'wrapInTransaction', array('func' => $func), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'commit', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->commit();
    }

    public function rollback()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'rollback', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getClassMetadata', array('className' => $className), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'createQuery', array('dql' => $dql), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'createNamedQuery', array('name' => $name), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'createQueryBuilder', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'flush', array('entity' => $entity), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'clear', array('entityName' => $entityName), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->clear($entityName);
    }

    public function close()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'close', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->close();
    }

    public function persist($entity)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'persist', array('entity' => $entity), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'remove', array('entity' => $entity), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'refresh', array('entity' => $entity), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'detach', array('entity' => $entity), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'merge', array('entity' => $entity), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getRepository', array('entityName' => $entityName), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'contains', array('entity' => $entity), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getEventManager', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getConfiguration', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'isOpen', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getUnitOfWork', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getProxyFactory', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'initializeObject', array('obj' => $obj), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'getFilters', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'isFiltersStateClean', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'hasFilters', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return $this->valueHolder7171d->hasFilters();
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

        $instance->initializeredd3e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder7171d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7171d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7171d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, '__get', ['name' => $name], $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        if (isset(self::$publicPropertiesf2da5[$name])) {
            return $this->valueHolder7171d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7171d;

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

        $targetObject = $this->valueHolder7171d;
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
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7171d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7171d;
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
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, '__isset', array('name' => $name), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7171d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7171d;
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
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, '__unset', array('name' => $name), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7171d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7171d;
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
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, '__clone', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        $this->valueHolder7171d = clone $this->valueHolder7171d;
    }

    public function __sleep()
    {
        $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, '__sleep', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;

        return array('valueHolder7171d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeredd3e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeredd3e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeredd3e && ($this->initializeredd3e->__invoke($valueHolder7171d, $this, 'initializeProxy', array(), $this->initializeredd3e) || 1) && $this->valueHolder7171d = $valueHolder7171d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7171d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7171d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
