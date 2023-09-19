<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e12c5cc9db00777d57e4865257bbe68
{
    public static $files = array (
        'b3c9bb666d86c9f920c4e9af1793f414' => __DIR__ . '/../..' . '/src/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'source\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e12c5cc9db00777d57e4865257bbe68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e12c5cc9db00777d57e4865257bbe68::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9e12c5cc9db00777d57e4865257bbe68::$classMap;

        }, null, ClassLoader::class);
    }
}