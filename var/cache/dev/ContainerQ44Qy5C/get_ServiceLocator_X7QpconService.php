<?php

namespace ContainerQ44Qy5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X7QpconService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.X7Qpcon' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.X7Qpcon'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ventaProducto' => ['privates', '.errored..service_locator.X7Qpcon.App\\Entity\\VentaProducto', NULL, 'Cannot autowire service ".service_locator.X7Qpcon": it references class "App\\Entity\\VentaProducto" but no such service exists.'],
        ], [
            'ventaProducto' => 'App\\Entity\\VentaProducto',
        ]);
    }
}
