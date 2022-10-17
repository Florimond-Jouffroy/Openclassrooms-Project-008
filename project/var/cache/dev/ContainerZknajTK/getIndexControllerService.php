<?php

namespace ContainerZknajTK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIndexControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\Task\IndexController' shared autowired service.
     *
     * @return \App\Controller\Admin\Task\IndexController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/Task/IndexController.php';

        $container->services['App\\Controller\\Admin\\Task\\IndexController'] = $instance = new \App\Controller\Admin\Task\IndexController(($container->privates['App\\Repository\\TaskRepository'] ?? $container->load('getTaskRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\Admin\\Task\\IndexController', $container));

        return $instance;
    }
}
