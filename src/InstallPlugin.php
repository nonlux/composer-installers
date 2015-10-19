<?php

namespace Nonlux\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class InstallPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
    }
}
