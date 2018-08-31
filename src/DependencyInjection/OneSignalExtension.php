<?php

/**
 * This file is part of the Adelplace\OneSignalBundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 **/

namespace Adelplace\OneSignalBundle\DependencyInjection;

use Adelplace\OneSignalBundle\OneSignalBundle;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * @author Alexandre Delplace alexandre.delplacemille@gmail.com
 */
class OneSignalExtension extends Extension
{
    /**
     * @param array            $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $processedConfig = $this->processConfiguration($configuration, $configs);

        $container->setParameter(sprintf('%s.application_id', OneSignalBundle::ALIAS), $processedConfig['application_id']);
        $container->setParameter(sprintf('%s.application_auth_key', OneSignalBundle::ALIAS), $processedConfig['application_auth_key']);
        $container->setParameter(sprintf('%s.user_auth_key', OneSignalBundle::ALIAS), $processedConfig['user_auth_key']);

        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.xml');
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {
        return OneSignalBundle::ALIAS;
    }
}
