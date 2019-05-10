<?php

namespace Pintofbeer\SymfonyTwitterOAuth\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class SymfonyTwitterOAuthExtension extends Extension{

	public function load(array $configs, ContainerBuilder $container){
		$loader = new XmlFileLoader($container, new FileLocator(dirname(__FILE__).'/../Resources/config'));
		$loader->load('services.xml');
	}

}