<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe81c6699bba4a749a244fb6279e319f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Wcs\\Hello' => __DIR__ . '/../..' . '/src/Wcs/Hello.php',
        'HelloWorld\\SayHello' => __DIR__ . '/..' . '/ehime/hello-world/src/HelloWorld/SayHello.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe81c6699bba4a749a244fb6279e319f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe81c6699bba4a749a244fb6279e319f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfe81c6699bba4a749a244fb6279e319f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfe81c6699bba4a749a244fb6279e319f::$classMap;

        }, null, ClassLoader::class);
    }
}
