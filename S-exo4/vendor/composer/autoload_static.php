<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc703e59259bc77cdab4778c9ce327910
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lamp\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lamp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc703e59259bc77cdab4778c9ce327910::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc703e59259bc77cdab4778c9ce327910::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc703e59259bc77cdab4778c9ce327910::$classMap;

        }, null, ClassLoader::class);
    }
}
