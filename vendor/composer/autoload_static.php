<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8dd220b9634cfce611b7a798bcd325bb
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Illuminate\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Illuminate\\' => 
        array (
            0 => __DIR__ . '/..' . '/lavarel/framework/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8dd220b9634cfce611b7a798bcd325bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8dd220b9634cfce611b7a798bcd325bb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
