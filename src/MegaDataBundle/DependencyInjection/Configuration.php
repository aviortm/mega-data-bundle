<?php

namespace MegaDataBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    const BASE_URL = 'http://localhost';

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('mega_data');

        $rootNode
            ->children()
                ->scalarNode('base_url')->defaultValue('')->end() // twitter
            ->end()
        ;

        return $treeBuilder;
    }
}
