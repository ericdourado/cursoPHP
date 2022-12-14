<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7215af1de46ede0e9c0398d4bba036b8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CodeDev46\\AppEtl\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CodeDev46\\AppEtl\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7215af1de46ede0e9c0398d4bba036b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7215af1de46ede0e9c0398d4bba036b8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7215af1de46ede0e9c0398d4bba036b8::$classMap;

        }, null, ClassLoader::class);
    }
}
