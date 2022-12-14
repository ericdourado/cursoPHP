<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf72f2ec6b8d8e15a691210d3ca7496ac
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf72f2ec6b8d8e15a691210d3ca7496ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf72f2ec6b8d8e15a691210d3ca7496ac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf72f2ec6b8d8e15a691210d3ca7496ac::$classMap;

        }, null, ClassLoader::class);
    }
}
