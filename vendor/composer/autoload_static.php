<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit923b5a78e8fc92f501d90cf9b94baf5a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alexon\\Aramix\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alexon\\Aramix\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit923b5a78e8fc92f501d90cf9b94baf5a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit923b5a78e8fc92f501d90cf9b94baf5a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit923b5a78e8fc92f501d90cf9b94baf5a::$classMap;

        }, null, ClassLoader::class);
    }
}
