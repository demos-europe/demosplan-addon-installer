<?php

declare(strict_types=1);

namespace DemosEurope\DemosplanAddon;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class AddonInstaller extends LibraryInstaller
{
    /**
     * @inheritDoc
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'installed/'.$package->getPrettyName();
    }

    /**
     * @inheritDoc
     */
    public function supports($packageType)
    {
        return 'dplan-addon' === $packageType;
    }
}
