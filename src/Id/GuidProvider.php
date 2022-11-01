<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Id;

use Flexic\DataProvider\AbstractProvider;
use Flexic\DataProvider\Generator\GuidGenerator;

final class GuidProvider extends AbstractProvider
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
    public static function v4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'guid-v4' === $key;
        });
    }

    public static function values(): array
    {
        return [
            'guid-v4' => GuidGenerator::generate(),
        ];
    }
}
