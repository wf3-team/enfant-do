<?php

namespace Container5jACkq1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHygieneTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\HygieneType' shared autowired service.
     *
     * @return \App\Form\HygieneType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/HygieneType.php';

        return $container->privates['App\\Form\\HygieneType'] = new \App\Form\HygieneType();
    }
}
