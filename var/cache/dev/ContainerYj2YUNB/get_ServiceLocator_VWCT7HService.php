<?php

namespace ContainerYj2YUNB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VWCT7HService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vWCT_7H' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vWCT_7H'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'solicitudPagoRepository' => ['privates', 'App\\Repository\\SolicitudPagoRepository', 'getSolicitudPagoRepositoryService', true],
        ], [
            'solicitudPagoRepository' => 'App\\Repository\\SolicitudPagoRepository',
        ]);
    }
}
