<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.acl.voter.basic_permissions' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Model/ObjectIdentityRetrievalStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Domain/ObjectIdentityRetrievalStrategy.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Model/SecurityIdentityRetrievalStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Domain/SecurityIdentityRetrievalStrategy.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Permission/PermissionMapInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Permission/MaskBuilderRetrievalInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Permission/BasicPermissionMap.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-acl/Voter/AclVoter.php';

return $this->services['security.acl.voter.basic_permissions'] = new \Symfony\Component\Security\Acl\Voter\AclVoter(${($_ = isset($this->services['security.acl.provider']) ? $this->services['security.acl.provider'] : $this->load('getSecurity_Acl_ProviderService.php')) && false ?: '_'}, new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy(), new \Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy(${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')) && false ?: '_'}), new \Symfony\Component\Security\Acl\Permission\BasicPermissionMap(), ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'}, true);
