<?php

namespace ContainerOlKzYTr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIndexController2Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\User\IndexController' shared autowired service.
     *
     * @return \App\Controller\Admin\User\IndexController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/User/IndexController.php';

        $container->services['App\\Controller\\Admin\\User\\IndexController'] = $instance = new \App\Controller\Admin\User\IndexController(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\Admin\\User\\IndexController', $container));

        return $instance;
    }
}
