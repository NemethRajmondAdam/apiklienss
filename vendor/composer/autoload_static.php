<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7375ab2169314543edb323a86d65024
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita7375ab2169314543edb323a86d65024::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7375ab2169314543edb323a86d65024::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita7375ab2169314543edb323a86d65024::$classMap;

        }, null, ClassLoader::class);
    }
}
