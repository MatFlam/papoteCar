<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.Tgh4rjm' shared service.

return $this->privates['service_locator.Tgh4rjm'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('em' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'));
}));