<?php

namespace Container341SdZj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHygieneControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HygieneController' shared autowired service.
     *
     * @return \App\Controller\HygieneController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HygieneController.php';

        $container->services['App\\Controller\\HygieneController'] = $instance = new \App\Controller\HygieneController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\HygieneController', $container));

        return $instance;
    }
}
