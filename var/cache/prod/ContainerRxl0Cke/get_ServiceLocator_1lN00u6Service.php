<?php

namespace ContainerRxl0Cke;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1lN00u6Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.1lN00u6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1lN00u6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hygiene' => ['privates', '.errored..service_locator.1lN00u6.App\\Entity\\Hygiene', NULL, 'Cannot autowire service ".service_locator.1lN00u6": it references class "App\\Entity\\Hygiene" but no such service exists.'],
        ], [
            'hygiene' => 'App\\Entity\\Hygiene',
        ]);
    }
}
