<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdd0c6be6b30c8ef8f88d60579d46aa9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Predis\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdd0c6be6b30c8ef8f88d60579d46aa9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdd0c6be6b30c8ef8f88d60579d46aa9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
