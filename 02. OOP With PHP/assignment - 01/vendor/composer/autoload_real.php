<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6ec040f072a0f71ffa7f8d2afd6650cf
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

        spl_autoload_register(array('ComposerAutoloaderInit6ec040f072a0f71ffa7f8d2afd6650cf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6ec040f072a0f71ffa7f8d2afd6650cf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6ec040f072a0f71ffa7f8d2afd6650cf::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
