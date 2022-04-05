<?php

namespace ContainerYj2YUNB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ky8bYL4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ky8bYL4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ky8bYL4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ventaServicio' => ['privates', '.errored..service_locator.Ky8bYL4.App\\Entity\\VentaServicio', NULL, 'Cannot autowire service ".service_locator.Ky8bYL4": it references class "App\\Entity\\VentaServicio" but no such service exists.'],
            'ventaServicioRepository' => ['privates', 'App\\Repository\\VentaServicioRepository', 'getVentaServicioRepositoryService', true],
        ], [
            'ventaServicio' => 'App\\Entity\\VentaServicio',
            'ventaServicioRepository' => 'App\\Repository\\VentaServicioRepository',
        ]);
    }
}
