<?php

namespace ContainerSZB4jjW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M32XZm7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.m32XZm7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.m32XZm7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'evenement' => ['privates', '.errored..service_locator.m32XZm7.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.m32XZm7": it references class "App\\Entity\\Evenement" but no such service exists.'],
        ], [
            'evenement' => 'App\\Entity\\Evenement',
        ]);
    }
}
