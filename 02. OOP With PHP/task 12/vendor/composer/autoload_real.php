<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit06b61661955cd3ee6dc4ab18421675fb
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

        spl_autoload_register(array('ComposerAutoloaderInit06b61661955cd3ee6dc4ab18421675fb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit06b61661955cd3ee6dc4ab18421675fb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit06b61661955cd3ee6dc4ab18421675fb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
