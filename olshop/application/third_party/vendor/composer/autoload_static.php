<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit234f8c05f598c1803b24e89261b1fc50
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit234f8c05f598c1803b24e89261b1fc50::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit234f8c05f598c1803b24e89261b1fc50::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
