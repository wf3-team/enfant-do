<?php

namespace ContainerGOf1xbH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Samqw1CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.samqw1C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.samqw1C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'utilisateurRepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'utilisateurRepo' => 'App\\Repository\\UserRepository',
        ]);
    }
}