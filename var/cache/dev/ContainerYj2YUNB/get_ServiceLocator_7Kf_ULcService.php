<?php

namespace ContainerYj2YUNB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7Kf_ULcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7Kf.uLc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7Kf.uLc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'servicio' => ['privates', '.errored..service_locator.7Kf.uLc.App\\Entity\\Servicios', NULL, 'Cannot autowire service ".service_locator.7Kf.uLc": it references class "App\\Entity\\Servicios" but no such service exists.'],
        ], [
            'servicio' => 'App\\Entity\\Servicios',
        ]);
    }
}
