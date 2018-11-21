<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc042b196d51faf6b70e3c2f662f3c15
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Madcoda\\Youtube\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Madcoda\\Youtube\\' => 
        array (
            0 => __DIR__ . '/..' . '/madcoda/php-youtube-api/src',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\VideosController' => __DIR__ . '/../..' . '/app/controllers/VideosController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Models\\Video' => __DIR__ . '/../..' . '/app/models/Video.php',
        'App\\Repositories\\YoutubeRepository' => __DIR__ . '/../..' . '/app/repositories/YoutubeRepository.php',
        'App\\Services\\YoutubeService' => __DIR__ . '/../..' . '/app/services/YoutubeService.php',
        'ComposerAutoloaderInitcc042b196d51faf6b70e3c2f662f3c15' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitcc042b196d51faf6b70e3c2f662f3c15' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Madcoda\\Youtube\\Constants' => __DIR__ . '/..' . '/madcoda/php-youtube-api/src/Constants.php',
        'Madcoda\\Youtube\\Facades\\Youtube' => __DIR__ . '/..' . '/madcoda/php-youtube-api/src/Facades/Youtube.php',
        'Madcoda\\Youtube\\Tests\\YoutubeTest' => __DIR__ . '/..' . '/madcoda/php-youtube-api/tests/YoutubeTest.php',
        'Madcoda\\Youtube\\Youtube' => __DIR__ . '/..' . '/madcoda/php-youtube-api/src/Youtube.php',
        'Madcoda\\Youtube\\YoutubeServiceProviderLaravel4' => __DIR__ . '/..' . '/madcoda/php-youtube-api/src/YoutubeServiceProviderLaravel4.php',
        'Madcoda\\Youtube\\YoutubeServiceProviderLaravel5' => __DIR__ . '/..' . '/madcoda/php-youtube-api/src/YoutubeServiceProviderLaravel5.php',
        'Madcoda\\compat' => __DIR__ . '/..' . '/madcoda/php-youtube-api/src/compat.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc042b196d51faf6b70e3c2f662f3c15::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc042b196d51faf6b70e3c2f662f3c15::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc042b196d51faf6b70e3c2f662f3c15::$classMap;

        }, null, ClassLoader::class);
    }
}
