<?php

namespace ContainerQ44Qy5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PLzFt_0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PLzFt.0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PLzFt.0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ventaProducto' => ['privates', '.errored..service_locator.PLzFt.0.App\\Entity\\VentaProducto', NULL, 'Cannot autowire service ".service_locator.PLzFt.0": it references class "App\\Entity\\VentaProducto" but no such service exists.'],
            'ventaProductoRepository' => ['privates', 'App\\Repository\\VentaProductoRepository', 'getVentaProductoRepositoryService', true],
        ], [
            'ventaProducto' => 'App\\Entity\\VentaProducto',
            'ventaProductoRepository' => 'App\\Repository\\VentaProductoRepository',
        ]);
    }
}
