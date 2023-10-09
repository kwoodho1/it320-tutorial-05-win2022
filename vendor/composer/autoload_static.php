<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit554d3a341ee1ea1e04d3d349d23d731f
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit554d3a341ee1ea1e04d3d349d23d731f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit554d3a341ee1ea1e04d3d349d23d731f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit554d3a341ee1ea1e04d3d349d23d731f::$classMap;

        }, null, ClassLoader::class);
    }
}