<?php

declare(strict_types=1);

namespace DemosEurope\DemosplanAddon;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class AddonInstallerPlugin implements PluginInterface
{

    public function activate(Composer $composer, IOInterface $io): void
    {
        $installer = new AddonInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
        // TODO: Implement deactivate() method.
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
        // TODO: Implement uninstall() method.
    }
}
