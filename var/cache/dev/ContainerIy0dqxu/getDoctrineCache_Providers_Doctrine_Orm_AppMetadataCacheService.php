<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_cache.providers.doctrine.orm.app_metadata_cache' shared service.

require_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ArrayCache.php';

$this->services['doctrine_cache.providers.doctrine.orm.app_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

$instance->setNamespace('sf_orm_app_97ca839b4513591dc99a4b4e7dfcc8b0f1721a05d18df2faab4a620d3084f345');

return $instance;
