<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd1cbd3d036ea9b70133010c37eb2e22
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'prasad\\HelloWorld\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'prasad\\HelloWorld\\' => 
        array (
            0 => __DIR__ . '/..' . '/prasadkumarkale/hello-prasad-composer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd1cbd3d036ea9b70133010c37eb2e22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd1cbd3d036ea9b70133010c37eb2e22::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
