<?php

/**
 * This file is part of the Adelplace\OneSignalBundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 **/

namespace Adelplace\OneSignalBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Alexandre Delplace alexandre.delplacemille@gmail.com
 */
final class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('adelplace_one_signal');
        $rootNode
            ->children()
                ->scalarNode('application_id')
                    ->isRequired()
                    ->info('Your OneSignal application id.')
                ->end()
                ->scalarNode('application_auth_key')
                    ->isRequired()
                    ->info('OneSignal application auth key.')
                ->end()
                ->scalarNode('user_auth_key')
                    ->isRequired()
                    ->info('Your OneSignal auth key.')
                ->end()
            ->end()
        ;
        return $treeBuilder;
    }
}
