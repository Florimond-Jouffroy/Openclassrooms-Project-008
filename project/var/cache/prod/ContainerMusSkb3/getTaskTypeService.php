<?php

namespace ContainerMusSkb3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaskTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\TaskType' shared autowired service.
     *
     * @return \App\Form\TaskType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\TaskType'] = new \App\Form\TaskType();
    }
}