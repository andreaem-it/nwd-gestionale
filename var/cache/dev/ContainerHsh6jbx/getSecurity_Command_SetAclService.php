<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.command.set_acl' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Command/SetAclCommand.php';

$this->services['security.command.set_acl'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\SetAclCommand(${($_ = isset($this->services['security.acl.provider']) ? $this->services['security.acl.provider'] : $this->load('getSecurity_Acl_ProviderService.php')) && false ?: '_'});

$instance->setName('acl:set');

return $instance;
