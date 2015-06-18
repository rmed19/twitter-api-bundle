<?php

namespace Nm\TwitterApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface {

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('nm_twitter_api');


        $rootNode
                ->children()
                    ->scalarNode('consumer_key')->isRequired()->end()
                    ->scalarNode('consumer_secret')->isRequired()->end()
                    ->scalarNode('access_token')->isRequired()->end()
                    ->scalarNode('access_token_secret')->isRequired()->end()
                ->end()
        ;

        return $treeBuilder;
    }

}
