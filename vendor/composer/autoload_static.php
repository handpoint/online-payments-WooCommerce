<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit884b08ed8ae50f04042000ce0f58f15a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'P3\\SDK\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'P3\\SDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/p3/php-sdk/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit884b08ed8ae50f04042000ce0f58f15a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit884b08ed8ae50f04042000ce0f58f15a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit884b08ed8ae50f04042000ce0f58f15a::$classMap;

        }, null, ClassLoader::class);
    }
}
