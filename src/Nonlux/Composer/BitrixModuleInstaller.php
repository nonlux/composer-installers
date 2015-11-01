<?php

namespace Nonlux\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;
//'Nonlux\Composer\BitrixModuleInstaller' not found in /home/user/src/cgp-bit/installer/src/Nonlux/Composer/InstallPlugin.php on line 13

class BitrixModuleInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $name=preg_replace('/.+\/bitrix-module-/','',$package->getPrettyName());
        var_dump($name);
        return "web/bitrix/modules/$name";
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'bitrix-module' === $packageType;
    }
}
