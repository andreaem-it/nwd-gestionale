<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'security.acl.dbal.schema_listener' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/EventListener/AclSchemaListener.php';

return $this->services['security.acl.dbal.schema_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener(${($_ = isset($this->services['security.acl.dbal.schema']) ? $this->services['security.acl.dbal.schema'] : $this->load('getSecurity_Acl_Dbal_SchemaService.php')) && false ?: '_'});
