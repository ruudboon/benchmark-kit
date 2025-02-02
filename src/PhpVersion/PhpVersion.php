<?php

declare(strict_types=1);

namespace App\PhpVersion;

final class PhpVersion
{
    public const PHP_56 = '5.6';
    public const PHP_70 = '7.0';
    public const PHP_71 = '7.1';
    public const PHP_72 = '7.2';
    public const PHP_73 = '7.3';

    public static function getAll(): array
    {
        return [
            static::PHP_56,
            static::PHP_70,
            static::PHP_71,
            static::PHP_72,
            static::PHP_73
        ];
    }

    public static function getAllWithoutDot(): array
    {
        return [
            str_replace('.', null, static::PHP_56),
            str_replace('.', null, static::PHP_70),
            str_replace('.', null, static::PHP_71),
            str_replace('.', null, static::PHP_72),
            str_replace('.', null, static::PHP_73)
        ];
    }
}
