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

    public static function values(): array
    {
        return [
            'sql-select' => SqlGenerator::select(),
            'sql-insert' => SqlGenerator::insert(),
            'sql-update' => SqlGenerator::update(),
        ];
    }
}
