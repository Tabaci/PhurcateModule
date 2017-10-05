<?php

namespace Phurcate\Module;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ModuleInstaller extends LibraryInstaller
{
	public function getInstallPath(PackageInterface $package)
	{
		return "cache/modules/" . $package->getPrettyName();
	}
	
	public function supports($packageType)
	{
		return $packageType === "phurcate-module";
	}
}
