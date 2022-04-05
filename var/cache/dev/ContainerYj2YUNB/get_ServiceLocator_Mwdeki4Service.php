<?php

namespace ContainerYj2YUNB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Mwdeki4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Mwdeki4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Mwdeki4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ventaProductoRepository' => ['privates', 'App\\Repository\\VentaProductoRepository', 'getVentaProductoRepositoryService', true],
        ], [
            'ventaProductoRepository' => 'App\\Repository\\VentaProductoRepository',
        ]);
    }
}