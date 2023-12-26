<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1311617ab139e3df6d05e6a8e979c6ae
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Test\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Test\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1311617ab139e3df6d05e6a8e979c6ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1311617ab139e3df6d05e6a8e979c6ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1311617ab139e3df6d05e6a8e979c6ae::$classMap;

        }, null, ClassLoader::class);
    }
}