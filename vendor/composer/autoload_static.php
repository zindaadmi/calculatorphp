<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6f071b27426f26bd1c7ab8f57a4dd47
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Calculator\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Calculator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6f071b27426f26bd1c7ab8f57a4dd47::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6f071b27426f26bd1c7ab8f57a4dd47::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
