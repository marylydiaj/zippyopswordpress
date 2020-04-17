<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2c8fce0bd7d21d1b2bc76515b028e91
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPStaging\\Test\\' => 15,
            'WPStaging\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPStaging\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../tests/unit',
        ),
        'WPStaging\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2c8fce0bd7d21d1b2bc76515b028e91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2c8fce0bd7d21d1b2bc76515b028e91::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
