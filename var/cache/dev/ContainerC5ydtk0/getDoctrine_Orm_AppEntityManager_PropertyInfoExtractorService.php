<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.app_entity_manager.property_info_extractor' shared service.

require_once $this->targetDirs[3].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Persistence\\Mapping\\ClassMetadataFactory.php';
require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface.php';
require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface.php';
require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Doctrine\\PropertyInfo\\DoctrineExtractor.php';

return $this->services['doctrine.orm.app_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.app_entity_manager']) ? $this->services['doctrine.orm.app_entity_manager'] : $this->load(__DIR__.'/getDoctrine_Orm_AppEntityManagerService.php')) && false ?: '_'}->getMetadataFactory());
