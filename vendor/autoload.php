<?php

if (PHP_VERSION_ID < 80000) {
    echo sprintf("Fatal Error: composer.lock was created for PHP version 8.0 or higher but the current PHP version is %d.%d.%s.\n", PHP_MAJOR_VERSION, PHP_MINOR_VERSION, PHP_RELEASE_VERSION);
    exit(1);
}

// autoload.php @generated by Composer

require_once __DIR__ . '/composer/autoload_real.php';

return ComposerAutoloaderInitf6d40712d846ad5fed130c2064e54df6::getLoader();
