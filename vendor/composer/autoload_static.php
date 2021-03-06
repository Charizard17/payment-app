<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56a9cfc0d68d474c42c0caca6baa884a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56a9cfc0d68d474c42c0caca6baa884a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56a9cfc0d68d474c42c0caca6baa884a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
