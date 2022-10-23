<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0eb4ad99e882d3fc17a20c8702668997
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Feh\\CadastroPresenca\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Feh\\CadastroPresenca\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0eb4ad99e882d3fc17a20c8702668997::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0eb4ad99e882d3fc17a20c8702668997::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0eb4ad99e882d3fc17a20c8702668997::$classMap;

        }, null, ClassLoader::class);
    }
}
