<?php

namespace ContainerRxl0Cke;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DxReJxZService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.DxReJxZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DxReJxZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repa' => ['privates', '.errored..service_locator.DxReJxZ.App\\Entity\\Repas', NULL, 'Cannot autowire service ".service_locator.DxReJxZ": it references class "App\\Entity\\Repas" but no such service exists.'],
        ], [
            'repa' => 'App\\Entity\\Repas',
        ]);
    }
}
