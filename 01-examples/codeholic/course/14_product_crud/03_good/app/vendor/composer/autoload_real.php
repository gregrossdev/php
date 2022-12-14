<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7f72e04d843b6983ef565b52d23ee640
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

        spl_autoload_register(array('ComposerAutoloaderInit7f72e04d843b6983ef565b52d23ee640', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7f72e04d843b6983ef565b52d23ee640', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7f72e04d843b6983ef565b52d23ee640::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
