<?php

namespace ContainerEGpig5Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvenementControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EvenementController' shared autowired service.
     *
     * @return \App\Controller\EvenementController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EvenementController.php';

        $container->services['App\\Controller\\EvenementController'] = $instance = new \App\Controller\EvenementController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\EvenementController', $container));

        return $instance;
    }
}
