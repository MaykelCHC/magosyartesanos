<?php

namespace ContainerYj2YUNB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZcpJe4mService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zcpJe4m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zcpJe4m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'formadePagoRepository' => ['privates', 'App\\Repository\\FormadePagoRepository', 'getFormadePagoRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'authenticationUtils' => '?',
            'formadePagoRepository' => 'App\\Repository\\FormadePagoRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}