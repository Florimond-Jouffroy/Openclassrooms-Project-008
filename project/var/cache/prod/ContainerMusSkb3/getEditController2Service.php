<?php

namespace ContainerMusSkb3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditController2Service extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Task\EditController' shared autowired service.
     *
     * @return \App\Controller\Task\EditController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Task\\EditController'] = $instance = new \App\Controller\Task\EditController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\Task\\EditController', $container));

        return $instance;
    }
}
