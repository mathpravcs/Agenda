<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7e3a6e696e362fab2ca71ac2617e4cde
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit7e3a6e696e362fab2ca71ac2617e4cde', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7e3a6e696e362fab2ca71ac2617e4cde', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7e3a6e696e362fab2ca71ac2617e4cde::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}