<?php

namespace Container7vqfEee;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationPushService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_push' shared service.
     *
     * @return \Symfony\Component\Translation\Command\TranslationPushCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Command/TranslationTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Command/TranslationPushCommand.php';

        $container->privates['console.command.translation_push'] = $instance = new \Symfony\Component\Translation\Command\TranslationPushCommand(($container->privates['translation.provider_collection'] ?? $container->load('getTranslation_ProviderCollectionService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), [], []);

        $instance->setName('translation:push');
        $instance->setDescription('Push translations to a given provider.');

        return $instance;
    }
}
