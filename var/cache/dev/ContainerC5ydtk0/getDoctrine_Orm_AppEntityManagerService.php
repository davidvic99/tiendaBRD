<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.app_entity_manager' shared service.

require_once $this->targetDirs[3].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriver.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\FileDriver.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\Driver\\XmlDriver.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\NamingStrategy.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\QuoteStrategy.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Repository\\RepositoryFactory.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ContainerRepositoryFactory.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Configuration.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Configuration.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Persistence\\ObjectManager.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManagerInterface.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManager.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\EntityListenerResolver.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\EntityListenerServiceResolver.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\ContainerAwareEntityListenerResolver.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\ManagerConfigurator.php';

$a = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array(($this->targetDirs[3].'\\src\\AppBundle\\Resources\\config\\doctrine') => 'AppBundle\\Entity'));
$a->setGlobalBasename('mapping');

$b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$b->addDriver($a, 'AppBundle\\Entity');

$c = new \Doctrine\ORM\Configuration();
$c->setEntityNamespaces(array('AppBundle' => 'AppBundle\\Entity'));
$c->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.app_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.app_metadata_cache'] : $this->load(__DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_AppMetadataCacheService.php')) && false ?: '_'});
$c->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.app_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.app_query_cache'] : $this->load(__DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_AppQueryCacheService.php')) && false ?: '_'});
$c->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.app_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.app_result_cache'] : $this->load(__DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_AppResultCacheService.php')) && false ?: '_'});
$c->setMetadataDriverImpl($b);
$c->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$c->setProxyNamespace('Proxies');
$c->setAutoGenerateProxyClasses(true);
$c->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$c->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$c->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$c->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$c->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.app_entity_listener_resolver']) ? $this->services['doctrine.orm.app_entity_listener_resolver'] : $this->services['doctrine.orm.app_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this)) && false ?: '_'});
$c->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array())));

$this->services['doctrine.orm.app_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->load(__DIR__.'/getDoctrine_Dbal_DefaultConnectionService.php')) && false ?: '_'}, $c);

${($_ = isset($this->services['doctrine.orm.app_manager_configurator']) ? $this->services['doctrine.orm.app_manager_configurator'] : $this->services['doctrine.orm.app_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array())) && false ?: '_'}->configure($instance);

return $instance;
