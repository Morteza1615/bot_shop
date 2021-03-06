<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef8476bdb7ef326a529ae5367b405cd8
{
    public static $classMap = array (
        'Elegant' => __DIR__ . '/../..' . '/elegant/elegant.php',
        'Elegant\\Helper' => __DIR__ . '/../..' . '/elegant/src/helper.php',
        'Elegant\\Model' => __DIR__ . '/../..' . '/elegant/src/model.php',
        'Elegant\\QueryBuilder' => __DIR__ . '/../..' . '/elegant/src/querybuilder.php',
        'Elegant\\Relations\\BelongsTo' => __DIR__ . '/../..' . '/elegant/src/relations/belongsto.php',
        'Elegant\\Relations\\BelongsToMany' => __DIR__ . '/../..' . '/elegant/src/relations/belongstomany.php',
        'Elegant\\Relations\\HasMany' => __DIR__ . '/../..' . '/elegant/src/relations/hasmany.php',
        'Elegant\\Relations\\HasOne' => __DIR__ . '/../..' . '/elegant/src/relations/hasone.php',
        'Elegant\\Relations\\Relation' => __DIR__ . '/../..' . '/elegant/src/relations/relation.php',
        'Elegant\\Result' => __DIR__ . '/../..' . '/elegant/src/result.php',
        'Elegant\\Row' => __DIR__ . '/../..' . '/elegant/src/row.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitef8476bdb7ef326a529ae5367b405cd8::$classMap;

        }, null, ClassLoader::class);
    }
}
