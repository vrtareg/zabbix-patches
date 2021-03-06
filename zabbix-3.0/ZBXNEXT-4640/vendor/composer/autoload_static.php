<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit629146db0796df2c27d1c0ed66951085
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        'bd9634f2d41831496de0d3dfe4c94881' => __DIR__ . '/..' . '/symfony/polyfill-php56/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'fkooman\\OAuth\\Client\\Tests\\' => 27,
            'fkooman\\OAuth\\Client\\' => 21,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Util\\' => 22,
            'Symfony\\Polyfill\\Php56\\' => 23,
        ),
        'P' => 
        array (
            'ParagonIE\\ConstantTime\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'fkooman\\OAuth\\Client\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/fkooman/oauth2-client/tests',
        ),
        'fkooman\\OAuth\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/fkooman/oauth2-client/src',
        ),
        'Symfony\\Polyfill\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-util',
        ),
        'Symfony\\Polyfill\\Php56\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php56',
        ),
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit629146db0796df2c27d1c0ed66951085::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit629146db0796df2c27d1c0ed66951085::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
