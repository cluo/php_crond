<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit404a5131073371601681b4e69e0647ce
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'React\\EventLoop\\' => 16,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'React\\EventLoop\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/event-loop/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Crond\\' => 
            array (
                0 => __DIR__ . '/../..' . '/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit404a5131073371601681b4e69e0647ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit404a5131073371601681b4e69e0647ce::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit404a5131073371601681b4e69e0647ce::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}