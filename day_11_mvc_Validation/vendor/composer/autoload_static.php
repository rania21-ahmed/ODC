<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2f1a234f05fb3481058d237f97aeeeb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2f1a234f05fb3481058d237f97aeeeb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2f1a234f05fb3481058d237f97aeeeb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf2f1a234f05fb3481058d237f97aeeeb::$classMap;

        }, null, ClassLoader::class);
    }
}
