<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.i3nl.uy' shared service.

return $this->services['service_locator.i3nl.uy'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('mailer' => function () {
    return ${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->load('getSwiftmailer_Mailer_DefaultService.php')) && false ?: '_'};
}));
