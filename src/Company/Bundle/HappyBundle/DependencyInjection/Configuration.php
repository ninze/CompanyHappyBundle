<?

namespace Company\Bundle\HappyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('company_happy');

        $rootNode
            ->children()
                ->arrayNode('imports')
                    ->prototype('array')
                    ->children()
                        ->scalarNode('path')->defaultValue('/tmp')->end()
                        ->scalarNode('method')->defaultValue('ALL')->end()
                        ->booleanNode('move_mail')->defaultValue(true)->end()
                        ->booleanNode('mark_read')->defaultValue(true)->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}

?>