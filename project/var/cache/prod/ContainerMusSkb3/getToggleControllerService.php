<?php

namespace ContainerMusSkb3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getToggleControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Task\ToggleController' shared autowired service.
     *
     * @return \App\Controller\Task\ToggleController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Task\\ToggleController'] = $instance = new \App\Controller\Task\ToggleController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\Task\\ToggleController', $container));

        return $instance;
    }
}
