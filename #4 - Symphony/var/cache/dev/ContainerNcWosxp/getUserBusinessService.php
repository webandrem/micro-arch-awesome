<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Business\UserBusiness' shared autowired service.

include_once $this->targetDirs[3].'/src/Business/UserBusiness.php';

return $this->privates['App\Business\UserBusiness'] = new \App\Business\UserBusiness(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')));