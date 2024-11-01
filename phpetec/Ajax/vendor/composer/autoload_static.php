<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite987a2ea5e8fad451768f1520a3eec6a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alexander\\Renomear\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alexander\\Renomear\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite987a2ea5e8fad451768f1520a3eec6a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite987a2ea5e8fad451768f1520a3eec6a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite987a2ea5e8fad451768f1520a3eec6a::$classMap;

        }, null, ClassLoader::class);
    }
}
