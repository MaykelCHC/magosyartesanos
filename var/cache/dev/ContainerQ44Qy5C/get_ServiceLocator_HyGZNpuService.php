<?php

namespace ContainerQ44Qy5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HyGZNpuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HyGZNpu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HyGZNpu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'solicitarRecogidaRepository' => ['privates', 'App\\Repository\\SolicitarRecogidaRepository', 'getSolicitarRecogidaRepositoryService', true],
        ], [
            'solicitarRecogidaRepository' => 'App\\Repository\\SolicitarRecogidaRepository',
        ]);
    }
}