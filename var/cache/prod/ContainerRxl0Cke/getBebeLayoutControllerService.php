<?php

namespace ContainerRxl0Cke;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBebeLayoutControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\BebeLayoutController' shared autowired service.
     *
     * @return \App\Controller\BebeLayoutController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BebeLayoutController.php';

        $container->services['App\\Controller\\BebeLayoutController'] = $instance = new \App\Controller\BebeLayoutController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\BebeLayoutController', $container));

        return $instance;
    }
}