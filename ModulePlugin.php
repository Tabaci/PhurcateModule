<?php

namespace Phurcate\Module;

use Composer\Plugin\PluginInterface;
use Composer\Composer;
use Composer\IO\IOInterface;

class ModulePlugin implements PluginInterface
{
	public function activate(
			Composer $composer,
			IOInterface $io)
	{
		$installer = new ModuleInstaller($io, $composer);
		
		$composer->getInstallationManager()->addInstaller($installer);
	}
}
