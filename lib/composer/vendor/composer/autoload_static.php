<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e3a6e696e362fab2ca71ac2617e4cde
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../model',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e3a6e696e362fab2ca71ac2617e4cde::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e3a6e696e362fab2ca71ac2617e4cde::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e3a6e696e362fab2ca71ac2617e4cde::$classMap;

        }, null, ClassLoader::class);
    }
}