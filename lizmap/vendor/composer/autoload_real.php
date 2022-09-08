<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit910cee2d7bd61b88100aacb454b44b66
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

        spl_autoload_register(array('ComposerAutoloaderInit910cee2d7bd61b88100aacb454b44b66', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit910cee2d7bd61b88100aacb454b44b66', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit910cee2d7bd61b88100aacb454b44b66::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
