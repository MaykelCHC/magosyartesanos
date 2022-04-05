<?php

namespace ContainerQ44Qy5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZGGSTFoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZGGSTFo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZGGSTFo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'asignarProductoaUser' => ['privates', '.errored..service_locator.ZGGSTFo.App\\Entity\\AsignarProductoaUser', NULL, 'Cannot autowire service ".service_locator.ZGGSTFo": it references class "App\\Entity\\AsignarProductoaUser" but no such service exists.'],
            'asignarProductoaUserRepository' => ['privates', 'App\\Repository\\AsignarProductoaUserRepository', 'getAsignarProductoaUserRepositoryService', true],
        ], [
            'asignarProductoaUser' => 'App\\Entity\\AsignarProductoaUser',
            'asignarProductoaUserRepository' => 'App\\Repository\\AsignarProductoaUserRepository',
        ]);
    }
}
