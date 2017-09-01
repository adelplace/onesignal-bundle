<?php

/**
 * This file is part of the Adelplace\OneSignalBundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 **/

namespace Adelplace\OneSignalBundle\DependencyInjection;

use Adelplace\DependencyInjection\OneSignalBundle\Configuration;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * @author Alexandre Delplace alexandre.delplacemille@gmail.com
 */
class AdelplaceOneSignalExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $processedConfig = $this->processConfiguration( $configuration, $configs );

        $container->setParameter('adelplace_one_signal.application_id', $processedConfig['application_id']);
        $container->setParameter('adelplace_one_signal.application_auth_key', $processedConfig['application_auth_key']);
        $container->setParameter('adelplace_one_signal.user_auth_key', $processedConfig['user_auth_key']);

        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.xml');
    }
}
