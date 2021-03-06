<?php

namespace ContainerYj2YUNB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZoS76_GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zoS76.G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zoS76.G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'solicitudPago' => ['privates', '.errored..service_locator.zoS76.G.App\\Entity\\SolicitudPago', NULL, 'Cannot autowire service ".service_locator.zoS76.G": it references class "App\\Entity\\SolicitudPago" but no such service exists.'],
        ], [
            'solicitudPago' => 'App\\Entity\\SolicitudPago',
        ]);
    }
}
