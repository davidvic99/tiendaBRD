<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sensio_distribution.security_checker' shared service.

require_once $this->targetDirs[3].'\\vendor\\sensiolabs\\security-checker\\SensioLabs\\Security\\SecurityChecker.php';

return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
