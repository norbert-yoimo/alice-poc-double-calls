<?php
use Nelmio\Alice\Loader\NativeLoader;
require('vendor/autoload.php');
$loader = new NativeLoader();
$objects = $loader->loadFile(__DIR__ .'/fixture.yml');
