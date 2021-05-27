<?php

namespace ContainerE15euTB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9da0e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf040e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties970e1 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getConnection', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getMetadataFactory', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getExpressionBuilder', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'beginTransaction', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getCache', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'transactional', array('func' => $func), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->transactional($func);
    }

    public function commit()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'commit', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->commit();
    }

    public function rollback()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'rollback', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getClassMetadata', array('className' => $className), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'createQuery', array('dql' => $dql), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'createNamedQuery', array('name' => $name), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'createQueryBuilder', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'flush', array('entity' => $entity), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'clear', array('entityName' => $entityName), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->clear($entityName);
    }

    public function close()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'close', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->close();
    }

    public function persist($entity)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'persist', array('entity' => $entity), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'remove', array('entity' => $entity), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'refresh', array('entity' => $entity), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'detach', array('entity' => $entity), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'merge', array('entity' => $entity), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'contains', array('entity' => $entity), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getEventManager', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getConfiguration', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'isOpen', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getUnitOfWork', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getProxyFactory', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'initializeObject', array('obj' => $obj), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'getFilters', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'isFiltersStateClean', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'hasFilters', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return $this->valueHolder9da0e->hasFilters();
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

        $instance->initializerf040e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9da0e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9da0e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9da0e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, '__get', ['name' => $name], $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        if (isset(self::$publicProperties970e1[$name])) {
            return $this->valueHolder9da0e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9da0e;

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

        $targetObject = $this->valueHolder9da0e;
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
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9da0e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9da0e;
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
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, '__isset', array('name' => $name), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9da0e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9da0e;
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
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, '__unset', array('name' => $name), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9da0e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9da0e;
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
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, '__clone', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        $this->valueHolder9da0e = clone $this->valueHolder9da0e;
    }

    public function __sleep()
    {
        $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, '__sleep', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;

        return array('valueHolder9da0e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf040e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf040e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf040e && ($this->initializerf040e->__invoke($valueHolder9da0e, $this, 'initializeProxy', array(), $this->initializerf040e) || 1) && $this->valueHolder9da0e = $valueHolder9da0e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9da0e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9da0e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
