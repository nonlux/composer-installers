<?php

namespace phpDocumentor\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class BitrixModuleInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $name=preg_replace('/^bitrix-module-/','',$package->getPrettyName());

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
