<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f72e04d843b6983ef565b52d23ee640
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f72e04d843b6983ef565b52d23ee640::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f72e04d843b6983ef565b52d23ee640::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f72e04d843b6983ef565b52d23ee640::$classMap;

        }, null, ClassLoader::class);
    }
}
