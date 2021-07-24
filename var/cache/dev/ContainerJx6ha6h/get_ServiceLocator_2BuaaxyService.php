<?php

namespace ContainerJx6ha6h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2BuaaxyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2Buaaxy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2Buaaxy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BebeController::delete' => ['privates', '.service_locator.utDPBgJ', 'get_ServiceLocator_UtDPBgJService', true],
            'App\\Controller\\BebeController::edit' => ['privates', '.service_locator.utDPBgJ', 'get_ServiceLocator_UtDPBgJService', true],
            'App\\Controller\\BebeController::index' => ['privates', '.service_locator.GfSyruw', 'get_ServiceLocator_GfSyruwService', true],
            'App\\Controller\\BebeController::new' => ['privates', '.service_locator.xTk4WP9', 'get_ServiceLocator_XTk4WP9Service', true],
            'App\\Controller\\BebeController::show' => ['privates', '.service_locator.utDPBgJ', 'get_ServiceLocator_UtDPBgJService', true],
            'App\\Controller\\ConseilController::index' => ['privates', '.service_locator.LEE18h1', 'get_ServiceLocator_LEE18h1Service', true],
            'App\\Controller\\EvenementController::delete' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\EvenementController::edit' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\EvenementController::index' => ['privates', '.service_locator.5MGEPl7', 'get_ServiceLocator_5MGEPl7Service', true],
            'App\\Controller\\EvenementController::new' => ['privates', '.service_locator.LEE18h1', 'get_ServiceLocator_LEE18h1Service', true],
            'App\\Controller\\EvenementController::show' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\HygieneController::delete' => ['privates', '.service_locator.1lN00u6', 'get_ServiceLocator_1lN00u6Service', true],
            'App\\Controller\\HygieneController::edit' => ['privates', '.service_locator.1lN00u6', 'get_ServiceLocator_1lN00u6Service', true],
            'App\\Controller\\HygieneController::index' => ['privates', '.service_locator.cY634EW', 'get_ServiceLocator_CY634EWService', true],
            'App\\Controller\\HygieneController::new' => ['privates', '.service_locator.LEE18h1', 'get_ServiceLocator_LEE18h1Service', true],
            'App\\Controller\\HygieneController::show' => ['privates', '.service_locator.1lN00u6', 'get_ServiceLocator_1lN00u6Service', true],
            'App\\Controller\\RepasController::delete' => ['privates', '.service_locator.DxReJxZ', 'get_ServiceLocator_DxReJxZService', true],
            'App\\Controller\\RepasController::edit' => ['privates', '.service_locator.DxReJxZ', 'get_ServiceLocator_DxReJxZService', true],
            'App\\Controller\\RepasController::new' => ['privates', '.service_locator.LEE18h1', 'get_ServiceLocator_LEE18h1Service', true],
            'App\\Controller\\RepasController::show' => ['privates', '.service_locator.DxReJxZ', 'get_ServiceLocator_DxReJxZService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\BebeController:delete' => ['privates', '.service_locator.utDPBgJ', 'get_ServiceLocator_UtDPBgJService', true],
            'App\\Controller\\BebeController:edit' => ['privates', '.service_locator.utDPBgJ', 'get_ServiceLocator_UtDPBgJService', true],
            'App\\Controller\\BebeController:index' => ['privates', '.service_locator.GfSyruw', 'get_ServiceLocator_GfSyruwService', true],
            'App\\Controller\\BebeController:new' => ['privates', '.service_locator.xTk4WP9', 'get_ServiceLocator_XTk4WP9Service', true],
            'App\\Controller\\BebeController:show' => ['privates', '.service_locator.utDPBgJ', 'get_ServiceLocator_UtDPBgJService', true],
            'App\\Controller\\ConseilController:index' => ['privates', '.service_locator.LEE18h1', 'get_ServiceLocator_LEE18h1Service', true],
            'App\\Controller\\EvenementController:delete' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\EvenementController:edit' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\EvenementController:index' => ['privates', '.service_locator.5MGEPl7', 'get_ServiceLocator_5MGEPl7Service', true],
            'App\\Controller\\EvenementController:new' => ['privates', '.service_locator.LEE18h1', 'get_ServiceLocator_LEE18h1Service', true],
            'App\\Controller\\EvenementController:show' => ['privates', '.service_locator.m32XZm7', 'get_ServiceLocator_M32XZm7Service', true],
            'App\\Controller\\HygieneController:delete' => ['privates', '.service_locator.1lN00u6', 'get_ServiceLocator_1lN00u6Service', true],
            'App\\Controller\\HygieneController:edit' => ['privates', '.service_locator.1lN00u6', 'get_ServiceLocator_1lN00u6Service', true],
            'App\\Controller\\HygieneController:index' => ['privates', '.service_locator.cY634EW', 'get_ServiceLocator_CY634EWService', true],
            'App\\Controller\\HygieneController:new' => ['privates', '.service_locator.LEE18h1', 'get_ServiceLocator_LEE18h1Service', true],
            'App\\Controller\\HygieneController:show' => ['privates', '.service_locator.1lN00u6', 'get_ServiceLocator_1lN00u6Service', true],
            'App\\Controller\\RepasController:delete' => ['privates', '.service_locator.DxReJxZ', 'get_ServiceLocator_DxReJxZService', true],
            'App\\Controller\\RepasController:edit' => ['privates', '.service_locator.DxReJxZ', 'get_ServiceLocator_DxReJxZService', true],
            'App\\Controller\\RepasController:new' => ['privates', '.service_locator.LEE18h1', 'get_ServiceLocator_LEE18h1Service', true],
            'App\\Controller\\RepasController:show' => ['privates', '.service_locator.DxReJxZ', 'get_ServiceLocator_DxReJxZService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\BebeController::delete' => '?',
            'App\\Controller\\BebeController::edit' => '?',
            'App\\Controller\\BebeController::index' => '?',
            'App\\Controller\\BebeController::new' => '?',
            'App\\Controller\\BebeController::show' => '?',
            'App\\Controller\\ConseilController::index' => '?',
            'App\\Controller\\EvenementController::delete' => '?',
            'App\\Controller\\EvenementController::edit' => '?',
            'App\\Controller\\EvenementController::index' => '?',
            'App\\Controller\\EvenementController::new' => '?',
            'App\\Controller\\EvenementController::show' => '?',
            'App\\Controller\\HygieneController::delete' => '?',
            'App\\Controller\\HygieneController::edit' => '?',
            'App\\Controller\\HygieneController::index' => '?',
            'App\\Controller\\HygieneController::new' => '?',
            'App\\Controller\\HygieneController::show' => '?',
            'App\\Controller\\RepasController::delete' => '?',
            'App\\Controller\\RepasController::edit' => '?',
            'App\\Controller\\RepasController::new' => '?',
            'App\\Controller\\RepasController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\BebeController:delete' => '?',
            'App\\Controller\\BebeController:edit' => '?',
            'App\\Controller\\BebeController:index' => '?',
            'App\\Controller\\BebeController:new' => '?',
            'App\\Controller\\BebeController:show' => '?',
            'App\\Controller\\ConseilController:index' => '?',
            'App\\Controller\\EvenementController:delete' => '?',
            'App\\Controller\\EvenementController:edit' => '?',
            'App\\Controller\\EvenementController:index' => '?',
            'App\\Controller\\EvenementController:new' => '?',
            'App\\Controller\\EvenementController:show' => '?',
            'App\\Controller\\HygieneController:delete' => '?',
            'App\\Controller\\HygieneController:edit' => '?',
            'App\\Controller\\HygieneController:index' => '?',
            'App\\Controller\\HygieneController:new' => '?',
            'App\\Controller\\HygieneController:show' => '?',
            'App\\Controller\\RepasController:delete' => '?',
            'App\\Controller\\RepasController:edit' => '?',
            'App\\Controller\\RepasController:new' => '?',
            'App\\Controller\\RepasController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
