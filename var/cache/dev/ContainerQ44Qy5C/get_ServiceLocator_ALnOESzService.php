<?php

namespace ContainerQ44Qy5C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ALnOESzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ALnOESz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ALnOESz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'formadePago' => ['privates', '.errored..service_locator.ALnOESz.App\\Entity\\FormadePago', NULL, 'Cannot autowire service ".service_locator.ALnOESz": it references class "App\\Entity\\FormadePago" but no such service exists.'],
        ], [
            'formadePago' => 'App\\Entity\\FormadePago',
        ]);
    }
}
