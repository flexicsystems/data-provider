<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Code;

use Flexic\DataProvider\AbstractProvider;
use Flexic\DataProvider\Generator\SqlGenerator;

final class SqlProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function select(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'sql-select' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function insert(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'sql-insert' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function update(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'sql-update' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function delete(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'sql-delete' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function create(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'sql-create' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function drop(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'sql-drop' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function alter(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'sql-alter' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function truncate(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'sql-truncate' === $key;
        });
    }

    public static function values(): array
    {
        return [
            'sql-select' => SqlGenerator::select(),
            'sql-insert' => SqlGenerator::insert(),
            'sql-update' => SqlGenerator::update(),
            'sql-delete' => SqlGenerator::delete(),
            'sql-create' => SqlGenerator::create(),
            'sql-drop' => SqlGenerator::drop(),
            'sql-alter' => SqlGenerator::alter(),
            'sql-truncate' => SqlGenerator::truncate(),
        ];
    }
}
