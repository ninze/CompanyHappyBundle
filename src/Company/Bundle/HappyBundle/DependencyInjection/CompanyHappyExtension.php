<?php

namespace Company\Bundle\HappyBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;


use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;


class CompanyHappyExtension extends Extension implements ExtensionInterface
{


    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $configuration = new Configuration();
        $options = $this->processConfiguration($configuration, $configs);

        // Do something with your options here
    }


}
