<?php

namespace ContainerMusSkb3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_Sync_FactoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'messenger.transport.sync.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\Sync\SyncTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.transport.sync.factory'] = new \Symfony\Component\Messenger\Transport\Sync\SyncTransportFactory(($container->privates['messenger.routable_message_bus'] ?? $container->load('getMessenger_RoutableMessageBusService')));
    }
}
