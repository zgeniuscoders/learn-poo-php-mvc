<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc14afdf27fdad215da53beed199e1a5b
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZFramework\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZFramework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc14afdf27fdad215da53beed199e1a5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc14afdf27fdad215da53beed199e1a5b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc14afdf27fdad215da53beed199e1a5b::$classMap;

        }, null, ClassLoader::class);
    }
}