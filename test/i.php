<?php
require __DIR__.'/../vendor/autoload.php';

use Composer\Console\Application;
use Nonlux\Composer\InstallPlugin;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\ConsoleOutput;

$app= new Application();

$app->doRun(new ArrayInput(['-d'=>__DIR__]), new ConsoleOutput());
$plugin=new InstallPlugin();
$plugin->activate($app->getComposer(), $app->getIO());

$app->doRun(new ArrayInput(['install', '-d'=>__DIR__]), new ConsoleOutput());

