<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'AppBundle\Controller\SecurityController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/AppBundle/Controller/SecurityController.php';

return $this->services['AppBundle\Controller\SecurityController'] = new \AppBundle\Controller\SecurityController(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.change_password.form.factory']) ? $this->services['fos_user.change_password.form.factory'] : $this->load('getFosUser_ChangePassword_Form_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->load('getFosUser_UserManagerService.php')) && false ?: '_'});
