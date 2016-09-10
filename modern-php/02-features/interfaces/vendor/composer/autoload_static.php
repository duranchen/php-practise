<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbfced4b49a03027e548a18a94e4bf826
{
    public static $classMap = array (
        'modernphp\\chapter2\\CommandOutputDocument' => __DIR__ . '/../..' . '/CommandOutputDocument.php',
        'modernphp\\chapter2\\DocumentStore' => __DIR__ . '/../..' . '/DocumentStore.php',
        'modernphp\\chapter2\\Documentable' => __DIR__ . '/../..' . '/Documentable.php',
        'modernphp\\chapter2\\HtmlDocument' => __DIR__ . '/../..' . '/HtmlDocument.php',
        'modernphp\\chapter2\\StreamDocument' => __DIR__ . '/../..' . '/StreamDocument.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbfced4b49a03027e548a18a94e4bf826::$classMap;

        }, null, ClassLoader::class);
    }
}
